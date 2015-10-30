<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Invoice extends Model
{
    
	public $table = "invoices";
    

	public $fillable = [
	    "client_id",
		"invoicenumber"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "client_id" => "integer",
		"invoicenumber" => "integer"
    ];

	public static $rules = [
	    "client_id" => "required",
		"invoicenumber" => "required"
	];

    public function client(){
        return $this->belongsTo('App\Models\Client', 'client_id', 'id');
    }

}
