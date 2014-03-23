<?php

namespace Usuario\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultima_conexion", type="datetime")
     */
    private $ultimaConexion;

    /**
     * @var integer
     *
     * @ORM\Column(name="activo", type="integer")
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @ORM\ManyToMany(targetEntity="Idioma")
     * @ORM\JoinTable(name="usuarios_idiomas",
     *      joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idioma_id", referencedColumnName="id")}
     *      )
     */
    private $idiomas;

    /**
     * @ORM\ManyToMany(targetEntity="Idioma")
     * @ORM\JoinTable(name="usuarios_idiomas_interes",
     *      joinColumns={@ORM\JoinColumn(name="usuario_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="idioma_id", referencedColumnName="id")}
     *      )
     */
    private $idiomasInteres;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idiomas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idiomasInteres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ultimaConexion
     *
     * @param \DateTime $ultimaConexion
     * @return Usuario
     */
    public function setUltimaConexion($ultimaConexion)
    {
        $this->ultimaConexion = $ultimaConexion;
    
        return $this;
    }

    /**
     * Get ultimaConexion
     *
     * @return \DateTime 
     */
    public function getUltimaConexion()
    {
        return $this->ultimaConexion;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return Usuario
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Add idiomas
     *
     * @param \Usuario\UsuarioBundle\Entity\Idioma $idiomas
     * @return Usuario
     */
    public function addIdioma(\Usuario\UsuarioBundle\Entity\Idioma $idiomas)
    {
        $this->idiomas[] = $idiomas;
    
        return $this;
    }

    /**
     * Remove idiomas
     *
     * @param \Usuario\UsuarioBundle\Entity\Idioma $idiomas
     */
    public function removeIdioma(\Usuario\UsuarioBundle\Entity\Idioma $idiomas)
    {
        $this->idiomas->removeElement($idiomas);
    }

    /**
     * Get idiomas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdiomas()
    {
        return $this->idiomas;
    }

    /**
     * Add idiomasInteres
     *
     * @param \Usuario\UsuarioBundle\Entity\Idioma $idiomasInteres
     * @return Usuario
     */
    public function addIdiomasIntere(\Usuario\UsuarioBundle\Entity\Idioma $idiomasInteres)
    {
        $this->idiomasInteres[] = $idiomasInteres;
    
        return $this;
    }

    /**
     * Remove idiomasInteres
     *
     * @param \Usuario\UsuarioBundle\Entity\Idioma $idiomasInteres
     */
    public function removeIdiomasIntere(\Usuario\UsuarioBundle\Entity\Idioma $idiomasInteres)
    {
        $this->idiomasInteres->removeElement($idiomasInteres);
    }

    /**
     * Get idiomasInteres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdiomasInteres()
    {
        return $this->idiomasInteres;
    }
}