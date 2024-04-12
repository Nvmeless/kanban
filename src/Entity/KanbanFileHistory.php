<?php

namespace App\Entity;

use App\Repository\KanbanFileHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KanbanFileHistoryRepository::class)]
class KanbanFileHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(length: 66)]
    private ?string $event = null;

    #[ORM\ManyToOne(inversedBy: 'kanbanFileHistories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?KanbanFile $entity = null;

    #[ORM\ManyToOne(inversedBy: 'kanbanFileHistories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $createdBy = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEvent(): ?string
    {
        return $this->event;
    }

    public function setEvent(string $event): static
    {
        $this->event = $event;

        return $this;
    }

    public function getEntity(): ?KanbanFile
    {
        return $this->entity;
    }

    public function setEntity(?KanbanFile $entity): static
    {
        $this->entity = $entity;

        return $this;
    }

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $createdBy): static
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}
