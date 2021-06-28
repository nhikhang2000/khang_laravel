<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';

    public function search($value,$id){
        $search_query = '%'.$value.'%';
        return self::where('company_name','like',$search_query)->where('company_name','like',$search_query)->where('category_id','=',$id)->paginate(15);
    }
}
