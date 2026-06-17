<?php

declare(strict_types=1);

namespace BEA\Theme\Framework\Cli\PatternGenerator;

use InvalidArgumentException;
use RuntimeException;

final class PatternGenerator {
/**
 * @var string[]
 */
private array $allowedCategories;

public function __construct(
private readonly string $projectRoot,
array $allowedCategories = [ 'common', 'hero' ],
) {
$this->allowedCategories = array_values( array_unique( array_map( 'strval', $allowedCategories ) ) );
}

public function generate( PatternGenerationRequest $request ): PatternGenerationResult {
$slug = self::normalizeSlug( $request->slug ?: $request->name );

if ( '' === $slug ) {
throw new InvalidArgumentException( 'Pattern slug is invalid.' );
}

if ( ! $this->isAllowedCategory( $request->category ) ) {
throw new InvalidArgumentException(
sprintf(
'Category "%s" is not allowed. Allowed categories: %s.',
$request->category,
implode( ', ', $this->allowedCategories )
)
);
}

$title       = $request->title ?: trim( $request->name );
$description = $request->description ?: sprintf( 'Pattern %s.', strtolower( $title ) );
$class_name  = 'wp-pattern-' . $slug;

$created_files = [];
$files_to_make = $this->resolveFilesToGenerate( $slug, $request );

foreach ( $files_to_make as $file ) {
if ( is_file( $file['path'] ) && ! $request->force ) {
throw new RuntimeException( sprintf( 'File already exists: %s. Use --force to overwrite.', $file['path'] ) );
}

$this->ensureDirectoryExists( dirname( $file['path'] ) );
file_put_contents(
$file['path'],
$this->renderStub(
$file['stub'],
[
'{{title}}'       => $title,
'{{slug}}'        => $slug,
'{{category}}'    => $request->category,
'{{description}}' => $description,
'{{class_name}}'  => $class_name,
]
)
);

$created_files[] = $file['path'];
}

return new PatternGenerationResult(
slug: $slug,
className: $class_name,
category: $request->category,
createdFiles: $created_files,
);
}

public static function normalizeSlug( string $value ): string {
$value = strtolower( trim( $value ) );
$value = preg_replace( '/[^a-z0-9]+/', '-', $value ) ?? '';

return trim( $value, '-' );
}

public function isAllowedCategory( string $category ): bool {
return in_array( $category, $this->allowedCategories, true );
}

/**
 * @return array<int, array{path: string, stub: string}>
 */
private function resolveFilesToGenerate( string $slug, PatternGenerationRequest $request ): array {
$files    = [];
$base_dir = sprintf( '%s/stubs/pattern-generator', $this->projectRoot );

if ( $request->createPhp ) {
	$files[] = [
		'path' => sprintf( '%s/patterns/%s.php', $this->projectRoot, $slug ),
		'stub' => $this->resolveStubPathForRequest( $base_dir, 'pattern.php.stub', $request->category, $request->model ),
	];
}

if ( $request->createScss ) {
	$files[] = [
		'path' => sprintf( '%s/src/scss/wp-pattern/%s.scss', $this->projectRoot, $slug ),
		'stub' => $this->resolveStubPathForRequest( $base_dir, 'pattern.scss.stub', $request->category, $request->model ),
	];
}

if ( [] === $files ) {
	throw new InvalidArgumentException( 'Nothing to generate: enable at least one target file.' );
}

return $files;
}

private function resolveStubPathForRequest( string $base_dir, string $stub_file, string $category, ?string $model = null ): string {
if ( null !== $model ) {
	$model_stub = sprintf( '%s/%s.%s', $base_dir, self::normalizeSlug( $model ), $stub_file );
	if ( is_file( $model_stub ) ) {
		return $model_stub;
	}

	throw new RuntimeException( sprintf( 'Model stub not found: %s', $model_stub ) );
}

$category_stub = sprintf( '%s/%s.%s', $base_dir, $category, $stub_file );

if ( is_file( $category_stub ) ) {
	return $category_stub;
}

$default_stub = sprintf( '%s/%s', $base_dir, $stub_file );
if ( ! is_file( $default_stub ) ) {
	throw new RuntimeException( sprintf( 'Stub file not found: %s', $default_stub ) );
}

return $default_stub;
}

/**
 * @param array<string, string> $replacements
 */
private function renderStub( string $stub_path, array $replacements ): string {
$content = file_get_contents( $stub_path );
if ( false === $content ) {
throw new RuntimeException( sprintf( 'Unable to read stub file: %s', $stub_path ) );
}

return strtr( $content, $replacements );
}

private function ensureDirectoryExists( string $path ): void {
if ( is_dir( $path ) ) {
return;
}

if ( ! mkdir( $path, 0755, true ) && ! is_dir( $path ) ) {
throw new RuntimeException( sprintf( 'Unable to create directory: %s', $path ) );
}
}
}
