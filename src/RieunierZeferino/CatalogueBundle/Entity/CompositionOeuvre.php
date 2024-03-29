<?php

namespace RieunierZeferino\CatalogueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompositionOeuvre
 *
 * @ORM\Table(name="Composition_Oeuvre", indexes={@ORM\Index(name="IDX_AF138FE8CB48FCBD", columns={"Code_Oeuvre"}), @ORM\Index(name="IDX_AF138FE8D49D5E5D", columns={"Code_Composition"})})
 * @ORM\Entity(repositoryClass="RieunierZeferino\CatalogueBundle\Entity\CompositionOeuvreRepository")
 */
class CompositionOeuvre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Code_Composer_Oeuvre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComposerOeuvre;

    /**
     * @var \Oeuvre
     *
     * @ORM\ManyToOne(targetEntity="Oeuvre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Oeuvre", referencedColumnName="Code_Oeuvre")
     * })
     */
    private $codeOeuvre;

    /**
     * @var \Composition
     *
     * @ORM\ManyToOne(targetEntity="Composition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Code_Composition", referencedColumnName="Code_Composition")
     * })
     */
    private $codeComposition;



    /**
     * Get codeComposerOeuvre
     *
     * @return integer 
     */
    public function getCodeComposerOeuvre()
    {
        return $this->codeComposerOeuvre;
    }

    /**
     * Set codeOeuvre
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Oeuvre $codeOeuvre
     * @return CompositionOeuvre
     */
    public function setCodeOeuvre(\RieunierZeferino\CatalogueBundle\Entity\Oeuvre $codeOeuvre = null)
    {
        $this->codeOeuvre = $codeOeuvre;

        return $this;
    }

    /**
     * Get codeOeuvre
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Oeuvre 
     */
    public function getCodeOeuvre()
    {
        return $this->codeOeuvre;
    }

    /**
     * Set codeComposition
     *
     * @param \RieunierZeferino\CatalogueBundle\Entity\Composition $codeComposition
     * @return CompositionOeuvre
     */
    public function setCodeComposition(\RieunierZeferino\CatalogueBundle\Entity\Composition $codeComposition = null)
    {
        $this->codeComposition = $codeComposition;

        return $this;
    }

    /**
     * Get codeComposition
     *
     * @return \RieunierZeferino\CatalogueBundle\Entity\Composition 
     */
    public function getCodeComposition()
    {
        return $this->codeComposition;
    }
}
