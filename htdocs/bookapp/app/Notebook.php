<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
  protected $table='book';
  protected $fillable=['name'];
}
