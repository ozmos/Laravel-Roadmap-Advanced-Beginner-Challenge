<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public const IS_ADMIN = 1;
    public const IS_MANAGER = 2;
    public const IS_USER = 3;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
