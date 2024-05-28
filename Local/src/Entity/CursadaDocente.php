<?php

namespace App\Entity;

use App\Repository\CursadaDocenteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CursadaDocenteRepository::class)]
class CursadaDocente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $toma = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $sece = null;

    #[ORM\ManyToOne(inversedBy: 'cursada_docente')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Docente $docente = null;

    #[ORM\ManyToOne(inversedBy: 'cursada_docente')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Revista $revista = null;

    #[ORM\ManyToOne(inversedBy: 'cursada_docente')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cursada $cursada = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToma(): ?\DateTimeInterface
    {
        return $this->toma;
    }

    public function setToma(\DateTimeInterface $toma): static
    {
        $this->toma = $toma;

        return $this;
    }

    public function getSece(): ?\DateTimeInterface
    {
        return $this->sece;
    }

    public function setSece(?\DateTimeInterface $sece): static
    {
        $this->sece = $sece;

        return $this;
    }

    public function getDocente(): ?Docente
    {
        return $this->docente;
    }

    public function setDocente(?Docente $docente): static
    {
        $this->docente = $docente;

        return $this;
    }

    public function getRevista(): ?Revista
    {
        return $this->revista;
    }

    public function setRevista(?Revista $revista): static
    {
        $this->revista = $revista;

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
}
