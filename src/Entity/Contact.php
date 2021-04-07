<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $namesurname;

    /**
     * @ORM\Column(type="text")
     */
    private $message;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_reading;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_answered;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNamesurname(): ?string
    {
        return $this->namesurname;
    }

    public function setNamesurname(string $namesurname): self
    {
        $this->namesurname = $namesurname;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getIsReading(): ?bool
    {
        return $this->is_reading;
    }

    public function setIsReading(bool $is_reading): self
    {
        $this->is_reading = $is_reading;

        return $this;
    }

    public function getIsAnswered(): ?bool
    {
        return $this->is_answered;
    }

    public function setIsAnswered(bool $is_answered): self
    {
        $this->is_answered = $is_answered;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
