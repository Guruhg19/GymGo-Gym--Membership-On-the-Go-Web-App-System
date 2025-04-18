<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribeTransaction extends Model
{
    use SoftDeletes, UUID, HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'email',
        'booking_trx_id',
        'proof',
        'total_amount',
        'started_at',
        'ended_at',
        'duration',
        'is_paid',
        'subscribe_package_id'
    ];

    public function subscribePackage(){
        return $this->belongsTo(SubscribePackage::class, 'subscribe_package_id');
    }

}

