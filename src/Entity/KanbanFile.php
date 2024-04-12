<?php

namespace App\Entity;

use App\Repository\KanbanFileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KanbanFileRepository::class)]
class KanbanFile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 58)]
    private ?string $kanbanFileName = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    /**
     * @var Collection<int, KanbanFileHistory>
     */
    #[ORM\OneToMany(targetEntity: KanbanFileHistory::class, mappedBy: 'entity')]
    private Collection $kanbanFileHistories;

    #[ORM\Column(length: 24)]
    private ?string $status = null;

    public function __construct()
    {
        $this->kanbanFileHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKanbanFileName(): ?string
    {
        return $this->kanbanFileName;
    }

    public function setKanbanFileName(string $kanbanFileName): static
    {
        $this->kanbanFileName = $kanbanFileName;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, KanbanFileHistory>
     */
    public function getKanbanFileHistories(): Collection
    {
        return $this->kanbanFileHistories;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }
}
