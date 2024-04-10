<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity
 */
class Reponse
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
     * @var string
     *
     * @ORM\Column(name="motif", type="text", length=65535, nullable=false)
     */
    private $motif;

    /**
     * @var int
     *
     * @ORM\Column(name="id_par", type="integer", nullable=false)
     */
    private $idPar;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotif(): ?string
    {
        return $this->motif;
    }

    public function setMotif(string $motif): static
    {
        $this->motif = $motif;

        return $this;
    }

    public function getIdPar(): ?int
    {
        return $this->idPar;
    }

    public function setIdPar(int $idPar): static
    {
        $this->idPar = $idPar;

        return $this;
    }


}
