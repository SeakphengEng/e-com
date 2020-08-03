<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * @method static create(array $formInput)
 * @method static findOrFail(int $id)
 */
class Products_model extends Model

{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'pro_name', 'pro_code', 'pro_price', 'image', 'pro_info', 'stock', 'size-type',
        'color', 'category_id', 'user_name', 'user_email'
    ];
}
