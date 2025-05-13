<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MailService;
use App\Models\mobil;
use App\Models\User;
use App\Models\UserBook;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

use function Illuminate\Support\enum_value;
use function PHPSTORM_META\map;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $mobil = mobil::latest()->get();
        return view('frontend.homepage', compact('mobil'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function detail(mobil $mobil){
        Log::info("tesss".$mobil);
        return view('frontend.detail' , compact('mobil'));
    }

    public function syarat(){
        return view('frontend.syarat');
    }
    public function faq(){
        return view('frontend.faq');
    }
    public function about(){
        return view('frontend.about');
    }
    public function service(){
        return view('frontend.service');
    }
    public function profile(){
        return view('frontend.profile');
    }
    public function editProf(){
        return view('frontend.edit-profile');
    }
    public function updateProf(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),     
        'password' => 'nullable|string|min:6|confirmed',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $user = auth()->user();
    $user->name = $request->name;
    $user->email = $request->email;

    $passwordChanged = false;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
        $changedPassword = true;
    }
    

    if ($request->hasFile('image')) {
        $data = $request->file('image')->store('assets/users', 'public');
        $user->image = $data;
    }

    $user->save();
    
    return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui.');
    }

    public function register(Request $request){

        $request->validate([
            "fullname"=> "required",
            "email"=> "required",
            "password"=>"required",
            "no_telp"=> "required"

        ]);


        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->role =  Role::USER;
        $user->no_telp = $request->no_telp;
        $user->password = Hash::make($request->password);

        $user->save();


        return redirect('login')->with(
            [
                'message'=> 'Buat akun sukses',
                'alert-type' => 'success'
            ]
            );


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user();

        $title = 'Welcome to the laracoding.com example email';
        $body = 'Thank you for participating!';
        $mobil = Mobil::findOrFail($request->mobil_id);
        $harga = $mobil->harga_sewa;
        $bejir = 'Order Rent';
        $content= 'Nama : ' . $user->name . '\n' .
                  'Email.:' . $user->email;

        if ($request->jenis_sewa === "Lepas Kunci"){
            $harga += 100000;
        }else if ($request->jenis_sewa === "Sopir"){
            $harga += 50000;
        }
        $request->validate([
            'nama' => 'required',
            'no_telp'=>'required',
            'alamat' => 'required',
            'tgl_sewa'=>'required',
            'hari_sewa'=>'required',
            'jenis_sewa'=>'required',
            'mobil_id'=>'required',
            'pesan'=>'nullable',




        ]);


        Mail::to('reyhan.firdaus227@gmail.com')->queue(new MailService($title, $body));
        Mail::to('silenthuntah.04@gmail.com')->queue(new MailService($bejir,$content));



        UserBook::create([
            'mobil_id' => $mobil->id,
            'nama' => $request->nama,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'tgl_sewa' => $request->tgl_sewa,
            'hari_sewa' => $request->hari_sewa,
            'jenis_sewa' => $request->jenis_sewa,
            'pesan' => $request->pesan,
            'harga_total' => $harga,

        ]
        );

        $tglsewa = Carbon::parse($request->tgl_sewa);
        $harisewa = Carbon::parse($request->hari_sewa);

        $jarakhari = $tglsewa->diffInDays($harisewa);

        $harga *= $jarakhari;

        if ($request->jenis_sewa === "Lepas Kunci"){
            $harga += 100000;
        }else if ($request->jenis_sewa === "Sopir"){
            $harga += 50000;
        }

        return redirect('home')->with([
            'message' => 'Permintaan anda berhasil dikirim , mohon cek email anda !',
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
    public function destroy(string $id)
    {
        //
    }

    public function sewa(mobil $mobil){

        return view('frontend.sewa' , compact('mobil'));
    }
}
