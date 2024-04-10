<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_reservation_user", columns={"id_user"}), @ORM\Index(name="fk_reservation_terrain", columns={"id_terrain"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reserve", type="date", nullable=false)
     */
    private $dateReserve;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="temps_reservation", type="time", nullable=true)
     */
    private $tempsReservation;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_reservation", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_terrain", type="integer", nullable=false)
     */
    private $idTerrain;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree_reservation", type="time", nullable=false, options={"default"="01:00:00"})
     */
    private $dureeReservation = '01:00:00';

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getDateReserve(): ?\DateTimeInterface
    {
        return $this->dateReserve;
    }

    public function setDateReserve(\DateTimeInterface $dateReserve): static
    {
        $this->dateReserve = $dateReserve;

        return $this;
    }

    public function getTempsReservation(): ?\DateTimeInterface
    {
        return $this->tempsReservation;
    }

    public function setTempsReservation(?\DateTimeInterface $tempsReservation): static
    {
        $this->tempsReservation = $tempsReservation;

        return $this;
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

    public function getPrixReservation(): ?float
    {
        return $this->prixReservation;
    }

    public function setPrixReservation(float $prixReservation): static
    {
        $this->prixReservation = $prixReservation;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdTerrain(): ?int
    {
        return $this->idTerrain;
    }

    public function setIdTerrain(int $idTerrain): static
    {
        $this->idTerrain = $idTerrain;

        return $this;
    }

    public function getDureeReservation(): ?\DateTimeInterface
    {
        return $this->dureeReservation;
    }

    public function setDureeReservation(\DateTimeInterface $dureeReservation): static
    {
        $this->dureeReservation = $dureeReservation;

        return $this;
    }


}
