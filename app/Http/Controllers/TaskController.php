<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
// use GrahamCampbell\Markdown\Facades\Markdown;

use Markdown;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function home(Request $request)
    {
        return view('tasks.home');
    }

    public function view($id)
    {

      $task = Task::findOrFail($id);

      return view('tasks.view', [
        'title' => ($task->title),
        'body' => Markdown::convertToHtml($task->body),
      ]);

    }

    public function add(Request $request)
    {
        return view('tasks.add', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }

    public function edit($id)
    {
      $task = Task::findOrFail($id);
      error_log($task);
      return view('tasks.edit', [
        'task' => $task
      ]);

    }
    public function update($id, Request $request)
    {
      $task = Task::findOrFail($id);

      $task ->title =  $request->input('title');
      $task ->body =  $request->input('body');
      $task ->created_on =  $request->input('created');
      $task ->modified_on =  $request->input('last-modified');
      $task ->expires_on =  $request->input('expired');
      $task ->status =  $request->input('status');

      $task->save();
      return redirect('/admin');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        error_log($request->body);
        $request->user()->tasks()->create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'created_on' => $request->input('created'),
            'modified_on' => $request->input('last-modified'),
            'expires_on' => $request->input('expired'),
            'status' => $request->input('status'),
            //ADD SELECT

        ]);

        return redirect('/admin');
    }

    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/admin');
    }
}
