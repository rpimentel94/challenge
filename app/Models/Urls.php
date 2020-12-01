<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urls extends Model
{
    protected $table = "urls";
    public $timestamps = true;

    protected $fillable = [
		'url', 'shorten'
	];
}
