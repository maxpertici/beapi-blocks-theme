<?php

declare(strict_types=1);

namespace BEA\Theme\Framework\Cli\PatternGenerator;

final readonly class PatternGenerationResult {
/**
 * @param string[] $createdFiles
 */
public function __construct(
public string $slug,
public string $className,
public string $category,
public array $createdFiles,
) {
}
}
