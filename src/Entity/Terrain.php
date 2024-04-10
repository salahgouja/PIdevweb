<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 *
 * @ORM\Table(name="terrain")
 * @ORM\Entity
 */
class Terrain
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var int|null
     *
     * @ORM\Column(name="capaciteTerrain", type="integer", nullable=true)
     */
    private $capaciteterrain;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_location_terrain", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixLocationTerrain;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function getCapaciteterrain(): ?int
    {
        return $this->capaciteterrain;
    }

    public function setCapaciteterrain(?int $capaciteterrain): static
    {
        $this->capaciteterrain = $capaciteterrain;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getPrixLocationTerrain(): ?float
    {
        return $this->prixLocationTerrain;
    }

    public function setPrixLocationTerrain(float $prixLocationTerrain): static
    {
        $this->prixLocationTerrain = $prixLocationTerrain;

        return $this;
    }


}
