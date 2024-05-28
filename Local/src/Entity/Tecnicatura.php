<?php

namespace App\Entity;

use App\Repository\TecnicaturaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TecnicaturaRepository::class)]
class Tecnicatura
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $duracion = null;

    #[ORM\Column(nullable: true)]
    private ?int $cantidad_asignaturas = null;

    #[ORM\Column(length: 30)]
    private ?string $numero_resolucion = null;

    #[ORM\ManyToOne(inversedBy: 'tecnicatura')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modalidad $modalidad = null;

    #[ORM\OneToMany(mappedBy: 'tecnicatura', targetEntity: Asignatura::class)]
    private Collection $asignatura;

    #[ORM\OneToMany(mappedBy: 'tecnicatura', targetEntity: Comision::class)]
    private Collection $comision;

    public function __construct()
    {
        $this->asignatura = new ArrayCollection();
        $this->comision = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDuracion(): ?int
    {
        return $this->duracion;
    }

    public function setDuracion(int $duracion): static
    {
        $this->duracion = $duracion;

        return $this;
    }

    public function getCantidadAsignaturas(): ?int
    {
        return $this->cantidad_asignaturas;
    }

    public function setCantidadAsignaturas(?int $cantidad_asignaturas): static
    {
        $this->cantidad_asignaturas = $cantidad_asignaturas;

        return $this;
    }

    public function getNumeroResolucion(): ?string
    {
        return $this->numero_resolucion;
    }

    public function setNumeroResolucion(string $numero_resolucion): static
    {
        $this->numero_resolucion = $numero_resolucion;

        return $this;
    }

    public function getModalidad(): ?Modalidad
    {
        return $this->modalidad;
    }

    public function setModalidad(?Modalidad $modalidad): static
    {
        $this->modalidad = $modalidad;

        return $this;
    }

    /**
     * @return Collection<int, Asignatura>
     */
    public function getAsignatura(): Collection
    {
        return $this->asignatura;
    }

    public function addAsignatura(Asignatura $asignatura): static
    {
        if (!$this->asignatura->contains($asignatura)) {
            $this->asignatura->add($asignatura);
            $asignatura->setTecnicatura($this);
        }

        return $this;
    }

    public function removeAsignatura(Asignatura $asignatura): static
    {
        if ($this->asignatura->removeElement($asignatura)) {
            // set the owning side to null (unless already changed)
            if ($asignatura->getTecnicatura() === $this) {
                $asignatura->setTecnicatura(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Comision>
     */
    public function getComision(): Collection
    {
        return $this->comision;
    }

    public function addComision(Comision $comision): static
    {
        if (!$this->comision->contains($comision)) {
            $this->comision->add($comision);
            $comision->setTecnicatura($this);
        }

        return $this;
    }

    public function removeComision(Comision $comision): static
    {
        if ($this->comision->removeElement($comision)) {
            // set the owning side to null (unless already changed)
            if ($comision->getTecnicatura() === $this) {
                $comision->setTecnicatura(null);
            }
        }

        return $this;
    }
    public function __toString(): string
    {
        return $this->getNombre();
    }
}
