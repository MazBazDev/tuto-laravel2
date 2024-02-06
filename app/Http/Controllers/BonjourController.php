<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BonjourController extends Controller
{
    public function index() {
        return "bonjour";

    }

    public function mazbaz($name)
    {
        return "Bonjour " . $name;
    }
}
