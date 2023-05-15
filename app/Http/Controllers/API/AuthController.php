<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_user' => 'required',
            'alamat_user' => 'required',
            'telepon_user' => 'required',
            'email_user' => 'required|email',
            'password_user' => 'required',
            // 'confirm_password' => 'required|same:password_user'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada Kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password_user'] = bcrypt($input['password_user']);
        $user = User::create($input);

        $token = $user->createToken('auth_token')->plainTextToken;

        $success['token'] = $token;
        $success['nama_user'] = $user->name;

        return response()->json([
            'success' => true,
            'message' => 'Sukses Register',
            'data' => $success
        ]);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email_user' => 'required|email',
            'password_user' => 'required',
        ], [
            'required' => ':attribute harus diisi.',
            'email_user' => 'alamat email pada kolom :attribute tidak valid.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => Str::ucfirst($validator->errors()->first()),
                'data' => []
            ]);

        }

        $user = User::where('email_user', $request->email_user)->first();

        if (! $user || ! Hash::check($request->password_user, $user->password_user)) {
            return response()->json([
                'error' => true,
                'message' => 'Pastikan email dan password anda benar.',
                'data' => []
            ]);
        }

        $token = $user->createToken("auth-token")->plainTextToken;

        return response()->json([
            'error' => false,
            'message' => 'Berhasil login.',
            'data' => [
                'token' => $token
            ]
        ]);
    }
}
