<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribePackage extends Model
{
    use SoftDeletes, UUID, HasFactory;

    protected $fillable = [
        'name',
        'price',
        'icon',
        'duration',
        // 'gym_id'
    ];

    public function gym(){
        return $this->belongsTo(Gym::class,'gym_id');
    }

    public function subscribeBenefits(){
        return $this->hasMany(SubscribeBenefit::class);
    }

    public function subscribeTransactions(){
        return $this->hasMany(SubscribeTransaction::class);
    }

}
