<?php
namespace App\Repositories\Order;

use App\Repositories\BaseRepository;
use Exception;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function getModel()
    {
        return \App\Models\Order::class;
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
}
