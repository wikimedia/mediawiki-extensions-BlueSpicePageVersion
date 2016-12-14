<?php

namespace BS\PageVersion\Variable;

use BS\PageVersion\RevisionCounter;
use BS\PageVersion\VersionFormatter;

class PageVersion extends Base {

	/**
	 * @return string
	 */
	public function getValue() {
		$versionFormatter = new VersionFormatter(
			$this->parser->getTitle()
		);
		return $versionFormatter->formatLatest();
	}
}