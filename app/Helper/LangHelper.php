<?php
use Stichoza\GoogleTranslate\GoogleTranslate;
if ( !function_exists('lang') )
{
	function lang($word){

		return GoogleTranslate::trans($word, env('APP_LN'));
	}
}