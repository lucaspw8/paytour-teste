<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $table = 'curriculum';
    protected $fillable = ['id','name','email','phone','job','schooling','message','curriculum','ip_address'];
    protected $hidden = ['updated_at','created_at'];
}
