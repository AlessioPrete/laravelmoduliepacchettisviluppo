<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\User;
use Illuminate\Http\Request;
use alessioprete\BaseApp\app\Models\tasks;
use function Symfony\Component\Translation\t;

class tasksController extends Controller
{
    public function tasksShow()
    {
        $utente = User::find(alessioprete_auth()->user()->id);
        $tasks = $utente->tasks->where('complete', '=', 0);
        return view(alessioprete_view('auth.tasks.tasks'), compact('tasks'));
    }

    public function tasksCompleteShow()
    {
        $utente = User::find(alessioprete_auth()->user()->id);
        $tasks = $utente->tasks->where('complete', '=', 1);
        return view(alessioprete_view('auth.tasks.taskscomplete'), compact('tasks'));
    }
    public function newtask()
    {
        return view(alessioprete_view('auth.tasks.newtask'));
    }
    public function storeNewTask(Request $request)
    {
        $user = alessioprete_auth()->user();
        $task = new tasks();
        $task->titolo = $request->titolo;
        $task->contenuto = $request->contenuto;
        $task->scadenza = $request->scadenza;
        $user->tasks()->save($task);
        return redirect('admin/tasks');
    }
    public function deleteTask(Request $request)
    {
        tasks::destroy($request->deleteid);
        return redirect('admin/tasks');
    }

    public function completeTask(Request $request)
    {
        tasks::find($request->completaid)->update(['complete' => 1]);
        return redirect('admin/tasks');
    }
}
