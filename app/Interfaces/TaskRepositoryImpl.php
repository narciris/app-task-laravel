<?php

namespace App\Interfaces;

use App\Models\Task;

class TaskRepositoryImpl implements TaskRepository
{


    public function existsByTitle(string $title): bool
    {
        return Task::where('title', $title)->exists();
    }

    public function findAll(): array
    {
        return Task::all()->toArray();
    }


    public function createTask(array $data)
    {
        return Task::create($data);
    }
}
