<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *  message="Nom vide",
     *  groups={"message"}
     * )
     * @Assert\Regex(
     *  pattern =  "/^[a-zA-ZÀ-ÿ '-]{1,30}$/",
     *  message="Nom incorrect",
     *  groups={"message"}
     * )
     */
    private string $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *  message="Email vide",
     *  groups={"message"}
     * )
     * @Assert\Email(
     *  message="Format email incorrect",
     *  groups={"message"}
     * )
     */
    private string $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(
     *  message="Nom vide",
     *  groups={"message"}
     * )
     * @Assert\Regex(
     *  pattern =  "/^[a-zA-Z0-9À-ÿ .,?!'&()-]{2,255}$/",
     *  message="Nom incorrect",
     *  groups={"message"}
     * )
     */
    private string $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
