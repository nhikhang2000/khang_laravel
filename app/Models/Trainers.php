<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';

    public function search($value){
        $search_query = '%'.$value.'%';
        return self::where('trainer_name','like',$search_query)->paginate(15);
    }
}
