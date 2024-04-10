<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="idarticle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idarticle;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=40, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=40, nullable=false)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbcommentaire", type="integer", nullable=true)
     */
    private $nbcommentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrlike", type="integer", nullable=true)
     */
    private $nbrlike;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrdislike", type="integer", nullable=true)
     */
    private $nbrdislike;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imageFileName", type="string", length=255, nullable=true)
     */
    private $imagefilename;

    /**
     * @var string
     *
     * @ORM\Column(name="choice", type="string", length=0, nullable=false)
     */
    private $choice;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=false)
     */
    private $accepted = '0';

    public function getIdarticle(): ?int
    {
        return $this->idarticle;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getNbcommentaire(): ?int
    {
        return $this->nbcommentaire;
    }

    public function setNbcommentaire(?int $nbcommentaire): static
    {
        $this->nbcommentaire = $nbcommentaire;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getNbrlike(): ?int
    {
        return $this->nbrlike;
    }

    public function setNbrlike(?int $nbrlike): static
    {
        $this->nbrlike = $nbrlike;

        return $this;
    }

    public function getNbrdislike(): ?int
    {
        return $this->nbrdislike;
    }

    public function setNbrdislike(?int $nbrdislike): static
    {
        $this->nbrdislike = $nbrdislike;

        return $this;
    }

    public function getImagefilename(): ?string
    {
        return $this->imagefilename;
    }

    public function setImagefilename(?string $imagefilename): static
    {
        $this->imagefilename = $imagefilename;

        return $this;
    }

    public function getChoice(): ?string
    {
        return $this->choice;
    }

    public function setChoice(string $choice): static
    {
        $this->choice = $choice;

        return $this;
    }

    public function isAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(bool $accepted): static
    {
        $this->accepted = $accepted;

        return $this;
    }


}
