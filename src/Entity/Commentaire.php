<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcom", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcom;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=40, nullable=false)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=40, nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="idarticle", type="integer", nullable=false)
     */
    private $idarticle;

    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nblike", type="integer", nullable=true)
     */
    private $nblike;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbdislike", type="integer", nullable=true)
     */
    private $nbdislike;

    public function getIdcom(): ?int
    {
        return $this->idcom;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

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

    public function getIdarticle(): ?int
    {
        return $this->idarticle;
    }

    public function setIdarticle(int $idarticle): static
    {
        $this->idarticle = $idarticle;

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

    public function getNblike(): ?int
    {
        return $this->nblike;
    }

    public function setNblike(?int $nblike): static
    {
        $this->nblike = $nblike;

        return $this;
    }

    public function getNbdislike(): ?int
    {
        return $this->nbdislike;
    }

    public function setNbdislike(?int $nbdislike): static
    {
        $this->nbdislike = $nbdislike;

        return $this;
    }


}
