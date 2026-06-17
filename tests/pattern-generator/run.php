<?php

declare(strict_types=1);

require_once dirname( __DIR__, 2 ) . '/inc/Cli/PatternGenerator/PatternGenerationRequest.php';
require_once dirname( __DIR__, 2 ) . '/inc/Cli/PatternGenerator/PatternGenerationResult.php';
require_once dirname( __DIR__, 2 ) . '/inc/Cli/PatternGenerator/PatternGenerator.php';
require_once dirname( __DIR__, 2 ) . '/inc/Cli/PatternGenerator/GeneratePatternAction.php';

use BEA\Theme\Framework\Cli\PatternGenerator\GeneratePatternAction;
use BEA\Theme\Framework\Cli\PatternGenerator\PatternGenerationRequest;
use BEA\Theme\Framework\Cli\PatternGenerator\PatternGenerator;

function assert_true( bool $condition, string $message ): void {
if ( ! $condition ) {
throw new RuntimeException( $message );
}
}

function assert_throws( callable $callable, string $message ): void {
try {
$callable();
} catch ( Throwable ) {
return;
}

throw new RuntimeException( $message );
}

$root = dirname( __DIR__, 2 );

tmp_cleanup( $root );

$generator = new PatternGenerator( $root );

assert_true( 'my-pattern' === PatternGenerator::normalizeSlug( 'My Pattern' ), 'Slug normalization failed.' );
assert_true( 'hero-banner' === PatternGenerator::normalizeSlug( 'Hero___Banner' ), 'Slug cleanup failed.' );
assert_true( '' === PatternGenerator::normalizeSlug( '---' ), 'Invalid slug should become empty.' );

assert_throws(
static function () use ( $generator ): void {
$generator->generate( new PatternGenerationRequest( name: 'Test', category: 'unknown' ) );
},
'Unknown category should throw an exception.'
);

$result = $generator->generate(
new PatternGenerationRequest(
name: 'Landing Hero',
slug: 'landing-hero',
category: 'hero',
description: 'Landing hero section.',
)
);

$php_file  = $root . '/patterns/landing-hero.php';
$scss_file = $root . '/src/scss/wp-pattern/landing-hero.scss';

assert_true( in_array( $php_file, $result->createdFiles, true ), 'PHP file was not reported as created.' );
assert_true( in_array( $scss_file, $result->createdFiles, true ), 'SCSS file was not reported as created.' );
assert_true( is_file( $php_file ), 'PHP pattern file was not created.' );
assert_true( is_file( $scss_file ), 'SCSS pattern file was not created.' );

$php_content = file_get_contents( $php_file ) ?: '';
assert_true( str_contains( $php_content, 'Slug: beapi-blocks-theme/landing-hero' ), 'Pattern slug header is missing.' );
assert_true( str_contains( $php_content, 'wp-pattern-landing-hero' ), 'Pattern class is missing in template.' );

assert_throws(
static function () use ( $generator ): void {
$generator->generate( new PatternGenerationRequest( name: 'Landing Hero', slug: 'landing-hero' ) );
},
'Collision without force should throw an exception.'
);

$action = new GeneratePatternAction( $generator );
$scss_only_result = $action->handle(
name: 'Cards',
slug: 'cards-grid',
category: 'common',
title: 'Cards',
description: null,
only_php: false,
only_scss: true,
force: false,
);

assert_true( 1 === count( $scss_only_result->createdFiles ), 'SCSS-only mode should create one file.' );
assert_true( str_ends_with( $scss_only_result->createdFiles[0], '/src/scss/wp-pattern/cards-grid.scss' ), 'SCSS-only mode created wrong file.' );

assert_throws(
static function () use ( $action ): void {
$action->handle(
name: 'Invalid',
slug: null,
category: 'common',
title: null,
description: null,
only_php: true,
only_scss: true,
force: false,
);
},
'Mutually exclusive CLI options should throw an exception.'
);

tmp_cleanup( $root );

echo "Pattern generator tests passed.\n";

function tmp_cleanup( string $root ): void {
@unlink( $root . '/patterns/landing-hero.php' );
@unlink( $root . '/src/scss/wp-pattern/landing-hero.scss' );
@unlink( $root . '/patterns/cards-grid.php' );
@unlink( $root . '/src/scss/wp-pattern/cards-grid.scss' );
}
