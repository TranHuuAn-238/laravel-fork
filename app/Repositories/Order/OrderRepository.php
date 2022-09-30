<?php
namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use Exception;
use App\Models\Order;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Order::class;
    }

    public function getOrder()
    {
        $ordersList = Order::orderBy('id', 'desc')->take(10)->get();
        
        return $ordersList;
    }

    public function createOrder($request)
    {
        try {
            $data = $request->all();
            $user = ['user_id' => 1];

            //$result = Order::create(array_merge($user, $data)); // $user + $data
            $result = $this->model->create(array_merge($user, $data));
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return $result;
    }

    public function editOrder($request, $id)
    {
        try {
            $data = $request->all();
            // $user = ['user_id' => 1];

            //$result = Order::create(array_merge($user, $data)); // $user + $data
            // $result = $this->model->update($id, (array_merge($user, $data)));
            $order = Order::find($id);
            $order->user_id = 1;
            $order->name_song = $data['name_song'];
            $order->link_song = $data['link_song'];
            $order->message = $data['message'];
            $order->save();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        $order->delete();
    }

    public function getOrdersByUser()
    {
        $userId = 1;
        
        $ordersListByUser = Order::orderBy('id', 'desc')->where('user_id', $userId)->paginate(10);

        return $ordersListByUser;
    }

    public function getOrderToView($id)
    {
        // $order = Order::find($id);
        $order = $this->model->find($id);
        
        return $order;
    }
}
