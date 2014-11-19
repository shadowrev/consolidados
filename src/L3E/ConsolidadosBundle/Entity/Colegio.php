<?php

namespace L3E\ConsolidadosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colegio
 */
class Colegio
{
    /**
     * @var integer
     */
    private $coleidn;

    /**
     * @var string
     */
    private $lugaidn;

    /**
     * @var string
     */
    private $colecoddanen;

    /**
     * @var string
     */
    private $coledescripv;

    /**
     * @var string
     */
    private $colelogov;

    /**
     * @var string
     */
    private $coleemailv;

    /**
     * @var string
     */
    private $coledireccionv;

    /**
     * @var string
     */
    private $coletelefonofv;

    /**
     * @var string
     */
    private $colefaxv;

    /**
     * @var string
     */
    private $colesectorv;

    /**
     * @var string
     */
    private $colezonav;

    /**
     * @var integer
     */
    private $comuidn;


    /**
     * Get coleidn
     *
     * @return integer 
     */
    public function getColeidn()
    {
        return $this->coleidn;
    }

    /**
     * Set lugaidn
     *
     * @param string $lugaidn
     * @return Colegio
     */
    public function setLugaidn($lugaidn)
    {
        $this->lugaidn = $lugaidn;

        return $this;
    }

    /**
     * Get lugaidn
     *
     * @return string 
     */
    public function getLugaidn()
    {
        return $this->lugaidn;
    }

    /**
     * Set colecoddanen
     *
     * @param string $colecoddanen
     * @return Colegio
     */
    public function setColecoddanen($colecoddanen)
    {
        $this->colecoddanen = $colecoddanen;

        return $this;
    }

    /**
     * Get colecoddanen
     *
     * @return string 
     */
    public function getColecoddanen()
    {
        return $this->colecoddanen;
    }

    /**
     * Set coledescripv
     *
     * @param string $coledescripv
     * @return Colegio
     */
    public function setColedescripv($coledescripv)
    {
        $this->coledescripv = $coledescripv;

        return $this;
    }

    /**
     * Get coledescripv
     *
     * @return string 
     */
    public function getColedescripv()
    {
        return $this->coledescripv;
    }

    /**
     * Set colelogov
     *
     * @param string $colelogov
     * @return Colegio
     */
    public function setColelogov($colelogov)
    {
        $this->colelogov = $colelogov;

        return $this;
    }

    /**
     * Get colelogov
     *
     * @return string 
     */
    public function getColelogov()
    {
        return $this->colelogov;
    }

    /**
     * Set coleemailv
     *
     * @param string $coleemailv
     * @return Colegio
     */
    public function setColeemailv($coleemailv)
    {
        $this->coleemailv = $coleemailv;

        return $this;
    }

    /**
     * Get coleemailv
     *
     * @return string 
     */
    public function getColeemailv()
    {
        return $this->coleemailv;
    }

    /**
     * Set coledireccionv
     *
     * @param string $coledireccionv
     * @return Colegio
     */
    public function setColedireccionv($coledireccionv)
    {
        $this->coledireccionv = $coledireccionv;

        return $this;
    }

    /**
     * Get coledireccionv
     *
     * @return string 
     */
    public function getColedireccionv()
    {
        return $this->coledireccionv;
    }

    /**
     * Set coletelefonofv
     *
     * @param string $coletelefonofv
     * @return Colegio
     */
    public function setColetelefonofv($coletelefonofv)
    {
        $this->coletelefonofv = $coletelefonofv;

        return $this;
    }

    /**
     * Get coletelefonofv
     *
     * @return string 
     */
    public function getColetelefonofv()
    {
        return $this->coletelefonofv;
    }

    /**
     * Set colefaxv
     *
     * @param string $colefaxv
     * @return Colegio
     */
    public function setColefaxv($colefaxv)
    {
        $this->colefaxv = $colefaxv;

        return $this;
    }

    /**
     * Get colefaxv
     *
     * @return string 
     */
    public function getColefaxv()
    {
        return $this->colefaxv;
    }

    /**
     * Set colesectorv
     *
     * @param string $colesectorv
     * @return Colegio
     */
    public function setColesectorv($colesectorv)
    {
        $this->colesectorv = $colesectorv;

        return $this;
    }

    /**
     * Get colesectorv
     *
     * @return string 
     */
    public function getColesectorv()
    {
        return $this->colesectorv;
    }

    /**
     * Set colezonav
     *
     * @param string $colezonav
     * @return Colegio
     */
    public function setColezonav($colezonav)
    {
        $this->colezonav = $colezonav;

        return $this;
    }

    /**
     * Get colezonav
     *
     * @return string 
     */
    public function getColezonav()
    {
        return $this->colezonav;
    }

    /**
     * Set comuidn
     *
     * @param integer $comuidn
     * @return Colegio
     */
    public function setComuidn($comuidn)
    {
        $this->comuidn = $comuidn;

        return $this;
    }

    /**
     * Get comuidn
     *
     * @return integer 
     */
    public function getComuidn()
    {
        return $this->comuidn;
    }
}
