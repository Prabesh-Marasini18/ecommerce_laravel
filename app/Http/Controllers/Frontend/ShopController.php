<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ShopRequestNotification;
use App\Models\Admin;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShopController extends BaseController
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional shop photo
        ]);
        $shop = new Shop();
        $shop->name=$request->name;
        $shop->phone=$request->phone;
        $shop->email=$request->email;
        $file = $request->photo;
        if($file){
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(('storage'), $fileName);
            $shop->photo = $fileName;
        }
        $shop->save();
        $admin= Admin::first();
        Mail::to($admin->email)->send(new ShopRequestNotification($shop));
        toast("Shop request submitted successfully!","success");

        return redirect()->back();





    }
}

