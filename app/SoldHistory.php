<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoldHistory extends Model
{
    //

    protected $table = "sold";
    protected $primaryKey = 'serialno';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
