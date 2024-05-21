<?php

namespace App\Entity;

use App\Repository\ComisionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComisionRepository::class)]
class Comision
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $anio = null;

    #[ORM\Column(length: 5)]
    private ?string $comision = null;

    #[ORM\ManyToOne(inversedBy: 'comision')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Turno $turno = null;

    #[ORM\ManyToOne(inversedBy: 'comision')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tecnicatura $tecnicatura = null;

    #[ORM\OneToMany(mappedBy: 'comision', targetEntity: Cursada::class)]
    private Collection $cursada;

    public function __construct()
    {
        $this->cursada = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getComision(): ?string
    {
        return $this->comision;
    }

    public function setComision(string $comision): static
    {
        $this->comision = $comision;

        return $this;
    }

    public function getTurno(): ?Turno
    {
        return $this->turno;
    }

    public function setTurno(?Turno $turno): static
    {
        $this->turno = $turno;

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
            $cursada->setComision($this);
        }

        return $this;
    }

    public function removeCursada(Cursada $cursada): static
    {
        if ($this->cursada->removeElement($cursada)) {
            // set the owning side to null (unless already changed)
            if ($cursada->getComision() === $this) {
                $cursada->setComision(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getComision();

    }

}
