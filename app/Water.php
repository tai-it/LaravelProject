<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $table = "waters";
    protected $filllable = ['id', 'room_id', 'time', 'old_number', 'new_number', 'price', 'status'];
    public $timestamp = true;
}
