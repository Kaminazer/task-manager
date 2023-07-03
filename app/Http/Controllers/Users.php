<?php

namespace App\Http\Controllers;

class Users extends Controller
{
    public function register()
    {
        return "<h1>This is the page for registering new users.</h1>";
    }

    public function authorization()
    {
        return "<h1>This is the page for authorising users.</h1>";
    }
    public function show()
    {
        return "<h1>This is the page for showing existing users.</h1>";
    }

    public function delete(string $id)
    {
        return "<h1>This is the page for deleting the user with id : $id.</h1>";
    }
}
