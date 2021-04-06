<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;


    protected $table= 'information';
	protected $fillable = ['name','surname', 'email', 'data'];
}
