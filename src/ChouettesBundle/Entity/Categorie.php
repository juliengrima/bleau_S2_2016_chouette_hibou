<?php

namespace ChouettesBundle\Entity;

/**
 * Categorie
 */
class Categorie
{
// Permet de convertir l'objet CATEGORIE dans MODELE en CHAINE DE CARACTERE
    public function __toString()
    {
        return $this->nom;
    }


    // GENERATED CODE //


/**
* @var integer
*/
    private $id;

/**
 * @var string
 */
    private $nom;


/**
 * Get id
 *
 * @return integer
 */
    public function getId()
    {
        return $this->id;
    }

/**
 * Set nom
 *
 * @param string $nom
 *
 * @return Categorie
 */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

/**
 * Get nom
 *
 * @return string
 */
    public function getNom()
    {
        return $this->nom;
    }
}
