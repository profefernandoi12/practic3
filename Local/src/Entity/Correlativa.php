<?php

namespace App\Entity;

use App\Repository\CorrelativaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CorrelativaRepository::class)]
class Correlativa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'correlativa')]
    private ?Asignatura $asignatura = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;





    public function __construct()
    {
        $this->asignaturas = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAsignatura(): ?Asignatura
    {
        return $this->asignatura;
    }

    public function setAsignatura(?Asignatura $asignatura): static
    {
        $this->asignatura = $asignatura;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }


}
