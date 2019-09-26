<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duck extends Model
{
    protected $table = 'ducks';

    protected $fillable = ['duck_name'];
}
