<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $name
 * @property int $amount
 * @property int $delivery_time
 * @property-read string $description
 */
class delivery extends Model
{
    use HasFactory;

    protected $guarded = [];
}
