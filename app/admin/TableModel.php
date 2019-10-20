<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class TableModel extends Model
{
    protected $table = 'member';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['id', 'name', 'email'];
}
