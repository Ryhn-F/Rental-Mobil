<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\mobil;
use App\Models\UserBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserBook::with('mobil')->latest()->get();// Make sure this ID comes from the form/request
        foreach ($users as $user) {
        $mobil = Mobil::findOrFail($user->mobil_id);
        $harga = $user->mobil->harga_sewa;    
        $tglsewa = Carbon::parse($user->tgl_sewa);
        $harisewa = Carbon::parse($user->hari_sewa);

        $jarakhari = $tglsewa->diffInDays($harisewa);

        $harga *= $jarakhari;

        if ($user->jenis_sewa === "Lepas Kunci") {
            $harga += 100000;
        } else if ($user->jenis_sewa === "Sopir") {
            $harga += 90000;
        }

        $user->harga_total = $harga;
        $user->save();
        }

        $users = UserBook::with('mobil')->latest()->get();

        return view('Admin.Booking.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $booking = UserBook::findOrFail($id);
        $booking->delete();

        return redirect()->route('Book')->with('success', 'Booking berhasil dihapus.');
    }

    public function confirm($id)
    {
        $booking = UserBook::findOrFail($id);
        $booking->is_confirmed = true;
        $booking->save();

        return redirect()->back()->with('success', 'Booking berhasil dikonfirmasi.');
    }

}
