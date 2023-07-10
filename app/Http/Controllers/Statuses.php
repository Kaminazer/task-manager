<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class Statuses extends Controller
{
    public function showTasks($id)
    {
        $status = Status::query()->where('id',$id)->first();
        $tasks = $status->tasks;
    }
}
