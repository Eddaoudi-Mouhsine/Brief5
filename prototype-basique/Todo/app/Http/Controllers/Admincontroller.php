<?php

namespace App\Http\Controllers;

use App\Http\Middleware\isAdmin;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    public function index()
    {
        return "you are an administrator cuz you are seeing this page";
    }
}
