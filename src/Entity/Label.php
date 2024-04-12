<?php

namespace App\Entity;

use App\Repository\LabelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LabelRepository::class)]
class Label
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 32, nullable: true)]
    private ?string $labelName = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(length: 32)]
    private ?string $labelColor = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateAt = null;

    /**
     * @var Collection<int, KanbanLabelHistory>
     */
    #[ORM\OneToMany(targetEntity: KanbanLabelHistory::class, mappedBy: 'entity')]
    private Collection $kanbanLabelHistories;

    #[ORM\Column(length: 24)]
    private ?string $status = null;

    public function __construct()
    {
        $this->kanbanLabelHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabelName(): ?string
    {
        return $this->labelName;
    }

    public function setLabelName(?string $labelName): static
    {
        $this->labelName = $labelName;

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

    public function getLabelColor(): ?string
    {
        return $this->labelColor;
    }

    public function setLabelColor(string $labelColor): static
    {
        $this->labelColor = $labelColor;
        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeInterface $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * @return Collection<int, KanbanLabelHistory>
     */
    public function getKanbanLabelHistories(): Collection
    {
        return $this->kanbanLabelHistories;
    }

    public function addKanbanLabelHistory(KanbanLabelHistory $kanbanLabelHistory): static
    {
        if (!$this->kanbanLabelHistories->contains($kanbanLabelHistory)) {
            $this->kanbanLabelHistories->add($kanbanLabelHistory);
            $kanbanLabelHistory->setEntity($this);
        }

        return $this;
    }

    public function removeKanbanLabelHistory(KanbanLabelHistory $kanbanLabelHistory): static
    {
        if ($this->kanbanLabelHistories->removeElement($kanbanLabelHistory)) {
            // set the owning side to null (unless already changed)
            if ($kanbanLabelHistory->getEntity() === $this) {
                $kanbanLabelHistory->setEntity(null);
            }
        }

        return $this;
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
