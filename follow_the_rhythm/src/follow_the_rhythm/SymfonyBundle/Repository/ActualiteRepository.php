<?php

namespace follow_the_rhythm\SymfonyBundle\Repository;

/**
 * ActualiteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ActualiteRepository extends \Doctrine\ORM\EntityRepository
{
    public function getActualiteArtiste(){
        //On recupère le gestionnaire d'entité
        $gestionnaireEntite=$this->_em;
        
        //On créé la requête
        $requete=$gestionnaireEntite->createQuery('SELECT ac,ar FROM follow_the_rhythmSymfonyBundle:Actualite ac LEFT JOIN ac.artiste ar');
        
        //On retourne le résultat de la requête
        return $requete->getResult();
    }
}