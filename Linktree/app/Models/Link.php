<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model {

    protected $fillable = ['id_link', 'click_date'];
    public $timestamps = false;
}
