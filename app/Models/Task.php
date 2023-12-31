<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function labels()
    {
        return $this->belongsToMany(Label::class, "task_label");
    }
}
