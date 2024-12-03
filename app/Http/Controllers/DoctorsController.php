<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Operator;

class DoctorsController extends Controller
{
    //
    public function index(){
        $doctors = User::with('major')->where('role', operator:"doctor")->paginate(20);
        return view('pages.doctors',compact('doctors'));
    }
}
