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
    public function home(){
        $product=Product::all();
        if(Auth::id()){
            $user=Auth::user();
            $userid=$user->id;
            $count=Cart::where('user_id',$userid)->count();
        }
        else{
            $count='';
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
        $product = Product::find($id);
    
        if ($product && $product->quantity > 0) {
            $user = Auth::user();
            $data = new Cart;
            $data->user_id = $user->id;
            $data->product_id = $product->id;
            $data->save();
            toastr()->closeButton()->addSuccess('Added to the Cart Successfully');
        } else {
            toastr()->closeButton()->addError('This product is out of stock');
        }
    
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
    
    public function confirm_order(Request $request)
{
    $name = $request->name;
    $address = $request->address;
    $phone = $request->phone;
    $userid = Auth::user()->id;

    $cartItems = Cart::where('user_id', $userid)->get();
    $grouped = $cartItems->groupBy('product_id');

    foreach ($grouped as $productId => $items) {
        $quantityRequested = $items->count();
        $product = Product::find($productId);

        if ($product) {
            $availableStock = $product->quantity;
            $quantityToOrder = min($quantityRequested, $availableStock);

            if ($quantityToOrder > 0) {
                // Place as many orders as stock allows
                for ($i = 0; $i < $quantityToOrder; $i++) {
                    $order = new Order;
                    $order->name = $name;
                    $order->rec_address = $address;
                    $order->phone = $phone;
                    $order->user_id = $userid;
                    $order->product_id = $productId;
                    $order->save();
                }

                // Update product stock
                $product->quantity -= $quantityToOrder;
                $product->save();

                if ($quantityToOrder < $quantityRequested) {
                    toastr()->addWarning("Only {$quantityToOrder} of '{$product->title}' available. Ordered partial quantity.", [
                        'closeButton' => true
                    ]);
                }
            } else {
                toastr()->addError("Product '{$product->title}' is out of stock.", [
                    'closeButton' => true
                ]);
            }
        }
    }

    // Delete all cart items
    Cart::where('user_id', $userid)->delete();

    toastr()->addSuccess('Order processed successfully', [
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
    
    public function stripePost(Request $request, $value)
{
    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    \Stripe\Charge::create([
        "amount" => $value * 100,
        "currency" => "usd",
        "source" => $request->stripeToken,
        "description" => "Test payment from itsolutionstuff.com." . $request->value,
    ]);

    $name = Auth::user()->name;
    $phone = Auth::user()->phone;
    $address = Auth::user()->address;
    $userid = Auth::user()->id;

    $cartItems = Cart::where('user_id', $userid)->get();

    // Count how many times each product is in the cart
    $grouped = $cartItems->groupBy('product_id');

    foreach ($grouped as $productId => $items) {
        $quantityRequested = $items->count(); // how many times this product is in the cart
        $product = Product::find($productId);

        if ($product && $product->quantity >= $quantityRequested) {
            // Enough stock – create that many orders
            for ($i = 0; $i < $quantityRequested; $i++) {
                $order = new Order;
                $order->name = $name;
                $order->rec_address = $address;
                $order->phone = $phone;
                $order->user_id = $userid;
                $order->product_id = $productId;
                $order->payment_status = "paid";
                $order->save();
            }

            // Reduce stock
            $product->quantity -= $quantityRequested;
            $product->save();
        } else {
            // Optional: notify user that some product was out of stock
            toastr()->addError("Product '{$product->title}' is out of stock or not enough in stock.", [
                'closeButton' => true
            ]);
        }
    }

    // Clear all cart items
    Cart::where('user_id', $userid)->delete();

    toastr()->addSuccess('Order placed successfully', ['closeButton' => true]);
    return redirect('mycart');
}


}