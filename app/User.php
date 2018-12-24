<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
    use SoftDeletes;

	protected $table = 'users';
	protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
	
	protected $fillable = ['name', 'email', 'password'];
	protected $hidden = ['password', 'remember_token'];

}
