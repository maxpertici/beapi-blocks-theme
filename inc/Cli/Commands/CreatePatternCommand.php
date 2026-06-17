<?php

declare(strict_types=1);

namespace BEA\Theme\Framework\Cli\Commands;

use BEA\Theme\Framework\Cli\PatternGenerator\GeneratePatternAction;
use BEA\Theme\Framework\Cli\PatternGenerator\PatternGenerator;
use Tempest\Console\Console;
use Tempest\Console\ConsoleArgument;
use Tempest\Console\ConsoleCommand;
use Tempest\Console\ExitCode;
use Throwable;

final readonly class CreatePatternCommand {
	public function __construct(
		private Console $console,
	) {
	}

	#[ConsoleCommand( name: 'pattern:create', description: 'Create a pattern from a slug.' )]
	public function __invoke(
		string $slug,
		#[ConsoleArgument( description: 'Pattern category (common or hero).' )]
		string $category = 'common',
		#[ConsoleArgument( description: 'Pattern title used in the PHP header.' )]
		?string $title = null,
		#[ConsoleArgument( description: 'Pattern description used in the PHP header.' )]
		?string $description = null,
		#[ConsoleArgument( name: 'only-php', description: 'Generate only the PHP file.' )]
		bool $only_php = false,
		#[ConsoleArgument( name: 'only-scss', description: 'Generate only the SCSS file.' )]
		bool $only_scss = false,
		#[ConsoleArgument( description: 'Overwrite target files if they exist.' )]
		bool $force = false,
	): ExitCode {
		$action = new GeneratePatternAction(
			new PatternGenerator( dirname( __DIR__, 3 ) )
		);

		try {
			$result = $action->create(
				slug: $slug,
				category: $category,
				title: $title,
				description: $description,
				only_php: $only_php,
				only_scss: $only_scss,
				force: $force,
			);
		} catch ( Throwable $exception ) {
			$this->console->error( $exception->getMessage() );

			return ExitCode::ERROR;
		}

		$this->console->success( sprintf( 'Pattern "%s" created with class "%s".', $result->slug, $result->className ) );

		foreach ( $result->createdFiles as $file ) {
			$this->console->writeln( sprintf( ' - %s', $file ) );
		}

		return ExitCode::SUCCESS;
	}
}
