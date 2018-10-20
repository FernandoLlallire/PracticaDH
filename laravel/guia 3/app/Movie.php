<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public function getTitle(){
    return $this->title ." ".$this->rating;
  }
}
