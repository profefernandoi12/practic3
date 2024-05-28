<?php

namespace App\Entity;

use App\Repository\InstitucionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstitucionRepository::class)]
class Institucion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nombre = null;

    #[ORM\ManyToOne(inversedBy: 'institucion')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Localidad $localidad = null;

    #[ORM\OneToMany(mappedBy: 'institucion', targetEntity: Titulo::class)]
    private Collection $titulo;

    public function __construct()
    {
        $this->titulo = new ArrayCollection();
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

    public function getLocalidad(): ?Localidad
    {
        return $this->localidad;
    }

    public function setLocalidad(?Localidad $localidad): static
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * @return Collection<int, Titulo>
     */
    public function getTitulo(): Collection
    {
        return $this->titulo;
    }

    public function addTitulo(Titulo $titulo): static
    {
        if (!$this->titulo->contains($titulo)) {
            $this->titulo->add($titulo);
            $titulo->setInstitucion($this);
        }

        return $this;
    }

    public function removeTitulo(Titulo $titulo): static
    {
        if ($this->titulo->removeElement($titulo)) {
            // set the owning side to null (unless already changed)
            if ($titulo->getInstitucion() === $this) {
                $titulo->setInstitucion(null);
            }
        }

        return $this;
    }
}
