<?php

namespace BS\PageVersion\Hook;

use BS\PageVersion\Variable\Base;
use BS\PageVersion\Variable\PageMajorRevisions;
use BS\PageVersion\Variable\PageRevisions;
use BS\PageVersion\Variable\PageVersion;

class ParserGetVariableValueSwitch {

	/**
	 * Returns the output for a parser variable
	 * @param \Parser $parser
	 * @param array &$cache
	 * @param string $magicWordId
	 * @param string &$ret
	 * @return bool
	 */
	public function handle( \Parser $parser, &$cache, $magicWordId, &$ret ) {
		$variable = null;
		if ( $magicWordId === 'pageversion' ) {
			$variable = new PageVersion( $parser, $cache );
		}
		if ( $magicWordId === 'pagerevisions' ) {
			$variable = new PageRevisions( $parser, $cache );
		}
		if ( $magicWordId === 'pagemajorrevisions' ) {
			$variable = new PageMajorRevisions( $parser, $cache );
		}

		if ( $variable instanceof Base ) {
			$ret = $cache[$magicWordId] = $variable->getValue();
		}

		return true;
	}
}
