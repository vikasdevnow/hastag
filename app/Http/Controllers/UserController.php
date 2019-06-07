<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Token;
use App\Models\UserHash;
use App\User;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function hash() {
        $list = UserHash::select()->where('status', 1)->with('users')->get();
        // print_R($list);exit;
        return view('users.hash', ['data' => $list]);
    }

    public function searchHash(Request $request) {
        if (request()->ajax()) {
            $hash = UserHash::where('hash', $request->keyword)->orWhere('hash', 'like', '%' . $request->keyword . '%')->get()->pluck('hash');
            if ($hash) {
                $status = 'success';
            } else {
                $status = 'fail';
            }
            return response()->json(array('data' => $hash, 'status'=>$status));
        }
    }

    public function store_hash(Request $request) {
        $hash = new UserHash();
        $userId = Auth::id();
        $hash->user_id = $userId;
        $hash->hash = $request['hash'];
        $hash->description = $request['description'];
        $hash->status = 1;
        $hash->token = Token::generate();
        if ($files = $request->file('image')) {
            $path = public_path() . "/img/hash";
            $priv = 0777;
            if (!file_exists($path)) {
                mkdir($path, $priv) ? true : false; //
            }
            // print_R($path);exit;
            foreach ($files as $file) {
                $name = str_replace(' ', '', uniqid() . $file->getClientOriginalName());
                $file->move('/img/hash', $name);
                $hash->image = '/img/hash/' . $name;
            }
        }

        $hash->save();
        return redirect('/hash');
    }

}
