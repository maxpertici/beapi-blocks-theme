<?php

declare(strict_types=1);

namespace BEA\Theme\Framework\Cli\PatternGenerator;

final readonly class PatternGenerationRequest {
public function __construct(
public string $name,
public ?string $slug = null,
public string $category = 'common',
public ?string $title = null,
public ?string $description = null,
public bool $createPhp = true,
public bool $createScss = true,
public bool $force = false,
) {
}
}
