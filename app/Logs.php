<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{

	 protected $table = "logs";
    protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    //
}
