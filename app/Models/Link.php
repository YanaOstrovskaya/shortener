<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Link class
 * @property id $id
 * @property string $link
 * @property string $short_link
 */
class Link extends Model
{
    protected $fillable = [
        'link', 'short_link'
    ];
}
