<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuneModel extends Model
{
    protected $table = 'runes';

    protected $fillable = [
        'name',
        'pictureFileName',
        'bonus',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(UserModel::class);
    }
}
