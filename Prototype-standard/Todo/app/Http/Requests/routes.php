<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Http\Controllers\Admincontroller;

require __DIR__ . '/App/Models/User.php';


Route::auth();