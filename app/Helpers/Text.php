<?php
/**
 * Created by PhpStorm.
 * User: BDO-IT
 * Date: 29/09/2016
 * Time: 9:50
 */
namespace App\Helpers;

class Text {
    public static function only_text($string) {
		$content = $string;
		$content = preg_replace("/<img[^>]+\>/i", "", $content); 
		return $content;
    }
}