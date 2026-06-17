<?php

declare(strict_types=1);

namespace BEA\Theme\Framework\Cli\PatternGenerator;

use InvalidArgumentException;

final readonly class GeneratePatternAction {
public function __construct(
private PatternGenerator $generator,
) {
}

public function handle(
string $name,
?string $slug,
string $category,
?string $title,
?string $description,
bool $only_php,
bool $only_scss,
bool $force,
): PatternGenerationResult {
if ( $only_php && $only_scss ) {
throw new InvalidArgumentException( 'Options --only-php and --only-scss are mutually exclusive.' );
}

return $this->generator->generate(
new PatternGenerationRequest(
name: $name,
slug: $slug,
category: $category,
title: $title,
description: $description,
createPhp: ! $only_scss,
createScss: ! $only_php,
force: $force,
)
);
}
}
