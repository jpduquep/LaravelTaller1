<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'item';
    protected $id;
    protected $name;
    protected $description;
    protected $stock;
    protected $price;

}
