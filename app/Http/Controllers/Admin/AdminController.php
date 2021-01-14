<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {

        $orders = Order::all();

        $data['orders'] = $orders;
        return view('admin.orders', $data);
    }

    public function removeOrder(Request $request)
    {

        $id = $request->id;
        Order::where('id', $id)->delete();

        $dir = 'storage/orders/order-' . $id;
        if (is_dir($dir)) {
            $files = array_diff(scandir($dir), ['.', '..']);
            if (count($files) > 1) {
                foreach ($files as $file) {
                    (is_dir($dir . '/' . $file)) ? delDir($dir . '/' . $file) : unlink($dir . '/' . $file);
                }
                rmdir($dir);
            }

        }


        return response()->json([], 200);
    }
}
