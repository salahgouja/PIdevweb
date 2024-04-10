<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity
 */
class Equipement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEquipement;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_location", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_equipement", type="string", length=255, nullable=false)
     */
    private $nomEquipement;

    /**
     * @var string
     *
     * @ORM\Column(name="imageSrc", type="string", length=255, nullable=false)
     */
    private $imagesrc;

    public function getIdEquipement(): ?int
    {
        return $this->idEquipement;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixLocation(): ?float
    {
        return $this->prixLocation;
    }

    public function setPrixLocation(float $prixLocation): static
    {
        $this->prixLocation = $prixLocation;

        return $this;
    }

    public function getNomEquipement(): ?string
    {
        return $this->nomEquipement;
    }

    public function setNomEquipement(string $nomEquipement): static
    {
        $this->nomEquipement = $nomEquipement;

        return $this;
    }

    public function getImagesrc(): ?string
    {
        return $this->imagesrc;
    }

    public function setImagesrc(string $imagesrc): static
    {
        $this->imagesrc = $imagesrc;

        return $this;
    }


}
