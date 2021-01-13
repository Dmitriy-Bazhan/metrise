<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index() {
        $data['path'] = take_path();
        return view('site.pages.orders', $data);
    }

    public function saveOrders(Request $request){
        $data['path'] = take_path();
        $post = $request->post();

        $rules = [
            'name' => ['sometimes', 'nullable', 'regex:/^[A-Za-zА-Яа-я0-9\ ,*]+$/u'],
            'description' => ['sometimes', 'nullable', 'regex:/^[A-Za-zА-Яа-я0-9\ ,*]+$/u'],
            'phone' => ['required', 'nullable', 'regex:/^[0-9\ -,*]+$/u'],
        ];


        $check = Validator::make($post, $rules);

        if ($check->fails()) {
            return redirect()->back()->withErrors($check)->withInput($request->post());
        }

        $order = new Order;
        $order->name = $post['name'];
        $order->description = $post['description'];
        $order->phone = $post['phone'];
        $order->save();

        $id = $order->id;
        $imageName = [];

        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $key => $file) {
                $name = $file->getClientOriginalName();
                $imageName[] = $name;
                $file->move('storage/orders/order-' . $id, $name);
            }
        }

        if(count($imageName) > 0) {
            $json = json_encode($imageName);
            $order->images = $json;
            $order->save();
        }



        $data['success'] = true;
        return redirect(url_with_locale('/orders'))->with('success', $data['success']);
    }
}
