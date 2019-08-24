<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labours extends Model
{

	 protected $table = "labours";
    protected $primaryKey = 'lid';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    //
}
