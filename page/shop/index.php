<?php

use Gt\DomTemplate\DocumentBinder;

function go(DocumentBinder $binder):void {
	$binder->bindList(\App\Data\Fakerbase::DATA_SHOP);
}
