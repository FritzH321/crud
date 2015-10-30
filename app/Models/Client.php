<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Client extends Model
{
    
	public $table = "clients";
    

	public $fillable = [
	    "clientname",
		"clientcontact",
		"clientemail",
		"clientvat",
		"clientaddress",
		"user_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "clientname" => "string",
		"clientcontact" => "string",
		"clientemail" => "string",
		"clientvat" => "string",
		"clientaddress" => "string",
		"user_id" => "integer"
    ];

	public static $rules = [
	    "clientname" => "required",
		"clientemail" => "required"
	];

    public function invoices(){
        return $this->hasMany('App\Models\Invoice');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }





}
