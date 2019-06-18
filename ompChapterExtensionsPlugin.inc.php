<?php
import('lib.pkp.classes.plugins.GenericPlugin');
class ompChapterExtensionsPlugin extends GenericPlugin {
	public function register($category, $path, $mainContextId = NULL) {

		// Register the plugin even when it is not enabled
		$success = parent::register($category, $path);

		if ($success && $this->getEnabled()) {
			// Do something when the plugin is enabled
		}

		return $success;
	}

	/**
	* This plugin adds additional metadata fields to the chapter metadata field.
	 */
	public function getDisplayName() {
		return __('plugins.generic.ompChapterExtensions.displayName');
	}

	/**
	 * This plugin adds additional metadata fields to the chapter metadata field.
	 */
	public function getDescription() {
		return __('plugins.generic.ompChapterExtensions.description');
	}
}
