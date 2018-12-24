<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticias extends Model  {

    use SoftDeletes;

    protected $table = 'noticias';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];



}
