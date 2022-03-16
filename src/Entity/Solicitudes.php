<?php

namespace App\Entity;

use App\Repository\SolicitudesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolicitudesRepository::class)]
class Solicitudes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $fechaInicio;

    #[ORM\Column(type: 'date')]
    private $fechaFin;

    #[ORM\Column(type: 'integer')]
    private $numMaletas;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'solicitudees')]
    #[ORM\JoinColumn(nullable: false)]
    private $Usuarios;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getNumMaletas(): ?int
    {
        return $this->numMaletas;
    }

    public function setNumMaletas(int $numMaletas): self
    {
        $this->numMaletas = $numMaletas;

        return $this;
    }

    public function getUsuarios(): ?User
    {
        return $this->Usuarios;
    }

    public function setUsuarios(?User $Usuarios): self
    {
        $this->Usuarios = $Usuarios;

        return $this;
    }
}
