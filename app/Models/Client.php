<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
use SoftDeletes;

    protected $fillable = ['company', 'address'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
