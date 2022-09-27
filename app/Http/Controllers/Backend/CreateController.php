<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Exception;
use App\Repositories\Order\OrderRepositoryInterface;

class CreateController extends Controller
{
    protected $orderRepo;

    public function __construct(OrderRepositoryInterface $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function handleCreateOrder(Request $request)
    {
        //$data = $request->all();
        // $order = new Order;
        // $order->user_id = 1;
        // $order->name_song = $data['name_song'];
        // $order->link_song = $data['link_song'];
        // $order->message = $data['message'];
        // $order->save();

        //$user = ['user_id' => 1];
        //Order::create(array_merge($user, $data)); // $user + $data

        try {
            $this->orderRepo->createOrder($request);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        $nameSong = $request->name_song;
        return redirect()->route('frontend.home.index')->with('nameSong', $nameSong);
    }
}
