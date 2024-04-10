<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipementlocation
 *
 * @ORM\Table(name="equipementlocation", indexes={@ORM\Index(name="id_reservation", columns={"id_reservation"}), @ORM\Index(name="id_equipement", columns={"id_equipement"})})
 * @ORM\Entity
 */
class Equipementlocation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_location", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     */
    private $idReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_equipement", type="integer", nullable=false)
     */
    private $idEquipement;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_location", type="integer", nullable=false)
     */
    private $quantiteLocation;

    public function getIdLocation(): ?int
    {
        return $this->idLocation;
    }

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function setIdReservation(int $idReservation): static
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    public function getIdEquipement(): ?int
    {
        return $this->idEquipement;
    }

    public function setIdEquipement(int $idEquipement): static
    {
        $this->idEquipement = $idEquipement;

        return $this;
    }

    public function getQuantiteLocation(): ?int
    {
        return $this->quantiteLocation;
    }

    public function setQuantiteLocation(int $quantiteLocation): static
    {
        $this->quantiteLocation = $quantiteLocation;

        return $this;
    }


}
