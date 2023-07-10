<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Status;

class Labels extends Controller
{
    public function showTasks($id)
    {
        $labels = Label::query()->where('id',$id)->first();
        $tasks = $labels->tasks;
    }
}
