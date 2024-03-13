<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

/**
* PRODUCT ATTRIBUTES
* $this->attributes['id'] - int - contains the item primary key (id)
* $this->attributes['name'] - string - contains the iten name
* $this->attributes['description'] - string - contains description of item
* $this->attributes['stock'] - int - contains the quantity of stock
* $this->attributes['price'] - int - contains the product price
*/

protected $fillable = ['name','price','description','stock'];

public function getId(): int{
    return $this->attributes['id'];
}

#Aunque este set no deberia existir porque el id debe ser un proceso interno de laravel
public function setId($id) : void{
    $this->attributes['id'] = $id;
}
public function getStock(): string{
    return $this->attributes['stock'];
}

public function setStock($stock) : void{
    $this->attributes['stock'] = $stock;
}
public function getDescription(): string{
    return $this->attributes['description'];
}

public function setDescription($description) : void{
    $this->attributes['description'] = $description;
}

public function getName(): string{
    return $this->attributes['name'];
}

public function setName($name) : void{
    $this->attributes['name'] = $name;
}

public function getPrice(): int{
    return $this->attributes['price'];
}

public function setPrice($price) : void{
    $this->attributes['price'] = $price;
}

}
