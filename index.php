<?php

use Classes\{LandCMS, Seo};

header('Content-Type:text/html;charset=utf-8');
require_once 'config.php';

$l = new LandCMS();
$modules = $l->load();

$s = new Seo();
$seo = $s->getData();

require_once 'templates/header.tpl';

foreach($modules as $module => $enabled)
{
	if($enabled)
	{
		$module = ucfirst($module);
		$fullpath_module = "Classes\\{$module}";
		$el = new $fullpath_module();
		$data = $el->getData();
		require_once $el->getTemplate($module);
	}
}

require_once 'templates/footer.tpl';
