<?php

namespace L3E\ConsolidadosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 */
class Curso
{
    /**
     * @var integer
     */
    private $cursidn;

    /**
     * @var string
     */
    private $cursdescripv;

    /**
     * @var string
     */
    private $cursnombrev;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $cursos;

    /**
     * @var \L3E\ConsolidadosBundle\Entity\Curso
     */
    private $curCursidn;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cursos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get cursidn
     *
     * @return integer 
     */
    public function getCursidn()
    {
        return $this->cursidn;
    }

    /**
     * Set cursdescripv
     *
     * @param string $cursdescripv
     * @return Curso
     */
    public function setCursdescripv($cursdescripv)
    {
        $this->cursdescripv = $cursdescripv;

        return $this;
    }

    /**
     * Get cursdescripv
     *
     * @return string 
     */
    public function getCursdescripv()
    {
        return $this->cursdescripv;
    }

    /**
     * Set cursnombrev
     *
     * @param string $cursnombrev
     * @return Curso
     */
    public function setCursnombrev($cursnombrev)
    {
        $this->cursnombrev = $cursnombrev;

        return $this;
    }

    /**
     * Get cursnombrev
     *
     * @return string 
     */
    public function getCursnombrev()
    {
        return $this->cursnombrev;
    }

    /**
     * Add cursos
     *
     * @param \L3E\ConsolidadosBundle\Entity\Curso $cursos
     * @return Curso
     */
    public function addCurso(\L3E\ConsolidadosBundle\Entity\Curso $cursos)
    {
        $this->cursos[] = $cursos;

        return $this;
    }

    /**
     * Remove cursos
     *
     * @param \L3E\ConsolidadosBundle\Entity\Curso $cursos
     */
    public function removeCurso(\L3E\ConsolidadosBundle\Entity\Curso $cursos)
    {
        $this->cursos->removeElement($cursos);
    }

    /**
     * Get cursos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursos()
    {
        return $this->cursos;
    }

    /**
     * Set curCursidn
     *
     * @param \L3E\ConsolidadosBundle\Entity\Curso $curCursidn
     * @return Curso
     */
    public function setCurCursidn(\L3E\ConsolidadosBundle\Entity\Curso $curCursidn = null)
    {
        $this->curCursidn = $curCursidn;

        return $this;
    }

    /**
     * Get curCursidn
     *
     * @return \L3E\ConsolidadosBundle\Entity\Curso 
     */
    public function getCurCursidn()
    {
        return $this->curCursidn;
    }
}
