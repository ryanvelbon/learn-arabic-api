<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
	public $timestamps = false;
	
    public function vocabulary() {
    	return $this->belongsToMany('App\VocabItem');
    }
}
