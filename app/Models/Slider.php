<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static findOrFail($id)
 */
class Slider extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

}
