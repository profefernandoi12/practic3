<?php

namespace App\Entity;

use App\Repository\CursadaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CursadaRepository::class)]
class Cursada
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $ciclo_lectivo = null;

    #[ORM\ManyToOne(inversedBy: 'cursada')]
    private ?Alumno $alumno = null;

    #[ORM\OneToMany(mappedBy: 'cursada', targetEntity: CursadaDocente::class)]
    private Collection $cursada_docente;

    #[ORM\ManyToOne(inversedBy: 'cursada')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Comision $comision = null;

    #Error al agregar otro alumno con una asignatura ya existente


    #[ORM\OneToMany(mappedBy: 'cursada', targetEntity: ExamenAlumno::class, orphanRemoval: true)]
    private Collection $examenAlumnos;

    #[ORM\Column]
    private ?bool $libre = null;

    #[ORM\Column(nullable: true)]
    private ?int $nota1 = null;

    #[ORM\Column(nullable: true)]
    private ?int $nota2 = null;

    #[ORM\ManyToOne(inversedBy: 'cursada')]
    private ?Asignatura $asignatura = null;

    public function __construct()
    {
        $this->cursada_docente = new ArrayCollection();
        $this->examenAlumnos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCicloLectivo(): ?int
    {
        return $this->ciclo_lectivo;
    }

    public function setCicloLectivo(int $ciclo_lectivo): static
    {
        $this->ciclo_lectivo = $ciclo_lectivo;

        return $this;
    }

    public function getAlumno(): ?Alumno
    {
        return $this->alumno;
    }

    public function setAlumno(?Alumno $alumno): static
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * @return Collection<int, CursadaDocente>
     */
    public function getCursadaDocente(): Collection
    {
        return $this->cursada_docente;
    }

    public function addCursadaDocente(CursadaDocente $cursadaDocente): static
    {
        if (!$this->cursada_docente->contains($cursadaDocente)) {
            $this->cursada_docente->add($cursadaDocente);
            $cursadaDocente->setCursada($this);
        }

        return $this;
    }

    public function removeCursadaDocente(CursadaDocente $cursadaDocente): static
    {
        if ($this->cursada_docente->removeElement($cursadaDocente)) {
            // set the owning side to null (unless already changed)
            if ($cursadaDocente->getCursada() === $this) {
                $cursadaDocente->setCursada(null);
            }
        }

        return $this;
    }

    public function getComision(): ?Comision
    {
        return $this->comision;
    }

    public function setComision(?Comision $comision): static
    {
        $this->comision = $comision;

        return $this;
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
            $examenAlumno->setCursada($this);
        }

        return $this;
    }

    public function removeExamenAlumno(ExamenAlumno $examenAlumno): static
    {
        if ($this->examenAlumnos->removeElement($examenAlumno)) {
            // set the owning side to null (unless already changed)
            if ($examenAlumno->getCursada() === $this) {
                $examenAlumno->setCursada(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return 'Alumno: '.$this->getAlumno()->getPersona()->getNombre().'. Asignatura: '.$this->getAsignatura()->getNombre(); //capas que hay que cambiar esto
    }

    public function isLibre(): ?bool
    {
        return $this->libre;
    }

    public function setLibre(bool $libre): static
    {
        $this->libre = $libre;

        return $this;
    }

    public function getNota1(): ?int
    {
        return $this->nota1;
    }

    public function setNota1(?int $nota1): static
    {
        $this->nota1 = $nota1;

        return $this;
    }

    public function getNota2(): ?int
    {
        return $this->nota2;
    }

    public function setNota2(?int $nota2): static
    {
        $this->nota2 = $nota2;

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
}
