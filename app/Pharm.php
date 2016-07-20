<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharm extends Model
{
  public function user(){
    return $this->belongsTo('App\User');
  }
}
