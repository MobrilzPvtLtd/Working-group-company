<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    protected $fillable = ['name', 'profession', 'description'];

    // Define the relationship with ProductImage model
    public function productImages()
    {
        return $this->hasMany(image::class);
    }
}
