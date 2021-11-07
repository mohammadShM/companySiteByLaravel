<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static paginate(int $int)
 * @method static create(array $array)
 * @method static findOrFail($id)
 * @method static orderBy(string $string, string $string1)
 * @method static where(string $string, string $string1, $id)
 */
class News extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
