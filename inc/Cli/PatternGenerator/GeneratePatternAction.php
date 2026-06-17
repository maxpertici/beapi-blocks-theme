<?php

declare(strict_types=1);

namespace BEA\Theme\Framework\Cli\PatternGenerator;

use InvalidArgumentException;

final readonly class GeneratePatternAction {
public function __construct(
private PatternGenerator $generator,
) {
}

public function generateFromModel(
string $model,
?string $slug,
string $category,
?string $title,
?string $description,
bool $only_php,
bool $only_scss,
bool $force,
): PatternGenerationResult {
$this->assertExclusiveTargets( $only_php, $only_scss );

$resolved_slug = $slug ?: $model;

return $this->generator->generate(
	new PatternGenerationRequest(
		name: $resolved_slug,
		slug: $resolved_slug,
		model: $model,
		category: $category,
		title: $title,
		description: $description,
		createPhp: ! $only_scss,
		createScss: ! $only_php,
		force: $force,
	)
);
}

private function assertExclusiveTargets( bool $only_php, bool $only_scss ): void {
if ( $only_php && $only_scss ) {
	throw new InvalidArgumentException( 'Options --only-php and --only-scss are mutually exclusive.' );
}
}
}
