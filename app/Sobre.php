<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sobre extends Model  {

    use SoftDeletes;

    protected $table = 'sobre';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

}
