<?php

namespace alessioprete\BaseApp\app\Http\Controllers;

use App\Http\Controllers\Controller;

class tasks extends Controller
{
    public function tasksShow()
    {
        return view(alessioprete_view('auth.tasks.tasks'));
    }

    public function newtask()
    {
        return view(alessioprete_view('auth.tasks.newtask'));
    }
}
