<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribeBenefit extends Model
{
    use SoftDeletes, UUID, HasFactory;

    protected $fillable = [
        'name',
        'subscribe_package_id'
    ];

    public function subscribePackage(){
        return $this->belongsTo(SubscribePackage::class, 'subscribe_package_id');
    }


}
