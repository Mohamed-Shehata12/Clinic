<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorsController extends Controller
{
    //
    public function index(){
        $majors = Major::orderBy('id','DESC')-> paginate(20);
        return view('pages.majors',['majors'=>$majors]);
    }
}
