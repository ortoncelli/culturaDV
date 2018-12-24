<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eventos extends Model  {

    use SoftDeletes;

    protected $table = 'eventos';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];



}
