<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function vocabulary() {
    	return $this->belongsToMany('App\VocabItem');
    }
}
