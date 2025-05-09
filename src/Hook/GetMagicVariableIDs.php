<?php

namespace BS\PageVersion\Hook;

class GetMagicVariableIDs {

	/**
	 * Adds magic word ids to Parser
	 * @param array &$variableIds
	 */
	public function handle( &$variableIds ): void {
		$variableIds[] = 'pageversion';
		$variableIds[] = 'pagerevisions';
		$variableIds[] = 'pagemajorrevisions';
	}
}
