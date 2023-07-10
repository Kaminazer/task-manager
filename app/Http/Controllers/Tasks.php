<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;

class Tasks extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "<h1>Display a listing of the resource.</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "<h1>Show the form for creating a new resource.</h1>";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "<h1>Store a newly created resource in storage.</h1>";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::query()->where('id',$id)->first();
        $status = $task->status;
        $labels = $task->labels;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "<h1>Show the form for editing the specified resource.</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "<h1>Update the specified resource in storage.</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "<h1>Remove the specified resource from storage.</h1>";
    }
}
