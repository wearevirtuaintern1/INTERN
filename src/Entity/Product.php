<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
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
    private $description;

    /**
     * @ORM\Column(type="datetime", length=255)
     * @Gedmo\Timestampable(on="create")
     */
    private $date_of_creation;

    /**
     * @ORM\Column(type="datetime", length=255)
     * @Gedmo\Timestampable(on="update")
     */
    private $date_of_last_modification;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ProductCategory", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDateOfCreation()
    {

        return $this->date_of_creation;
    }

    public function setDateOfCreation(\DateTimeInterface $date_of_creation): self
    {
        $this->date_of_creation = $date_of_creation;

        return $this;
    }

    public function getDateOfLastModification()
    {
        return $this->date_of_last_modification;
    }

    public function setDateOfLastModification(\DateTimeInterface $date_of_last_modification): self
    {
        $this->date_of_last_modification = $date_of_last_modification;

        return $this;
    }

    public function getCategory(): ?ProductCategory
    {
        return $this->category;
    }

    public function setCategory(?ProductCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

}
