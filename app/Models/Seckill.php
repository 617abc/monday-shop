<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Seckill
 *
 * @property int $id
 * @property int $product_id
 * @property int $numbers
 * @property string $start_at 抢购开始时间
 * @property string $end_at 抢购结束时间
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereNumbers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Seckill whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Seckill extends Model
{
    //
}