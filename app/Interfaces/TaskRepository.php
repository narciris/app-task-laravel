<?php

namespace App\Interfaces;

interface TaskRepository
{
    public function existsByTitle(string $title): bool;
    public function findAll(): array;

    public function createTask( array $data );
}
