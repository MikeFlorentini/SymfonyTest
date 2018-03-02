<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DocumentRepository")
 */
class Document
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $path;
    
    function getName() {
        return $this->name;
    }

    function getPath() {
        return $this->path;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function getId() {
        return $this->id;
    }
}
