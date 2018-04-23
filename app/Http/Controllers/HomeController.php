<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;
use App\HakAkses;
use App\UserAkses;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth::user()->userAkses) {
        //     if(Auth::user()->userAkses->hakAkses->hak_akses == 'Administrator') {
        //         return view('home');
        //     }
        // }else{
        //     return view('welcome')->with('info', 'Kamu bukan admin');
        // }

        return view('home');
    }

    public function userAkses() {
        $user_akses = \DB::select('select * from view_user_akses');

        $user_tanpa_akses = User::leftJoin('user_akses', function($join) {
            $join->on('users.id_user', '=', 'user_akses.id_user');
        })->whereNull('user_akses.id_user_akses')->get(['username', 'users.id_user']);

        $hak_akses = HakAkses::all();

        return view('user-akses', compact('user_akses', 'user_tanpa_akses', 'hak_akses'));
    }

    public function tambahUserAkses(Request $request, $id) {
        $id_hak_akses = $request['akses'];

        UserAkses::create([
            'id_user_akses' => null,
            'id_user' => $id,
            'id_hak_akses' => $id_hak_akses
        ]);

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function deleteUser($id_user) {
        $user = User::find($id_user);

        if($user->userAkses) {
            return redirect()->back()->with('success', 'Data gagal dihapus');
        }

        $user->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
