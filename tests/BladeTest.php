<?php

use PHPUnit\Framework\TestCase;
use watchwood\BladeStrap\BladeStrap;

include_once(__DIR__ . "/../vendor/autoload.php");

class BladeTest extends TestCase
{
	
	public function testPanel(){
		//default panel
		$string = BladeStrap::panel("");
        $this->assertEquals("<div class='panel <?='panel-default'?>'><div class='panel-body'>", $string);
        
        //string titles get passed to result
		$string = BladeStrap::panel("'Test Title'");
		$this->assertContains("Test Title", $string);
        
        //variable titles get passed to result
		$string = BladeStrap::panel('$title');
		$this->assertContains('$title', $string);
        
        //custom panel types titles
		$string = BladeStrap::panel('($title, "primary")');
		$this->assertContains('panel-primary', $string);
        
	}
	

	public function testEndPanel(){
		$string = BladeStrap::endPanel("");
        $this->assertEquals("</div></div>", $string);
	}
	
	
	public function testAlert(){
		//default
		$string = BladeStrap::alert("");
        $this->assertEquals("<div class='alert <?='alert-info'?>'>", $string);
        
        //string titles get passed to result
		$string = BladeStrap::alert("'Test Title'");
		$this->assertContains("Test Title", $string);
        
        //variable titles get passed to result
		$string = BladeStrap::alert('$title');
		$this->assertContains('$title', $string);
        
        //custom alert types titles
		$string = BladeStrap::alert('($title, "primary")');
		$this->assertContains('alert-primary', $string);
        
	}
	

	public function testEndAlert(){
		$string = BladeStrap::endAlert("");
        $this->assertEquals("</div>", $string);
	}
	
}