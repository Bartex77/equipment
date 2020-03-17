<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    const STATES = [
        '0' => 'Awaiting',
        '1' => 'Sent',
        '2' => 'Rejected',
    ];

    protected $table = 'prices';

    protected $fillable = [
        'name',
        'pictureFileName',
        'code',
        'price',
        'state',
    ];

    public function users()
    {
        return $this->belongsToMany(UserModel::class);
    }
}
