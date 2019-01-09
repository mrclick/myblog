<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Renaming a table
    protected $table = 'posts';

    //Renaming primary key
    public $primaryKey = 'id';

    public $timestamp = true;
}
