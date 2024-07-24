<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(): View
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
 
            $request->session()->put('user_data', Auth::user());

            return redirect()->intended('/');
        }
 
        return back();
    }

    public function store(Request $request): RedirectResponse
    {
        if ($request->hasFile('image')) {
            $validated = $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:5120',
            ]);
        
            $file = $request->file('image');
        
            $filename = time() . '.' . $file->getClientOriginalExtension();
        
            $file->move(public_path('img'), $filename);
        }

        $data = $request->all();
        $data['password'] = Hash::make($request->input('password'));
        $data['image'] = $filename ?? 'default_image.jpg' ; 
        
        User::create($data);

        return redirect('/admin');
    }

    public function getDetail($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(Request $request): RedirectResponse
    {
        User::whereId($request->input('id'))
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'username' => $request->input('username'),
                'role' => $request->input('role'),
            ]);
        
        if($request->input('password') !== null) {
            User::whereid($request->input('id'))
                ->update([
                    'password' => Hash::make($request->input('password'))
                ]);
        }

        if ($request->hasFile('image')) {
            $validated = $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:5120',
            ]);
        
            $file = $request->file('image');
        
            $filename = time() . '.' . $file->getClientOriginalExtension();
        
            $file->move(public_path('img'), $filename);

            User::whereid($request->input('id'))
                ->update([
                    'image' => $filename
                ]);
        }

        return redirect('/admin');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if($user->role === 'user') {
            $user->delete();
        } else {
            // kirim sweet alert user tidak bisa dihapus karena role admin
        }

        return redirect('/admin');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/auth');
    }
}