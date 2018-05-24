<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Tools
 *
 * @author aymane
 */
class Tools
{
    /**
     * mot de passe aleatoire
     * @param $nb_carqactere = longeur du mot de passe aléatoire voulu
     * @author PHPAscal.com
     * @since Thu Apr 22 13:51:04 EDT 2014
     * @return string
     */
    public static function genererMotDePpasse($nb_caractere = 12)
    {
        $mot_de_passe = "";

        $chaine = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ023456789+@!$%?&";
        $longeur_chaine = strlen($chaine);

        for ($i = 1; $i <= $nb_caractere; $i++) {
            $place_aleatoire = mt_rand(0, ($longeur_chaine - 1));
            $mot_de_passe .= $chaine[$place_aleatoire];
        }

        return $mot_de_passe;
    }
}
