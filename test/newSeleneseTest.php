<?php

require_once './vendor/autoload.php';

//require_once './vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestSuite.php';
/**
 * Description of newSeleneseTest
 *
 * @author aymane
 */
class newSeleneseTest extends PHPUnit_Extensions_Selenium2TestCase
{

    protected function setUp()
    {
        $this->setBrowser("chrome");
        $this->setBrowserUrl("http://ftpperso.free.fr/");
    }

    public function testMyTestCase()
    {
        $count = 0;
        do {
            $al = $this->genererMotDePpasse(2);
            $this->url("http://ftpperso.free.fr/index.pl");
            $this->byName("login")->value("aocof");
            $this->byName("passwd")->value("aocof" . strtolower($al));
            $this->byCssSelector("td > input[type=\"submit\"]")->submit();
            //$this->timeouts()->implicitWait("30000");
            try {
                $content = $this->byLinkText(" Déconnexion");
                var_dump($content->value());
                var_dump("le mdp: " . $al);
                break;
            } catch (Exception $exc) {
               // echo $exc->getTraceAsString();
                //$count++;
                continue;
            }

            // 

            $count++;
        } while ($count <= 10);
    }

    /*  function testMyTestCase()
      {
      $count = 0;
      do {
      $al = $this->genererMotDePpasse(2);
      $this->open("/index.pl");
      $this->type("name=login", "aocof");
      $this->type("name=passwd", "aocof" . $al);
      $this->click("css=td > input[type=\"submit\"]");
      $this->waitForPageToLoad("30000");
      $this->assertTrue($this->isElementPresent("link=Déconnexion"));
      $count++;
      } while ($count <= 10);
      }
     */

    public function genererMotDePpasse($nb_caractere = 12)
    {
        $mot_de_passe = "";

       // $chaine = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ023456789+@!$%?&";
        $chaine="0123456789";
        $longeur_chaine = strlen($chaine);

        for ($i = 1; $i <= $nb_caractere; $i++) {
            $place_aleatoire = mt_rand(0, ($longeur_chaine - 1));
            $mot_de_passe .= $chaine[$place_aleatoire];
        }

        return $mot_de_passe;
    }

}

?>