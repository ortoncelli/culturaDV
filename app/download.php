<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Download extends Model  {

    use SoftDeletes;

    protected $table = 'download';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];



}
