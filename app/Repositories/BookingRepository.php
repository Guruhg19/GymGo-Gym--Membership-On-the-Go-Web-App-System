<?php

namespace App\Repositories;

use App\Models\SubscribeTransaction;
use Illuminate\Support\Facades\Session;
use App\Repositories\Contracts\BookingRepositoryInterface;

class BookingRepository implements BookingRepositoryInterface {
    public function createBooking(array $data)
    {
        return SubscribeTransaction::create($data);
    }

    public function findByTrxIdAndPhoneNumber($bookingTrxId, $phoneNumber)
    {
        return SubscribeTransaction::where('booking_trx_id', $bookingTrxId)
                                    ->where('phone_number', $phoneNumber)
                                    ->first();
    }

    public function saveToSession(array $data)
    {
        Session::put('bookingData', $data);
    }

    public function getBookingDataFromSession()
    {
        return session('bookingData', []);
    }

    public function updateSessionData(array $data)
    {
        $bookingData = session('bookingData', []);
        $bookingData = array_merge($bookingData, $data);
        session(['bookingData' => $bookingData]);
    }

    public function clearSession()
    {
        Session::forget('bookingData');
    }
}