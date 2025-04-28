<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MobilStoreRequest;
use App\Http\Requests\Admin\MobilUpdateRequest;
use App\Models\mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class MobilController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = mobil::latest()->get();
        return view('admin.mobil.index' ,compact('cars' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MobilStoreRequest $request)
    {


        $data = $request->validated();

        // Buat slug otomatis
        $data['slug'] = Str::slug($data['nama_mobil']);

        // Pastikan file gambar ada sebelum menyimpan
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('assets/mobil', 'public');
        }

        Mobil::create($data);

    return redirect()->route('mobil.index')->with([
        'message'=> 'Data sukses dibuat !',
        'alert-type'=>'success'
    ]);
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
    public function edit(mobil $mobil)
    {
        return view('admin.mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MobilUpdateRequest $request, mobil $mobil)
    {
        if ($request->validated()) {
            $slug = Str::slug($request->nama_mobil, '-');
            $mobil->update($request->validated() + ['slug' => $slug]);

            if ($request->hasFile('gambar')) {
                // Delete old image if exists
                if ($mobil->gambar) {
                    Storage::delete('public/' . $mobil->gambar);
                }

                // Store new image
                $mobil->gambar = $request->file('gambar')->store('assets/mobil', 'public');
                $mobil->save();
            }
        }

        return redirect()->route('mobil.index')->with([
            'message' => 'Data sukses di edit!',
            'alert-type' => 'success'
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mobil $mobil) // Make sure the variable matches the model
{
    if ($mobil->gambar) {
        Storage::delete('public/' . $mobil->gambar); // Use Storage helper instead of unlink
    }

    $mobil->delete();

    return redirect()->back()->with([
        'message' => 'Data Berhasil dihapus',
        'alert-type' => 'success'
    ]);
}

public function updateImage(Request $request , $carId){

$request->validate([
    'gambar' => 'required|image'
]);

$mobil = mobil::findOrFail($carId);

if ($request->gambar){
    Storage::delete('public/' . $mobil->gambar);
    $gambar = $request->file('gambar')->store('assets/mobil', 'public');

    $mobil->update(['gambar'=> $gambar]);
}

return redirect()->back()->with(
    [
        'message' => 'Gambar berhasil di ganti',
        'alert-type' => 'info'
    ]
    );
}



}
