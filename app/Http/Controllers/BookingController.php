<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscribePackage;
use App\Services\BookingService;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\StoreCheckBookingRequest;
use App\Models\SubscribeTransaction;

class BookingController extends Controller
{
    protected $bookingService;
    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function booking(SubscribePackage $subscribePackage)
    {
        $tax = 0.11;
        $totalTaxAmount = $tax * $subscribePackage->price;
        $grandTotalAmount = $subscribePackage->price + $totalTaxAmount;

        return view('front.chekout', compact('subscribePackage', 'totalTaxAmount', 'grandTotalAmount'));
    }

    public function bookingStore(SubscribePackage $subscribePackage, StoreBookingRequest $request)
    {
        $validated = $request->validated();

        try {
            $this->bookingService->storeBookingInSession($subscribePackage, $validated);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to Store booking, Please Try Again.']);
        }
        return redirect()->route('front.payment');
    }

    public function payment()
    {
        $data = $this->bookingService->payment();
        return view('booking.payment', $data);
    }

    public function paymentStore(StorePaymentRequest $request)
    {
        $validated = $request->validated();

        $bookingTransactionId = $this->bookingService->paymentStore($validated);
        if($bookingTransactionId)
        {
            return redirect()->route('front.booking_finished', $bookingTransactionId);
        }
        return redirect()->route('front.index')->withErrors(['error' => 'Payment Failed. Please Try Again.']);
    }

    public function bookingFinished(SubscribeTransaction $subscribeTransaction)
    {
        return view('booking.booking_finished', compact('subscribeTransaction'));
    }

    public function checkBooking(){
        return view('booking.check_booking');
    }

    public function checkBookingDetails(StoreCheckBookingRequest $request)
    {
        $validated = $request->validated;
        $bookingDetails = $this->bookingService->getBookingDetails($validated);
        if($bookingDetails){
            return view('booking.check_booking_details', compact('bookingDetails'));
        }
        return redirect()->route('booking.check_booking')->withErrors(['error' => 'Transaction Not Found']);
    }



}
