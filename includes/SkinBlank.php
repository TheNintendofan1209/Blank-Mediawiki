<?php
/**
 * SkinTemplate class for the Blank skin
 *
 * @ingroup Skins
 */
class SkinBlank extends SkinMustache {
	public $template = 'BlankTemplate';

	/**
	 * @inheritDoc
	 */
	public function getTemplateData() {
		$data = parent::getTemplateData();
		$tpl = $this->prepareQuickTemplate();
		$tplData = $tpl->execute();
		return $data + $tplData + [
			'blank-main-page-url' => self::makeMainPageUrl(),
		];
	}
}
