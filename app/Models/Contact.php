<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static paginate(int $int)
 * @method static findOrFail($id)
 */
class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

}
