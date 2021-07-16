<?php
namespace App\Page;

use Gt\Dom\HTMLDocument;
use Gt\DomTemplate\DocumentBinder;
use Gt\Input\Input;

class HelloYouPage {
	function go(HTMLDocument $document):void {
		$document->getElementById("debug")->innerHTML .= "\nHello you go!";
	}

	function do_greet(Input $input, DocumentBinder $binder, HTMLDocument $document):void {
		$binder->bindValue($input->getString("your-name"));
		$document->getElementById("debug")->innerHTML .= "\nHello you do greet!";
	}
}
