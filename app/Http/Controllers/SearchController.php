<?php

namespace App\Http\Controllers;

use App\Models\Trainers;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $search_value = $request->get('search');
        $obj = new Trainers();
        $search = $obj->search($search_value);
        return view('search',['search' => $search]);
    }
}