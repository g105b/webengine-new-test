<?php

use Gt\DomTemplate\DocumentBinder;

function go(DocumentBinder $binder) {
	$binder->bindList([
		["i" => 1, "name" => "first"],
		["i" => 2, "name" => "second"],
		["i" => 3, "name" => "third"],
	]);
}
