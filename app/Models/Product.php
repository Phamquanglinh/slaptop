<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Utils;

class Product extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'products';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function setSlugAttribute()
    {
        $this->attributes['slug'] =Str::slug($this->name, '-').'.aspx';
    }
    public function viewOnWeb($crud = true)
    {
        return '<a class="btn btn-sm btn-link" target="_blank" href="'.env('APP_URL').'/product/'.urlencode($this->slug).'" data-toggle="tooltip" title="Just a demo custom button."><i class="la la-eye"></i> Xem trên web</a>';
    }


    public function formatMoney($money)
    {
        //format money function
        $formatMoney = false;
        while (!$formatMoney) {
            $replace = preg_replace('/(-?\d+)(\d\d\d)/', '$1.$2', $money);
            if ($replace !== $money) {
                $money = $replace;
            } else {
                $formatMoney = true;
            }
        }
        return $money;
    }

    public function sell($oldPrice,$price){
        return 100-ceil(($price/$oldPrice)*100);
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function products(){
        return $this->hasMany(Product::class,'product_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany(Tags::class,'pivot','product_id','tag_id');
    }

    public function parent(){
        return $this->belongsTo(Category::class,'parent_id','id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
