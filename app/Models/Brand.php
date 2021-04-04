<?php

namespace App\Models;

use App\Http\Controllers\Frontend\ProductController;
use App\Models\Category;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Brand extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'brands';
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
        return '<a class="btn btn-sm btn-link" target="_blank" href="'.env('APP_URL').'/brand/'.urlencode($this->slug).'" data-toggle="tooltip" title="Just a demo custom button."><i class="la la-eye"></i> Xem trên web</a>';
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
        public function products(){
            return $this->hasMany(Product::class,'brand_id','id');
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
