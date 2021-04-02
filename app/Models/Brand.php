<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    protected $table='brands';
    use HasFactory;
}
