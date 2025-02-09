<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingTransactionRequest;
use App\Http\Resources\Api\BookingTransactionResource;
use App\Http\Resources\Api\ViewBookingResource;
use App\Models\BookingTransaction;
use App\Models\OfficeSpace;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class BookingTransactionController extends Controller
{
    public function booking_details(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'booking_trx_id' => 'required|string',
        ]);

        $booking = BookingTransaction::where('phone_number', $request->phone_number)
            ->where('booking_trx_id', $request->booking_trx_id)
            ->with(['officeSpace', 'officeSpace.city'])
            ->first();

        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        return new ViewBookingResource($booking);
    }

    public function store(StoreBookingTransactionRequest $request)
    {
        $validatedData = $request->validated();
        $officeSpace = OfficeSpace::find($validatedData['office_space_id']);

        $validatedData['is_paid'] = false;
        $validatedData['booking_trx_id'] = BookingTransaction::generateUniqueTrxId();
        $validatedData['duration'] = $officeSpace->duration;
        $validatedData['ended_at'] = (new \DateTime($validatedData['started_at']))
            ->modify("+{$officeSpace->duration} days")
            ->format('Y-m-d');

        $bookingTransaction = BookingTransaction::create($validatedData);

        // Mengirim notifikasi melalui SMS atau WhatsApp dengan Twilio
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv("TWILIO_AUTH_TOKEN");

        $twilio = new Client($sid, $token);

        // Membuat pesan dengan baris baru
        $messageBody = "Hi {$bookingTransaction->name}, thank you for booking an office space with RentOffice.\n\n";
        $messageBody .= "Your office space reservation at {$bookingTransaction->officeSpace->name} is currently being processed ";
        $messageBody .= "with Booking TRX ID: {$bookingTransaction->booking_trx_id}.\n\n";
        $messageBody .= "We will update you on your booking status as soon as possible.";

        // Kirim melalui SMS
        // $twilio->messages->create(
        //     "+{$bookingTransaction->phone_number}", // Nomor tujuan
        //     [
        //         "body" => $messageBody,
        //         "from" => getenv("TWILIO_PHONE_NUMBER"),
        //     ]
        // );

        // Kirim melalui WhatsApp
        $twilio->messages->create(
            "whatsapp:+{$bookingTransaction->phone_number}", // Nomor tujuan
            [
                "from" => "whatsapp:+14155238886", // Nomor pengirim Twilio untuk WhatsApp
                "body" => $messageBody, // Pesan yang dikirim
            ]
        );

        $bookingTransaction->load('officeSpace');
        return new BookingTransactionResource($bookingTransaction);
    }
}
