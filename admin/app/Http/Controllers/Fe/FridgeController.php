<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FridgeController extends BaseController
{
    private $baseController;

    public function __construct(BaseController $baseController)
    {
        $this->baseController = $baseController;
    }
    public function index()
    {
        $type = '08030000';
        $data = $this->baseController->listData($type);

        return view('Fe.products.fridge.index');
    }
}
