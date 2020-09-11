<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'user_id', 'problem', 'system', 'version'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
