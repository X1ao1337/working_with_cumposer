<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewM;
class NewC extends Controller
{
    public function getUsers()
    {
        $ch = NewM::get();

        return response()->json($ch);
    }

}
