<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            return redirect('redirects');
        }
        else
        $data=Food::all();
        $data1=Foodchef::all();

        return view('home',compact('data','data1'));
    }

    public function redirects(){

        $data=Food::all();
        $data1=Foodchef::all();

        $usertype=Auth::user()->usertype;
         
        if($usertype=='1'){

            $total_customers=User::all()->count();
            $total_food=Food::all()->count();
            $total_order=Order::all()->count();
            $total_chef=Foodchef::all()->count();
            $total_reservations=Reservation::all()->count();
            return view('admin.adminhome',compact('total_customers','total_food','total_order','total_chef','total_reservations'));
        }
        else{
            $user_id=Auth::id();
            $count=Cart::where('user_id',$user_id)->count();
            return view('home',compact('data','data1','count'));
        }
    }

    public function addcart(Request $request,$id){

        if(Auth::id()){
            //add to cart

            $userid=Auth::id();
            $foodid=$id;
            $quantity=$request->quantity;
            $cart=new Cart();
            $cart->user_id=$userid;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;
            $cart->save();
            
            return redirect()->back();
        }
        else{
            return redirect('login');
        }
    }
    public function showcart(Request $request, $id){

        $count=Cart::where('user_id',$id)->count();
        if(Auth::id()==$id){

            $data1=Cart::select('*')->where('user_id','=',$id)->get();
            $data=Cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();

            return view('showcart',compact('count','data','data1'));
        }
        else{
            return redirect()->back();
        }
        
        
    }

    public function remove($id){

        $data=Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderconfirm(Request $request){
        
        foreach ($request->foodname as  $key => $foodname) {

            $data=new Order();

            $data->foodname=$foodname;

            $data->price=$request->price[$key];

            $data->quantity=$request->quantity[$key];

            $data->name=$request->name;

            $data->phone=$request->phone;

            $data->address=$request->address;

            $data->save();

            return redirect()->back();
        }
    }
}
