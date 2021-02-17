<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserController extends Controller
{
    public function profile(){
        $data = [
            'user' => Auth::user()
        ];
        
        return view('user.profile', $data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function userUpdate(array $data)
    {
        $user = Auth::user();
        $user->name = $data['name'];
        $user->last_name = $data['last_name'];
        $user->address = $data['address'];
        $user->save();

        return $user;
    }

    public function update(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->userUpdate($request->all());

        return redirect()->back()->with('notification', 'Informacion Actualizada Correctamente!');
    }

    public function active(Request $request){
        $user = User::find($request->id);
        $user->active = true;
        $user->save();

        return 'Usuario Activado, Ingrese desde el login';
    }
}
