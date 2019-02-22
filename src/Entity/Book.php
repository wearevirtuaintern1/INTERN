<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $genre;

    /**
     * @ORM\Column(type="integer")
     */
    private $dateOfPublishment;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $countryOfPublishment;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $availability;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getDateOfPublishment(): ?int
    {
        return $this->dateOfPublishment;
    }

    public function setDateOfPublishment(int $dateOfPublishment): self
    {
        $this->dateOfPublishment = $dateOfPublishment;

        return $this;
    }

    public function getCountryOfPublishment(): ?string
    {
        return $this->countryOfPublishment;
    }

    public function setCountryOfPublishment(string $countryOfPublishment): self
    {
        $this->countryOfPublishment = $countryOfPublishment;

        return $this;
    }

    public function getAvailability(): ?bool
    {
        return $this->availability;
    }

    public function setAvailability(bool $availability): self
    {
        $this->availability = $availability;

        return $this;
    }

    public function getAuthors(): ?Author
    {
        return $this->authors;
    }

    public function setAuthors(?Author $authors): self
    {
        $this->authors = $authors;

        return $this;
    }

}