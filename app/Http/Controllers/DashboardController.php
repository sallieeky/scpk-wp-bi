<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $data = $this->rankWp();
        $authWp = $this->authWp();
        $total_pendaftar = User::count();
        return view('home', compact('data', 'authWp', 'total_pendaftar'));
    }
    public function kelolaAkun()
    {
        $akun = User::where("role", "!=", "admin")->get();
        return view('kelola-pengguna', compact('akun'));
    }
    public function kelolaAkunDelete(User $user)
    {
        $user->delete();
        return redirect()->back();
    }

    public function login()
    {
        return view('login');
    }
    public function loginAuth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return back()->with('error', 'Email atau password salah');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'ipk' => 'required|numeric',
            'jml_tanggungan' => 'required|numeric',
            'ukt' => 'required|numeric',
            'penghasilan_ortu' => 'required|numeric',
        ]);
        $request->merge(['password' => bcrypt($request->password)]);
        $user = User::create($request->all());
        Auth::login($user);

        return redirect('/');
    }

    public function wp()
    {
        $data = User::all();
        $bobot = [
            "ipk" => 40,
            "jml_tanggungan" => 10,
            "ukt" => 25,
            "penghasilan_ortu" => 25,
        ];
        $sum = 0;
        foreach ($bobot as $key => $value) {
            $sum += $value;
        }
        $bobotW = [];
        foreach ($bobot as $key => $value) {
            $bobotW[$key] = $value / $sum;
        }
        $vektorS = [];
        for ($i = 0; $i < count($data); $i++) {
            $vektorTemp = 1;
            foreach ($bobotW as $key => $value) {
                if ($key == "ukt" || $key == "penghasilan_ortu") {
                    $value = -$value;
                }
                $vektorTemp *= pow($data[$i]->$key, $value);
            }
            $vektorS[] = $vektorTemp;
        }
        $sumV = 0;
        foreach ($vektorS as $vs) {
            $sumV += $vs;
        }
        $result = [];
        foreach ($vektorS as $vs) {
            $result[] = $vs / $sumV;
        }
        $result[] = $data;

        $arr = [];
        for ($i = 0; $i < count($data); $i++) {
            $arr[$i] = $data[$i];
            $arr[$i]->result = $result[$i];
        }

        return $arr;
    }

    public function rankWp()
    {
        $data = $this->wp();
        usort($data, function ($a, $b) {
            return $a->result < $b->result;
        });
        return $data;
    }

    public function authWp()
    {
        $data = $this->rankWp();
        $user = Auth::user()->nama;

        $authWp = [];
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]->nama == $user) {
                $authWp["result"] = $data[$i]->result;
                $authWp["rank"] = $i + 1;
                break;
            }
        }
        return $authWp;
    }
}
