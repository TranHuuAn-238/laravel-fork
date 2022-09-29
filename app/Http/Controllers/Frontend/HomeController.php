<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Exception;
use App\Repositories\Order\OrderRepositoryInterface;

class HomeController extends Controller
{
    protected $orderRepo;

    public function __construct(OrderRepositoryInterface $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function index()
    {
        $ordersList = $this->orderRepo->getOrder();
        return view('frontend.home.index', compact('ordersList'));
    }

    public function listOrdered()
    {
        $ordersListByUser = $this->orderRepo->getOrdersByUser();
        return view('frontend.manage.list-ordered', compact('ordersListByUser'));
    }

    public function detailOrdered($id)
    {
        $order = $this->orderRepo->getOrderToView($id);
        return view('frontend.manage.detail-ordered', compact('order'));
    }
}
