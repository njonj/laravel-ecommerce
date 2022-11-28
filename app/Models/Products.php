<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use money_format;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'products_id';
    protected $fillable = ["categoriesId", "subCategoriesId", "products_name", "products_price", "products_quantity", "products_description", "products_image", "products_category"];

    //   public function presentPrice(){
    //       return money_format('$%i', $this->price / 100) ;
    //   }


    public function categories()
    {
        return $this->belongsTo(Categories::class, 'foreign_key', 'categories_name');
    }

    public function subcategories()
    {
        return $this->belongsTo(SubCategories::class, 'foreign_key', 'name');
    }


    // public function orders(){
    //     return $this->belongsToMany(Orders::class);
    // }

    public function orders_details()
    {
        return $this->hasMany(Orders_details::class);
    }


    // public function orders()
    //     {
    //         return $this->belongsToMany(Orders::class);
    //     }

    public static function getproducts()
    {
        $value = DB::table('products')->orderBy('products_id', 'asc')->get();
        return $value;
    }
}
