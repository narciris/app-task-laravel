<?php

namespace App\Http\Controllers;

use App\Dtos\TaskRequestDtoV;
use App\Http\Requests\TaskRequestDto;
use App\Services\TaskService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
class TaskController extends Controller
{
    private $taskService;
    public function __construct(TaskService $taskService)
    {
       $this->taskService = $taskService;
    }


    public function index()
    {        try {
            $tasks = $this->taskService->getAllTask();
            return response()->json([$tasks], 200);
        }catch (\Exception $e){
            return response()->json($e->getMessage(),500);
        }
    }

    public function store(TaskRequestDto $taskRequestDto)
    {
        try {
            $dto = new TaskRequestDtoV();
            $dto->setTitle($taskRequestDto->input('title'));
            $dto->setDescription($taskRequestDto->input('description'));
            $dto->setDueDate(Carbon::parse($taskRequestDto->input('due_date')));
            logger()->info('Usuario esta autenticado?', ['id' => auth()->id()]);

            $dto->setUserId(auth()->id());
            $task = $this->taskService->createTask($dto);
            return response()->json($task, 201);
        }catch (\Exception $e){
            return response()->json(
                ['error'=> 'error al crear tareas', $e->getMessage()],
                500);
        }
    }
}
