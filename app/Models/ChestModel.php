<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChestModel extends Model
{
    protected $table = 'chests';

    protected $fillable = [
        'name',
        'pictureFileName',
        'price',
    ];

    public function users()
    {
        return $this->belongsToMany(UserModel::class);
    }
}
