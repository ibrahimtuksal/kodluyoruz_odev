<?php

namespace App\Entity;

use App\Repository\SettingsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SettingsRepository::class)
 */
class Settings
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $banner;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $urldesc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fea_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fea_desc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBanner(): ?string
    {
        return $this->banner;
    }

    public function setBanner(string $banner): self
    {
        $this->banner = $banner;

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

    public function getUrldesc(): ?string
    {
        return $this->urldesc;
    }

    public function setUrldesc(string $urldesc): self
    {
        $this->urldesc = $urldesc;

        return $this;
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

    public function getFeaTitle(): ?string
    {
        return $this->fea_title;
    }

    public function setFeaTitle(string $fea_title): self
    {
        $this->fea_title = $fea_title;

        return $this;
    }

    public function getFeaDesc(): ?string
    {
        return $this->fea_desc;
    }

    public function setFeaDesc(string $fea_desc): self
    {
        $this->fea_desc = $fea_desc;

        return $this;
    }
}
