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
     * @ORM\OneToOne(targetEntity="\Usuario\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $emisor;

    /**
     * @ORM\OneToOne(targetEntity="\Usuario\UsuarioBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
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
     * @param \Usuario\UsuarioBundle\Entity\Usuario $emisor
     * @return Mensaje
     */
    public function setEmisor(\Usuario\UsuarioBundle\Entity\Usuario $emisor = null)
    {
        $this->emisor = $emisor;
    
        return $this;
    }

    /**
     * Get emisor
     *
     * @return \Usuario\UsuarioBundle\Entity\Usuario 
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set receptor
     *
     * @param \Usuario\UsuarioBundle\Entity\Usuario $receptor
     * @return Mensaje
     */
    public function setReceptor(\Usuario\UsuarioBundle\Entity\Usuario $receptor = null)
    {
        $this->receptor = $receptor;
    
        return $this;
    }

    /**
     * Get receptor
     *
     * @return \Usuario\UsuarioBundle\Entity\Usuario 
     */
    public function getReceptor()
    {
        return $this->receptor;
    }
}