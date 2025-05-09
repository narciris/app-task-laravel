<?php

namespace App\Dtos;

use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class TaskRequestDtoV
{
    private ?string $title;
    private ?string $description;
    private ?Carbon $dueDate;
    private ?int $userId;

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
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

    public function getDueDate(): ?Carbon
    {
        return $this->dueDate;
    }

    public function setDueDate(?Carbon $dueDate): void
    {
        $this->dueDate = $dueDate;
    }



}
