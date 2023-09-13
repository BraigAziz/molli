<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssistantLoginController extends Controller
{
    protected function guard()
    {
        return Auth::guard('assistant');
    }

}
