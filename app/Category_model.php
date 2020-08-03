<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static pluck(string $string, string $string1)
 * @method static findOrFail(int $id)
 */
class   Category_model extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    protected $fillable = ['name'];

}
