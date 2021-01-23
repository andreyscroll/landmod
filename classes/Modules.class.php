<?php

namespace Classes;

class Modules extends LandCMS
{
	function getTemplate($name){
		$name = strtolower($name);
		return "templates/{$name}.tpl";
	}

}
