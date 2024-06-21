<?php

namespace App\Http\Controllers\Verwaltung;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Carbon;
use App\Http\Requests\StoreUser; 
use App\Http\Requests\UpdateUser; 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(20);
        return view('verwaltung.user.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('verwaltung.user.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreUser  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {    
        $user = new User(
            	[
            		'name'              => $request->name,
            		'email'             => $request->email,
            		'email_verified_at' => now(),
             		'password'          => bcrypt($request->password)
                ]);

        $user->save();

        return redirect()->route('register.index')->with('success','Новый пользователь добавлен');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('verwaltung.user.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateUser  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => bcrypt($request->password)
        ]);
        return redirect()->route('register.index')->with('success','Пользователь успешно обновлен');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('register.index')->with('success','Пользователь успешно удален');
    }
}
