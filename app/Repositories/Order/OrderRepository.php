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

    public function getOrdersByUser()
    {
        $userId = 1;
        
        try {
            $ordersListByUser = Order::orderBy('id', 'desc')->where('user_id', $userId)->paginate(10);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return $ordersListByUser;
    }

    public function getOrderToView($id)
    {
        try {
            $order = Order::find($id);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        return $order;
    }
}
