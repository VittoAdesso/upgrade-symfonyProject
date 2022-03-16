<?php

namespace App\Entity;

use App\Repository\SolicitudRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolicitudRepository::class)]
class Solicitud
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $fechaInicio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaInicio(): ?string
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(string $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }
}
