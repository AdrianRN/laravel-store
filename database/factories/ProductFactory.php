<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // With this funciton we indicate to faker to create two words
        $name = $this->faker->sentence(2);
        // assign categories randomly
        $subcategory = Subcategory::all()->random();
        //Recuperación de la categoria
        $category = $subcategory->category;
        //Recuperación de toda la categoria de la marca.
        $brand = $category->brands->random();
        
        //Si el valor es true vamos a grabar null
        if($subcategory->color){
            $quantity = null;
        }else{
            $quantity = 15;
        }

        return [
            //
            'name' =>$name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement(([19.99, 49.99, 99.99])),
            'subcategory_id' => $subcategory->id,
            'brand_id' =>$brand->id,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
