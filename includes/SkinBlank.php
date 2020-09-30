<?php
/**
 * SkinTemplate class for the Blank skin
 *
 * @ingroup Skins
 */
class SkinBlank extends SkinTemplate {
	public $skinname = 'blank',
		$stylename = 'Blank',
		$template = 'BlankTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.blank'
		] );
		$out->addModules( [
			'skins.blank.js'
		] );
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
