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
        'phone',
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

    public static function generateUniqueTrxId(){
        $prefix = 'GYMG';
        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (self::where('booking_trx_id', $randomString)->exists());

        return $randomString;
    }

    protected $casts = [
        'started_at' => 'date',
        'ended_at' => 'date'
    ];

    public function subscribePackage(){
        return $this->belongsTo(SubscribePackage::class, 'subscribe_package_id');
    }

}

