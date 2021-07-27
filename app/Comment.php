<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Film(){

        return $this->belongsTo("App\Film")->get();
    }
    public function User(){

        return $this->belongsTo("App\User")->get();
    }
}
