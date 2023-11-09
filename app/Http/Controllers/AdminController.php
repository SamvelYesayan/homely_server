<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Product;

class AdminController extends Controller
{
    public function admin_get_requests(){
        $requests = User::all()->where('role','=','waiting');
        return response()->json([$requests]);
    }

    public function admin_add_product(Request $request){

       $title = $request->input('title');
       $address = $request->input('address');
       $price_usd = $request->input('price_usd');
       $price_amd = $request->input('price_amd');
       $price_rub = $request->input('price_rub');
       $description = $request->input('description');
       $simple_words = $request->input('simple_words');
       $amenities = $request->input('amenities');
       $special_status = $request->input('special_status');
       $general_photo = $request->input('general_photo');
       $broker_first_name = $request->input('broker_first_name');
       $broker_last_name = $request->input('broker_last_name');
       $broker_photo = $request->input('broker_photo');
       $broker_email = $request->input('broker_email');
       $broker_phone = $request->input('broker_phone');
       $new_built = $request->input('new_built');
       $sale = $request->input('sale');
       $surface = $request->input('surface');
       $number_of_rooms = $request->input('number_of_rooms');
       $state = $request->input('state');
       $district = $request->input('district');
       $property_type = $request->input('property_type');
       $building_type  = $request->input('building_type');
       $status = $request->input('status');

        $product = new Product();
        $product->title = $title;
        $product->address = $address;
        $product->price_usd = $price_usd;
        $product->price_amd = $price_amd;
        $product->price_rub = $price_rub;
        $product->description = $description;
        $product->simple_words = $simple_words;
        $product->amenities = $amenities;
        $product->special_status = $special_status;
        $product->general_photo = $general_photo;
        $product->broker_first_name = $broker_first_name;
        $product->broker_last_name = $broker_last_name;
        $product->broker_photo = $broker_photo;
        $product->broker_email = $broker_email;
        $product->broker_phone = $broker_phone;
        $product->new_built = $new_built;
        $product->sale = $sale;
        $product->surface = $surface;
        $product->number_of_rooms = $number_of_rooms;
        $product->state = $state;
        $product->district = $district;
        $product->property_type = $property_type;
        $product->building_type = $building_type;
        $product->status = $status;
        $product->save();

        return response()->json([
           'success' => true
        ]);



    }
}
