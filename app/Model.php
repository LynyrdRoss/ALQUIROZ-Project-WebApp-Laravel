<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
	// Make new Parent Model
	// Put "as Eloquent" in use line
	// Change class name to Parent name (Model) and extends to as Eloquent (as Name)   

    protected $guarded = [];
}
