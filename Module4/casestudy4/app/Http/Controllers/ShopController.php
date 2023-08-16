<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;



class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function load_more_products(){

    // }

    public function index(Request $request)
    {
        $all_products = Product::paginate(4);
        if ($request->ajax()) {
            $view = view('shops.includes.data', compact('all_products'))->render();
            return response()->json(['html' => $view]);
        }
        return view('shops.home', compact('all_products'));
    }

    public function index2(Request $request)
    {
        $all_products = Product::paginate(4);
        if ($request->ajax()) {
            $view = view('shops.includes.data', compact('all_products'))->render();
            return response()->json(['html' => $view]);
        }
        return view('shops.home', compact('all_products'));
    }

    public function login()
    {
        return view('shops.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('customers')->attempt($credentials, $request->get('remember'))) {
            $customerName = Auth::guard('customers')->user()->name; // Lấy tên từ bảng customers
            alert()->success('Welcome, ' . $customerName . '!'); // Thêm tên vào thông báo
            return redirect('/home')->with('success', 'Login successful Wizym');
        }
        return back()->with('error', 'Email or Password is incorrect');
    }

    public function logout()
    {
        $user =  Auth::guard('customers')->user();
        // Đăng xuất phiên làm việc
        Auth::guard('customers')->logout();

        return redirect()->route('home.index');
    }

    public function register()
    {
        return view('shops.register');
    }
    public function registerPost(Request $request)
    {
        $customers = new Customer();

        $customers->name = $request->name;
        $customers->email = $request->email;
        $customers->password = Hash::make($request->password);
        $customers->address = $request->address;
        $customers->phone = $request->phone;

        $customers->save();
        return back()->with('Success', 'Register Successfully');
    }


    public function products_index()
    {
        return view('shops.products');
    }


    public function add_to_Cart($id)
    {
        $products = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] =
                [
                    'name' => $products->name,
                    'quantity' => 1,
                    'price' => $products->price,
                    'image' => $products->image,
                    'max' => $products->quantity,
                ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'products has been added to cart');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {

            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            alert()->success('Update Order Successfully!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            alert()->success('Delete item Success!');
        }
    }


    public function products_cart()
    {
        return view('shops.cart');
    }

    public function Order(Request $request)
    {
        $id = Auth::guard('customers')->user()->id;
        $customer = Customer::find($id);
        $customer->address = $request->address;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if (isset($request->note)) {
            $customer->note = $request->note;
        }
        $customer->save();

        $order = new Order();
        $order->customer_id = Auth::guard('customers')->user()->id;
        $order->order_date = date('Y-m-d H:i:s');
        $order->delivery_date = date('Y-m-d H:i:s');
        $order->total_amount = 0;

        $order->save();
        $carts = session()->get('cart',[]);
        foreach ($carts as $key => $cart) {
            $orderItem = new OrderDetail();
            $orderItem->order_id =  $order->id;
            $orderItem->product_id = $key;
            $orderItem->quantity = $cart['quantity'];
            $orderItem->total = $cart['quantity']*$cart['price'];
            $order->total_amount += $orderItem->total;
            $orderItem->save();
            
            // Update the product quantity in the database
            $product = Product::find($orderItem->product_id);
            $product->quantity -= $orderItem->quantity;

            if ($product->quantity == 0) {
                $product->status = 0;
            }
            $product->save();
        }
        $order->save();
        // Clear the cart session
        session()->forget('cart');

        alert()->success('Order Success!');

        return redirect()->route('home.index');
    }
    
}
