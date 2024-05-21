<?php

namespace App\Entity;

use App\Repository\ExamenFinalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExamenFinalRepository::class)]
class ExamenFinal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(inversedBy: 'examenFinals',cascade: ['persist', 'remove'], targetEntity: Asignatura::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Asignatura $asignatura = null;

    #[ORM\ManyToOne(inversedBy: 'examenFinals')]
    private ?Docente $presidente = null;

    #[ORM\ManyToOne]
    private ?Docente $vocal1 = null;

    #[ORM\ManyToOne]
    private ?Docente $vocal2 = null;

    #[ORM\OneToMany(mappedBy: 'examen_final', targetEntity: ExamenAlumno::class, orphanRemoval: true)]
    private Collection $examenAlumnos;

    public function __construct()
    {
        $this->examenAlumnos = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
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

    public function getPresidente(): ?Docente
    {
        return $this->presidente;
    }

    public function setPresidente(?Docente $presidente): static
    {
        $this->presidente = $presidente;

        return $this;
    }

    public function getVocal1(): ?Docente
    {
        return $this->vocal1;
    }

    public function setVocal1(?Docente $vocal1): static
    {
        $this->vocal1 = $vocal1;

        return $this;
    }

    public function getVocal2(): ?Docente
    {
        return $this->vocal2;
    }

    public function setVocal2(?Docente $vocal2): static
    {
        $this->vocal2 = $vocal2;

        return $this;
    }



    public function __toString(): string
    {
        return 'Fecha: '.date_format($this->getFecha(),"Y/m/d").' Asignatura: '.$this->getAsignatura()->getNombre(); //capas que hay que cambiar esto
    }

    /**
     * @return Collection<int, ExamenAlumno>
     */
    public function getExamenAlumnos(): Collection
    {
        return $this->examenAlumnos;
    }

    public function addExamenAlumno(ExamenAlumno $examenAlumno): static
    {
        if (!$this->examenAlumnos->contains($examenAlumno)) {
            $this->examenAlumnos->add($examenAlumno);
            $examenAlumno->setExamenFinal($this);
        }

        return $this;
    }

    public function removeExamenAlumno(ExamenAlumno $examenAlumno): static
    {
        if ($this->examenAlumnos->removeElement($examenAlumno)) {
            // set the owning side to null (unless already changed)
            if ($examenAlumno->getExamenFinal() === $this) {
                $examenAlumno->setExamenFinal(null);
            }
        }

        return $this;
    }
}
