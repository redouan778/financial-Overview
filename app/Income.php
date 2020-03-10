<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['amount', 'user_id', 'title', 'description', 'category', 'date'];

    protected $table = 'income';

    protected $primaryKey = 'id';

    protected $dates = ['date'];
}
