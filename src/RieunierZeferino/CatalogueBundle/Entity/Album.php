<?php

namespace RieunierZeferino\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="Album", indexes={@ORM\Index(name="IDX_F8594147E1990660", columns={"Code_Genre"}), @ORM\Index(name="IDX_F8594147EA8CE117", columns={"Code_Editeur"})})
 * @ORM\Entity(repositoryClass="RieunierZeferino\CatalogueBundle\Entity\AlbumRepository")
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Album", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Titre_Album", type="string", length=400, nullable=false)
     */
    private $titreAlbum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Année_Album", type="integer", nullable=true)
     */
    private $annéeAlbum;

    /**
     * @var string
     *
     * @ORM\Column(name="Pochette", type="blob", nullable=true)
     */
    private $pochette;

    /**
     * @var string
     *
     * @ORM\Column(name="ASIN", type="string", length=20, nullable=true)
     */
    private $asin;

    /**
     * @var \Genre
     *
     * @ORM\ManyToOne(targetEntity="Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Genre", referencedColumnName="Code_Genre")
     * })
     */
    private $codeGenre;

    /**
     * @var \Editeur
     *
     * @ORM\ManyToOne(targetEntity="Editeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Editeur", referencedColumnName="Code_Editeur")
     * })
     */
    private $codeEditeur;



    /**
     * Get codeAlbum
     *
     * @return integer
     */
    public function getCodeAlbum()
    {
        return $this->codeAlbum;
    }

    /**
     * Set titreAlbum
     *
     * @param string $titreAlbum
     * @return Album
     */
    public function setTitreAlbum($titreAlbum)
    {
        $this->titreAlbum = $titreAlbum;

        return $this;
    }

    /**
     * Get titreAlbum
     *
     * @return string
     */
    public function getTitreAlbum()
    {
        return $this->titreAlbum;
    }

    /**
     * Set annéeAlbum
     *
     * @param integer $annéeAlbum
     * @return Album
     */
    public function setAnnéeAlbum($annéeAlbum)
    {
        $this->annéeAlbum = $annéeAlbum;

        return $this;
    }

    /**
     * Get annéeAlbum
     *
     * @return integer
     */
    public function getAnnéeAlbum()
    {
        return $this->annéeAlbum;
    }

    /**
     * Set pochette
     *
     * @param string $pochette
     * @return Album
     */
    public function setPochette($pochette)
    {
        $this->pochette = $pochette;

        return $this;
    }

    /**
     * Get pochette
     *
     * @return string
     */
    public function getPochette()
    {
        return $this->pochette;
    }

    /**
     * Set pochette
     *
     * @param string $pochette
     * @return Album
     */

    public function setImage($pochette)
    {
        $this->pochette = $pochette;

        return $this;
    }

    /**
     * Get pochette
     *
     * @return string
     */
    public function getImage()
    {
        return $this->pochette;
    }

    /**
     * Set asin
     *
     * @param string $asin
     * @return Album
     */
    public function setAsin($asin)
    {
        $this->asin = $asin;

        return $this;
    }

    /**
     * Get asin
     *
     * @return string 
     */
    public function getAsin()
    {
        return $this->asin;
    }

    /**
     * Set codeGenre
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Genre $codeGenre
     * @return Album
     */
    public function setCodeGenre(\RieunierZeferino\CatalogueBundle\Entity\Genre $codeGenre = null)
    {
        $this->codeGenre = $codeGenre;

        return $this;
    }

    /**
     * Get codeGenre
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Genre 
     */
    public function getCodeGenre()
    {
        return $this->codeGenre;
    }

    /**
     * Set codeEditeur
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Editeur $codeEditeur
     * @return Album
     */
    public function setCodeEditeur(\RieunierZeferino\CatalogueBundle\Entity\Editeur $codeEditeur = null)
    {
        $this->codeEditeur = $codeEditeur;

        return $this;
    }

    /**
     * Get codeEditeur
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Editeur 
     */
    public function getCodeEditeur()
    {
        return $this->codeEditeur;
    }
}
