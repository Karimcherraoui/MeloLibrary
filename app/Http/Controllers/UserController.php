<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::where('isAdmin', '!=', true)->get();
        return view('admin.listUsers', ['users' => $users]);
    }

    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'fname' => 'required|min:3',
            'lname' => 'required',
            'userName' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $hashedPassword = Hash::make($validatedData['password']);


        // dd($request);
        $user = new User();

        $user->fname =  $validatedData['fname'];
        $user->lname = $validatedData['lname'];
        $user->userName = $validatedData['userName'];
        $user->email = $validatedData['email'];
        $user->password = $hashedPassword;

        $user->save();


        return redirect('/')->with('success', 'Your account has been created');;
    }


    public function loginPost(Request $request)
    {
        $attributes = $request->validate([
            "email" => ["filled", "required"],
            "password" => "filled|required|min:6",
        ]);
        if (auth()->attempt($attributes)) {
            return redirect("/");
        } else {
            return back()->withErrors(["message" => "invalide email/password"]);
        }
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect('/admin/dashboard')->with('message', 'user deleted');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }



}
