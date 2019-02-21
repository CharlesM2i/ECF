<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $userName;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password_2;
    
    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword2(): ?string
    {
        return $this->password_2;
    }

    public function setPassword2(string $password_2): self
    {
        $this->password_2 = $password_2;

        return $this;
    }
    
    
    
    public function getRoles() 
    {
        return [
            'ROLE_USER'
        ];
    }
    
    public function getSalt() 
    {
    }
    
    public function eraseCredentials() 
    {
    }
    
    
    public function serialize($param) 
    {
        return serialize([
            $this->id,
            $this->userName,
            $this->email,
            $this->password,
            $this->password2,
        ]);
        
      public function unserialize($string) 
    {
        list(
            $this->id,
            $this->userName,
            $this->email,
            $this->password,
            $this->password2,
        ) = unserialize($string, ['allowed_classes' => false]);
    }
    
    
    
    
    
}
