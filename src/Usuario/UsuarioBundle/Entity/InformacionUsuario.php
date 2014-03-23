<?php

namespace Usuario\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformacionUsuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class InformacionUsuario
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
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="hobbys", type="text")
     */
    private $hobbys;

    /**
     * @var string
     *
     * @ORM\Column(name="foto_perfil", type="string", length=255)
     */
    private $fotoPerfil;

    /**
     * @ORM\OneToOne(targetEntity="Usuario")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     */
    private $usuario;

    /**
     * @ORM\OneToOne(targetEntity="\Pais\PaisBundle\Entity\Ciudad")
     * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id")
     */
    private $ciudad;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return InformacionUsuario
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set hobbys
     *
     * @param string $hobbys
     * @return InformacionUsuario
     */
    public function setHobbys($hobbys)
    {
        $this->hobbys = $hobbys;
    
        return $this;
    }

    /**
     * Get hobbys
     *
     * @return string 
     */
    public function getHobbys()
    {
        return $this->hobbys;
    }

    /**
     * Set fotoPerfil
     *
     * @param string $fotoPerfil
     * @return InformacionUsuario
     */
    public function setFotoPerfil($fotoPerfil)
    {
        $this->fotoPerfil = $fotoPerfil;
    
        return $this;
    }

    /**
     * Get fotoPerfil
     *
     * @return string 
     */
    public function getFotoPerfil()
    {
        return $this->fotoPerfil;
    }

    /**
     * Set usuario
     *
     * @param \Usuario\UsuarioBundle\Entity\Usuario $usuario
     * @return InformacionUsuario
     */
    public function setUsuario(\Usuario\UsuarioBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Usuario\UsuarioBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set ciudad
     *
     * @param \Pais\PaisBundle\Entity\Ciudad $ciudad
     * @return InformacionUsuario
     */
    public function setCiudad(\Pais\PaisBundle\Entity\Ciudad $ciudad = null)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return \Pais\PaisBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}