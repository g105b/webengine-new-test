<?php
function go(\Gt\Dom\HTMLDocument $document):void {
	$document->getElementById("debug")->innerHTML .= "\nCommon go!";
}
