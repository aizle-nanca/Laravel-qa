<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
    public function user(){
        return $this->belongTo(User::class);
    }

}
