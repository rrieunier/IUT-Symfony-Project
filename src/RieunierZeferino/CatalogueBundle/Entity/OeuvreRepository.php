<?php

namespace RieunierZeferino\CatalogueBundle\Entity;

use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityRepository;

/**
 * OeuvreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OeuvreRepository extends EntityRepository
{
    public function getExtrait($id)
    {
//        $query = $this->_em->createQueryBuilder('o')->select('e.extrait')
//            ->from('RieunierZeferino\CatalogueBundle\Entity\Oeuvre', 'o')
//            ->join('o.codeOeuvre', 'co')
//            ->join('co.codeComposition', 'cc')
//            ->join('cc.codeEnregistrement', 'e')
//            ->where('o.codeOeuvre=:id')
//            ->setParameter('id', $id)
//            ->getQuery();

//        $query = $this->_em->createQueryBuilder()->select('oeuvre.codeOeuvre')
//            ->from('RieunierZeferino\CatalogueBundle\Entity\Oeuvre', 'oeuvre')
//            ->join('oeuvre.codeComposition', 'c')
//            ->addSelect('c')
//            ->join('c.codeComposition', 'e')
//            ->where('o.codeOeuvre=:id')
//            ->setParameter('id', $id)
//            ->getQuery();
//
//        return $query->getSingleScalarResult();
        $composition = $this->getEntityManager()->getRepository('CatalogueBundle:CompositionOeuvre')->getComposition($id);
        $enregistrements = $this->getEntityManager()->getRepository('CatalogueBundle:Enregistrement');
        return $enregistrements->getExtraitOeuvre($composition);
    }
}