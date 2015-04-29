<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoogleTest
 *
 * @author admistrador
 */
require_once __DIR__ . '/../src/vendor/autoload.php';


class GoogleTest extends PHPUnit_Framework_TestCase {
    public function testSearch(){
        
        //conectar con el driver
        $host='http://localhost:4444/wd/hub';
        $capabilities=  DesiredCapabilities::firefox();
        $driver=RemoteWebDriver::create($host,$capabilities);
        
        //logica de la prueba
        $driver->get("http://www.google.com");
        $driver->findElement(WebDriverBy::name("q"))->sendKeys("cat");
        
        //asserts
        $title=$driver->getTitle();
        $this->assertEquals("Google", $title);
        
        //cerrar el driver
        $driver->quit();
        
    }
}
