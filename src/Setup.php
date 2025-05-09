<?php

namespace BS\PageVersion;

use MediaWiki\MediaWikiServices;

class Setup {

	/**
	 * Initializes the extension
	 */
	public static function init() {
		$hookContainer = MediaWikiServices::getInstance()->getHookContainer();
		$hookContainer->register( 'GetMagicVariableIDs', [ new Hook\GetMagicVariableIDs(), 'handle' ] );
		$hookContainer->register( 'ParserGetVariableValueSwitch',
			[ new Hook\ParserGetVariableValueSwitch(), 'handle' ] );
		$hookContainer->register( 'PageHistoryLineEnding', [ new Hook\PageHistoryLineEnding(), 'handle' ] );
	}
}
