<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VocabItem extends Model
{
    public function sentences() {
    	return $this->belongsToMany('App\Sentence');
    }
}
