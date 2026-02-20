<?php
namespace App\Models;

class Product
{
    public static function getProducts()
    {
        return [
            ['id' => 1, 'name' => 'Laptop', 'price' => 1000],
            ['id' => 2, 'name' => 'Phone', 'price' => 500],
            ['id' => 3, 'name' => 'Tablet', 'price' => 300],
        ];
    }

    public static function findProduct($id)
    {
        foreach (self::getProducts() as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }

        return null;
    }
}
