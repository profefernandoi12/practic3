<?php

namespace App\Entity;

use App\Repository\ExamenAlumnoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamenAlumnoRepository::class)]
class ExamenAlumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nota = null;

    #[ORM\ManyToOne(inversedBy: 'examenAlumnos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ExamenFinal $examen_final = null;

    #[ORM\ManyToOne(inversedBy: 'examenAlumnos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cursada $cursada = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $tomo = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $folio = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNota(): ?int
    {
        return $this->nota;
    }

    public function setNota(int $nota): static
    {
        $this->nota = $nota;

        return $this;
    }

    public function getExamenFinal(): ?ExamenFinal
    {
        return $this->examen_final;
    }

    public function setExamenFinal(?ExamenFinal $examen_final): static
    {
        $this->examen_final = $examen_final;

        return $this;
    }

    public function getCursada(): ?Cursada
    {
        return $this->cursada;
    }

    public function setCursada(?Cursada $cursada): static
    {
        $this->cursada = $cursada;

        return $this;
    }

    public function getTomo(): ?string
    {
        return $this->tomo;
    }

    public function setTomo(?string $tomo): static
    {
        $this->tomo = $tomo;

        return $this;
    }

    public function getFolio(): ?string
    {
        return $this->folio;
    }

    public function setFolio(?string $folio): static
    {
        $this->folio = $folio;

        return $this;
    }
}
