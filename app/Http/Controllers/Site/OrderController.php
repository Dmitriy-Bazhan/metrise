<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function index()
    {
        $data = $this->data;
        $data['path'] = take_path();
        return view('site.pages.orders', $data);
    }

    public function saveOrders(Request $request)
    {
        $data = $this->data;
        $data['path'] = take_path();
        $post = $request->post();

        $rules = [
            'name' => ['sometimes', 'nullable', 'regex:/^[A-Za-zА-Яа-я0-9\ \p{P},*]+$/u'],
            'description' => ['sometimes', 'nullable', 'regex:/^[A-Za-zА-Яа-я0-9\ \p{P},*]+$/u'],
            'phone' => ['required', 'nullable', 'regex:/^[0-9\ -,*]+$/u'],
            'images.*' => 'sometimes|mimes:jpeg,bmp,png,jpg',
        ];


        $check = Validator::make($request->all(), $rules);

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

        if (count($imageName) > 0) {
            $json = json_encode($imageName);
            $order->images = $json;
            $order->save();
        }
        $message = '';

        $theme = 'Новый заказ';
        $message .= 'Имя : ' . $post['name'] . ' , тел:'. $post['phone'] . ' --> ' . $post['description'];
        $from = 'From: METRISE';

        if (isset($data['emails']) && count($data['emails']) > 0) {
            foreach ($data['emails'] as $email) {
                mail($email, $theme, $message, $from);
            }
        }


        return redirect(url_with_locale('/orders'))->with('success', true);
    }
}
