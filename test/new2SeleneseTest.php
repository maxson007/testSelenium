<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './vendor/autoload.php';


//require_once './vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestSuite.php';

/**
 * Description of new2SeleneseTest
 *
 * @author aymane
 */
class new2SeleneseTest extends PHPUnit_Extensions_Selenium2TestCase
{

    function setUp()
    {
       // $this->setBrowser("*chrome");
        $this->setBrowserUrl("https://www.google.fr");
    }

    function testMyTestCase()
    {
        $this->url("https://www.google.fr");
        
    }

}

?>