<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $users = User::all();
    return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
      $data['password'] = Hash::make($request->password);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $data['first_name'] = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['birthday']   = $request->birthday;
        $data['gender']     = $request->gender;
        $data['email']      = $request->email;
        $data['phone']      = $request->phone;
        $data['title_portofolio']       = $request->title_portofolio;
        $data['category_portofolio']    = $request->category_portofolio;
        $data['description_portofolio'] = $request->description_portofolio;

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Penambahan Data Berhasil!');


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
         $data['dataUser'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $user_id = $id;
    $user = User::findOrFail($user_id);

    $user->first_name = $request->first_name;
    $user->last_name  = $request->last_name;
    $user->birthday   = $request->birthday;
    $user->gender     = $request->gender;
    $user->email      = $request->email;
    $user->phone      = $request->phone;
    $user->title_portofolio       = $request->title_portofolio;
    $user->category_portofolio    = $request->category_portofolio;
    $user->description_portofolio = $request->description_portofolio;

    $user->save();

    return redirect()->route('user.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
