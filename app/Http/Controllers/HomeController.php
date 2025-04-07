<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;



use Illuminate\SUpport\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        $user=User::where('usertype','user')->get()->count();
        $product=Product::all()->count();
        $order=Order::all()->count();
        $delivered=Order::where('status','delivered')->get()->count();

        return view('admin.index',compact('user','product','order','delivered'));
    
    }
    public function login_home()
    {
        $product = Product::all();
    
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
        } else {
            $count = '';
        }
    
        // ✅ Correct query for top ordered product IDs
        $topProductIds = DB::table('orders')
            ->select('product_id', DB::raw('COUNT(*) as total_orders'))
            ->groupBy('product_id')
            ->orderByDesc('total_orders')
            ->limit(3)
            ->pluck('product_id');
    
        // ✅ Get product info
        $topProducts = Product::whereIn('id', $topProductIds)->get();
    
        return view('home.index', compact('product', 'count', 'topProducts'));
    }
    public function product_details($id){
        $data=Product::find($id);
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();
        }
        else{
            $count='';
        }
        return view('home.product_details',compact('data', 'count'));
    }
    public function add_cart($id)
    {
        $product_id=$id;
        $user=Auth::user();
        $user_id=$user->id;
        $data=new Cart;
        $data->user_id=$user_id;
        $data->product_id=$product_id;
        $data->save();
        toastr()->closeButton()->addSuccess('Added to the Cart Successfully');

        return redirect()->back();

    }
    public function mycart(){
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();
            $cart=Cart::where('user_id',$userid)->get();

        }
        else{
            $count='';
        }
        return view('home.mycart',compact('count', 'cart'));
    }
    public function delete_cart($id)
    {
        $data = Cart::find($id);
    
        if ($data) {
            $data->delete();
            toastr()->addSuccess('The product has been deleted successfully', [
                'closeButton' => true
            ]);
            
        } else {
            toastr()->addError('item deleted .', [
                'closeButton' => true
            ]);
            
        }
    
        return redirect()->back();
    }
    
    public function confirm_order(Request $request){
        $name=$request->name;

        $address=$request->address;
        $phone=$request->phone;
        $userid=Auth::user()->id;
        $cart=Cart::where('user_id',$userid)->get();

foreach($cart as $carts){
    
    $order=new Order;
    $order->name=$name;
    $order->rec_address=$address;
    $order->phone=$phone;
    $order->user_id=$userid;
    $order->product_id=$carts->product_id;
    $order->save();




}

$cart_remove=Cart::where('user_id',$userid)->get();
foreach($cart_remove as $remove){
    $data=Cart::find($remove->id);
    $data->delete();

}
toastr()->addSuccess('ordered successfully', [
    'closeButton' => true
]);
return redirect()->back();
    }

    public function myorders(){
        $user=Auth::user()->id;
        $count=Cart::where('user_id',$user)->get()->count();
        $order=Order::where('user_id',$user)->get();
        return view('home.order',compact('count','order'));
        
    }
    public function stripe($value = 100) {
        return view('home.stripe', compact('value'));
    }
    
    public function stripePost(Request $request,$value)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    

        Stripe\Charge::create ([

                "amount" => $value * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Test payment from itsolutionstuff.com.". $request->value, 

        ]);

      

        $name=Auth::user()->name;

        $phone=Auth::user()->phone;
        $address=Auth::user()->address;

        $userid=Auth::user()->id;
        $cart=Cart::where('user_id',$userid)->get();

foreach($cart as $carts){
    
    $order=new Order;
    $order->name=$name;
    $order->rec_address=$address;
    $order->phone=$phone;
    $order->user_id=$userid;
    $order->product_id=$carts->product_id;
    $order->payment_status="paid";
    $order->save();




}

$cart_remove=Cart::where('user_id',$userid)->get();
foreach($cart_remove as $remove){
    $data=Cart::find($remove->id);
    $data->delete();

}
toastr()->addSuccess('ordered successfully', [
    'closeButton' => true
]);
return redirect('mycart');

    }

}
