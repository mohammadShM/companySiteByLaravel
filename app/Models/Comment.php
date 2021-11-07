<?php /** @noinspection PhpMissingReturnTypeInspection */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(array $array)
 * @method static softDeleted($param)
 * @method static findOrFail($id)
 * @method static find($id)
 */
class Comment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $guarded = ['id'];

    public function news()
    {
        return $this->belongsTo(News::class);
    }

}
