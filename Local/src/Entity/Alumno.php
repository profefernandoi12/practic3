<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlumnoRepository::class)]
class Alumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $titulo_sec = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $escuela_sec = null;

    #[ORM\Column(nullable: true)]
    private ?int $anio_egreso = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Persona $persona = null;

    #[ORM\OneToMany(mappedBy: 'alumno', targetEntity: Cursada::class)]
    private Collection $cursada;


    public function __construct()
    {
        $this->cursada = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTituloSec(): ?string
    {
        return $this->titulo_sec;
    }

    public function setTituloSec(?string $titulo_sec): static
    {
        $this->titulo_sec = $titulo_sec;

        return $this;
    }

    public function getEscuelaSec(): ?string
    {
        return $this->escuela_sec;
    }

    public function setEscuelaSec(?string $escuela_sec): static
    {
        $this->escuela_sec = $escuela_sec;

        return $this;
    }

    public function getAnioEgreso(): ?int
    {
        return $this->anio_egreso;
    }

    public function setAnioEgreso(?int $anio_egreso): static
    {
        $this->anio_egreso = $anio_egreso;

        return $this;
    }

    public function getPersona(): ?Persona
    {
        return $this->persona;
    }

    public function setPersona(Persona $persona): static
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * @return Collection<int, Cursada>
     */
    public function getCursada(): Collection
    {
        return $this->cursada;
    }

    public function addCursada(Cursada $cursada): static
    {
        if (!$this->cursada->contains($cursada)) {
            $this->cursada->add($cursada);
            $cursada->setAlumno($this);
        }

        return $this;
    }

    public function removeCursada(Cursada $cursada): static
    {
        if ($this->cursada->removeElement($cursada)) {
            // set the owning side to null (unless already changed)
            if ($cursada->getAlumno() === $this) {
                $cursada->setAlumno(null);
            }
        }

        return $this;
    }


    public function __toString(): string
    {
        return $this->getPersona()->getNombre();
    }
}
