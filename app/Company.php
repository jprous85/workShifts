<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 * @method static orderBy(string $string, string $string1)
 * @method static where(string $string, $id)
 * @method static findOrFail($id)
 */
class Company extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
       'updated_at'
    ];
}
