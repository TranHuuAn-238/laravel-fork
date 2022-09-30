<?php
namespace App\Repositories\Order;

use App\Repositories\RepositoryInterface;

interface OrderRepositoryInterface extends RepositoryInterface
{
    public function getOrder();
    public function createOrder($request);
    public function editOrder($request, $id);
    public function deleteOrder($id);
    public function getOrdersByUser();
    public function getOrderToView($id);
}
