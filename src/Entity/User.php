<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "user")]
#[ORM\Entity]
class User
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $id;

    #[ORM\Column(name: "firstname", type: "string", length: 15, nullable: true)]
    private $firstname;

    #[ORM\Column(name: "lastname", type: "string", length: 20, nullable: true)]
    private $lastname;

    #[ORM\Column(name: "phone", type: "string", length: 20, nullable: true)]
    private $phone;

    #[ORM\Column(name: "email", type: "string", length: 50, nullable: true)]
    private $email;

    #[ORM\Column(name: "password", type: "string", length: 100, nullable: true)]
    private $password;

    #[ORM\Column(name: "role", type: "string", length: 0, nullable: true, options: ["default" => "USER"])]
    private $role = 'USER';

    #[ORM\Column(name: "verification_code", type: "string", length: 255, nullable: true)]
    private $verificationCode;

    #[ORM\Column(name: "expiration_date", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
    private \DateTimeInterface $expirationDate;

    #[ORM\Column(name: "image", type: "text", length: 0, nullable: true)]
    private $image;

    #[ORM\Column(name: "qrcode", type: "text", length: 16777215, nullable: true)]
    private $qrcode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getVerificationCode(): ?string
    {
        return $this->verificationCode;
    }

    public function setVerificationCode(?string $verificationCode): static
    {
        $this->verificationCode = $verificationCode;

        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(\DateTimeInterface $expirationDate): static
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getQrcode(): ?string
    {
        return $this->qrcode;
    }

    public function setQrcode(?string $qrcode): static
    {
        $this->qrcode = $qrcode;

        return $this;
    }
}
