<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Infrastructure\Persistence\ProjectRepository")
 * @ORM\Table(name="projects")
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=6, unique=true)
     */
    private string $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private string $location;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $stage;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $categoryOther = null;

    /**
     * @ORM\Column(type="date")
     */
    private \DateTime $constructionStartDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $description = null;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private string $creatorId;

    // Getters and Setters

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getStage(): string
    {
        return $this->stage;
    }

    public function setStage(string $stage): self
    {
        $this->stage = $stage;
        return $this;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getCategoryOther(): ?string
    {
        return $this->categoryOther;
    }

    public function setCategoryOther(?string $categoryOther): self
    {
        $this->categoryOther = $categoryOther;
        return $this;
    }

    public function getConstructionStartDate(): \DateTime
    {
        return $this->constructionStartDate;
    }

    public function setConstructionStartDate(\DateTime $constructionStartDate): self
    {
        $this->constructionStartDate = $constructionStartDate;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getCreatorId(): string
    {
        return $this->creatorId;
    }

    public function setCreatorId(string $creatorId): self
    {
        $this->creatorId = $creatorId;
        return $this;
    }
}
