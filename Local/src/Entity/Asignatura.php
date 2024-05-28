<?php

namespace App\Entity;

use App\Repository\AsignaturaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AsignaturaRepository::class)]
class Asignatura
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $anio = null;

    #[ORM\Column(length: 255)]
    private ?string $programa = null;

    #[ORM\ManyToOne(inversedBy: 'asignatura')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tecnicatura $tecnicatura = null;


    #[ORM\OneToMany(mappedBy: 'asignatura', targetEntity: ExamenFinal::class, orphanRemoval: true)]
    private Collection $examenFinals;

    #[ORM\OneToMany(mappedBy: 'asignatura', targetEntity: Correlativa::class)]
    private Collection $correlativa;


    #[ORM\OneToMany(mappedBy: 'asignatura', targetEntity: Cursada::class)]
    private Collection $cursada;




    public function __construct()
    {
        $this->examenFinals = new ArrayCollection();
        $this->correlativa = new ArrayCollection();
        $this->cursada = new ArrayCollection();
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

    public function getAnio(): ?int
    {
        return $this->anio;
    }

    public function setAnio(int $anio): static
    {
        $this->anio = $anio;

        return $this;
    }

    public function getPrograma(): ?string
    {
        return $this->programa;
    }

    public function setPrograma(string $programa): static
    {
        $this->programa = $programa;

        return $this;
    }

    public function getTecnicatura(): ?Tecnicatura
    {
        return $this->tecnicatura;
    }

    public function setTecnicatura(?Tecnicatura $tecnicatura): static
    {
        $this->tecnicatura = $tecnicatura;

        return $this;
    }

    public function __toString(): string
    {
        return $this->getNombre();
    }

    /**
     * @return Collection<int, ExamenFinal>
     */
    public function getExamenFinals(): Collection
    {
        return $this->examenFinals;
    }

    public function addExamenFinal(ExamenFinal $examenFinal): static
    {
        if (!$this->examenFinals->contains($examenFinal)) {
            $this->examenFinals->add($examenFinal);
            $examenFinal->setAsignatura($this);
        }

        return $this;
    }

    public function removeExamenFinal(ExamenFinal $examenFinal): static
    {
        if ($this->examenFinals->removeElement($examenFinal)) {
            // set the owning side to null (unless already changed)
            if ($examenFinal->getAsignatura() === $this) {
                $examenFinal->setAsignatura(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Correlativa>
     */
    public function getCorrelativa(): Collection
    {
        return $this->correlativa;
    }

    public function addCorrelativa(Correlativa $correlativa): static
    {
        if (!$this->correlativa->contains($correlativa)) {
            $this->correlativa->add($correlativa);
            $correlativa->setAsignatura($this);
        }

        return $this;
    }

    public function removeCorrelativa(Correlativa $correlativa): static
    {
        if ($this->correlativa->removeElement($correlativa)) {
            // set the owning side to null (unless already changed)
            if ($correlativa->getAsignatura() === $this) {
                $correlativa->setAsignatura(null);
            }
        }

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
            $cursada->setAsignatura($this);
        }

        return $this;
    }

    public function removeCursada(Cursada $cursada): static
    {
        if ($this->cursada->removeElement($cursada)) {
            // set the owning side to null (unless already changed)
            if ($cursada->getAsignatura() === $this) {
                $cursada->setAsignatura(null);
            }
        }

        return $this;
    }


}
