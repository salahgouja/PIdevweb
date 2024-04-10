<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Horairetravaille
 *
 * @ORM\Table(name="horairetravaille")
 * @ORM\Entity
 */
class Horairetravaille
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_horaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHoraire;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=0, nullable=false)
     */
    private $jour;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_debut", type="time", nullable=true)
     */
    private $heureDebut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="heure_fin", type="time", nullable=true)
     */
    private $heureFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="repos", type="boolean", nullable=false)
     */
    private $repos;

    public function getIdHoraire(): ?int
    {
        return $this->idHoraire;
    }

    public function getJour(): ?string
    {
        return $this->jour;
    }

    public function setJour(string $jour): static
    {
        $this->jour = $jour;

        return $this;
    }

    public function getHeureDebut(): ?\DateTimeInterface
    {
        return $this->heureDebut;
    }

    public function setHeureDebut(?\DateTimeInterface $heureDebut): static
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    public function getHeureFin(): ?\DateTimeInterface
    {
        return $this->heureFin;
    }

    public function setHeureFin(?\DateTimeInterface $heureFin): static
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function isRepos(): ?bool
    {
        return $this->repos;
    }

    public function setRepos(bool $repos): static
    {
        $this->repos = $repos;

        return $this;
    }


}
