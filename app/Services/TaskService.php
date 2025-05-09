<?php

namespace App\Services;

use App\Dtos\TaskRequestDtoV;
use App\Dtos\TaskResponseDto;
use App\Interfaces\TaskRepository;
use App\Models\Task;

class TaskService
{

    public function __construct( Private TaskRepository $taskRepository)
    {

    }

    public function getAllTask()
    {
        $tasks = Task::all();
        return $tasks->map(function ($task) {

            return $this->mapToTaskDto($task);
        });
    }

    public function mapToTaskDto(Task $task)
    {
        $taskDto = new TaskResponseDto();
        $taskDto->setId($task->id);
        $taskDto->setTitle($task->title);
        $taskDto->setDescription($task->description);
        $taskDto->setDueDate($task->due_date);
        $taskDto->setCompleted($task->is_completed);
        return $taskDto;

    }

    public function createTask(TaskRequestDtoV $requestDto) : TaskResponseDto
    {
      if($this->taskRepository->existsByTitle($requestDto->getTitle())){
          throw new \Exception("el titulo ya existe");
      }

      $task = $this->taskRepository->createTask([
          'title' => $requestDto->getTitle(),
          'description' => $requestDto->getDescription(),
          'due_date' => $requestDto->getDueDate(),
          'is_completed'=> false,
          'user_id'=> $requestDto->getUserId(),
      ]);

      return $this->mapToTaskDto($task);


    }

}
