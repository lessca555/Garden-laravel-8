<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use PDF;
use Carbon\Carbon;


class PrintController extends Controller
{
    public function print(Booking $reservation)
    {
        $data = [
            'id' => $reservation->id,
            'guest_name' => $reservation->guest_name,
            'phone' => $reservation->phone,
            'room_type' => $reservation->room->room_type,
            'created_at' => $reservation->created_at->format('d-m-Y H:i'),
            'check_in' => Carbon::createFromFormat('Y-m-d H:i:s', $reservation->check_in)->format('d-m-Y H:i'),
            'check_out' => Carbon::createFromFormat('Y-m-d H:i:s', $reservation->check_out)->format('d-m-Y H:i'),
        ];

        $pdf = PDF::setOptions(['isPhpEnabled' => true])->loadview('print', $data);

        return $pdf->download('hotelhebat-' . $reservation->created_at->format('dmy') . '-' . $data['id'] . '.pdf');
    }
}
