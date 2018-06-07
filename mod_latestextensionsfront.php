<?php

defined('_JEXEC') or die;



require_once __DIR__ . '/helper.php';

$version = new JVersion();
if(floatval($version->RELEASE) <= '2.5') {
	JHtml::_('stylesheet', 'mod_latestextensionsfront/style.css', array(), true);
}

$list = mod_latestextensionsfrontHelper::getList($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_latestextensionsfront', $params->get('layout', 'default'));