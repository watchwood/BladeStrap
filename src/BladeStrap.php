<?php

namespace watchwood\BladeStrap;


class BladeStrap
{
	
	protected static function getParams($expression) {
		return explode(',',str_replace(['(',')'], '', $expression));
	}
	
	protected static function trim($param) {
		return trim($param, "'\" \t\n\r\0\x0B");
	}
	
	public static function panel($expression) {
		$params = static::getParams($expression);
		$title = static::trim($params[0]);
		$class = isset($params[1]) ? "panel-".static::trim($params[1]) : "panel-default";
		
		$html = "<div class='panel {$class}'>";
		if ($title) {
			$html .= "<div class='panel-heading'><h3 class='panel-title'>{$title}</h3></div>";
		}
		$html .= "<div class='panel-body'>";
				   
		return $html;
	}
	
	public static function endPanel($expression) {
		return "</div></div>";
	}
	
	
	
	
	public static function alert($expression) {
		$params = static::getParams($expression);
		$title = static::trim($params[0]);
		$class = isset($params[1]) ? "alert-".static::trim($params[1]) : "alert-info";
				   
		
		$html = "<div class='alert {$class}'>";
		if ($title) {
			$html .= "<h5>{$title}</h5>";
		}
				   
		return $html;
	}
	
	public static function endAlert($expression) {
           return "</div>";
	}
	
	
}
