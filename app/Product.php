<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'product';
    
    protected $fillable = [
          'name',
          'catalog_id',
          'bodysmall',
          'body',
          'picture',
          'type',
          'price',
          'procent',
          'color'
    ];
    

    public static function boot()
    {
        parent::boot();

        Product::observe(new UserActionsObserver);
    }
    
    
    
    
}