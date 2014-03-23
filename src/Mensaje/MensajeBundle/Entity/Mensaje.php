<?php

namespace Mensaje\MensajeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensaje
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mensaje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="text")
     */
    private $mensaje;

    /**
     * @var integer
     *
     * @ORM\Column(name="emisor", type="integer")
     */
    private $emisor;

    /**
     * @var integer
     *
     * @ORM\Column(name="receptor", type="integer")
     */
    private $receptor;

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
     * Set mensaje
     *
     * @param string $mensaje
     * @return Mensaje
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;
    
        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set emisor
     *
     * @param integer $emisor
     * @return Mensaje
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;
    
        return $this;
    }

    /**
     * Get emisor
     *
     * @return integer 
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set receptor
     *
     * @param integer $receptor
     * @return Mensaje
     */
    public function setReceptor($receptor)
    {
        $this->receptor = $receptor;
    
        return $this;
    }

    /**
     * Get receptor
     *
     * @return integer 
     */
    public function getReceptor()
    {
        return $this->receptor;
    }
}