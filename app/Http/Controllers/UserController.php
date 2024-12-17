<?php

namespace App\Http\Controllers;

use App\Models\Property_master;
use App\Models\User_master;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function new_user()
    {
        return view('register_user');
    }

    public function register_user(Request $request)
    {
        $password = md5($request->password);
        $new_user = new User_master();
        $new_user->name = $request->name;
        $new_user->contact_no = $request->contact_no;
        $new_user->username = $request->username;
        $new_user->password = $password;
        $new_user->role = "user";
        $new_user->save();
        return redirect()->route('user-login');
    }

    public function add_wishlist($id)
    {
        $find_property = Property_master::find($id);
        if ($find_property) {
            $user_id = session()->get('user'); // get user id from the session
            if ($user_id) {
                //  If session has userid then....
                $new_item = new Wishlist();
                $new_item->property_id = $id;
                $new_item->user_id = $user_id;
                $new_item->save();
                return redirect()->route('wishlist');
            }
        }
    }

    public function wishlist()
    {
        $user_id = session()->get('user'); // get user id from the session
        $wishlist = Wishlist::join('property_masters', 'wishlists.property_id', '=', 'property_masters.id')->where('wishlists.user_id', '=', $user_id)->select('property_masters.*')->get();

        $data = compact('wishlist');
        return view('wishlist')->with($data);
    }

    public function remove_wishlist($id)
    {
        $user_id = session()->get('user');
        $property = Wishlist::where('property_id', '=', $id)->where('user_id', '=', $user_id) ->first();
        $property->delete();
        return redirect()->route('wishlist');
    }

    public function update_user()
    {
        $user_id = session()->get('user');
        return view('update_user')->with(['user' => User_master::find($user_id)]);
    }

    public function save_user_update(Request $request, $id)
    {
        $user = User_master::find($id);
        if ($request->password != "") {
            // If there is a password to be updated then....
            $user->update([
                'name' => $request->name,
                'contact_no' => $request->contact_no,
                'username' => $request->username,
                'password' => $request->password
            ]);
            return redirect('user-login');
        } else {
            // If there is no password to be updated then....
            $user->update([
                'name' => $request->name,
                'contact_no' => $request->contact_no,
                'username' => $request->username,
            ]);
            return redirect()->route('home');
        }
    }

    // Function to delete the user
    public function delete_user($id)
    {
        $user = User_master::find($id); // Find the details of the user
        if($user)
        {
            // if the details of the user is found then
            $wishlist = Wishlist::where('user_id','=',$user->id)->first();
            if($wishlist)
            {
                if($wishlist->delete())
                {
                    if($user->delete())
                    {
                        return redirect()->route('zameen_dekho');
                    }
                }
            }
        }
    }
}
