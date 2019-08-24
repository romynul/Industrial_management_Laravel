<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{

	 protected $table = "expenses";
    protected $primaryKey = 'eid';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
    
