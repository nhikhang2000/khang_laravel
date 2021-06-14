<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainers;

class TrainersController extends Controller
{
    public function trainers(){
        $obj = new Trainers();
        $trainers = $obj->paginate(15);
        return view('trainers',['trainers' => $trainers]);
    }

    public function search(Request $request){
        $search_value = $request->get('search');
        $obj = new Trainers();
        $search = $obj->search($search_value);
        return view('trainers',['search' => $search]);
    }
}