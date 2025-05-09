<?php

namespace App\Dtos;

use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class TaskResponseDto implements \jsonSerializable
{

    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?bool $completed;
    private ?Carbon $dueDate;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getCompleted(): ?bool
    {
        return $this->completed;
    }

    public function setCompleted(?bool $completed): void
    {
        $this->completed = $completed;
    }

    public function getDueDate(): ?Carbon
    {
        return $this->dueDate;
    }

    public function setDueDate(?Carbon $dueDate): void
    {
        $this->dueDate = $dueDate;
    }


    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'completed' => $this->completed,
            'due_date' => $this->dueDate,
        ];
    }
}
