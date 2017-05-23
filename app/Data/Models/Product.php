<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Data\Models\Product
 *
 * @property int $id
 * @property int $category_id
 * @property string $product_name
 * @property string $product_code
 * @property string $unit_price
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereProductCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereProductName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereUnitPrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Data\Models\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
