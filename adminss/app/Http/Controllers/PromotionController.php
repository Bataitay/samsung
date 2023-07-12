<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PromotionController extends Controller
{
    private $model;
    private \Illuminate\Http\RedirectResponse $listRoute;

    public function __construct()
    {
        $this->model = new Promotion();
        $this->listRoute = redirect()->route('user.index');
    }

    public function index(Request $request)
    {
        $perPage = 15;
        $search = $request->get('key_word');

        $promotions = Promotion::latest()
            ->paginate($perPage);

        return view('content.promotion.index', compact('promotions'));
    }

    public function show($id)
    {

    }

    public function create()
    {
        return view('content.promotion.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Promotion::create($input);

        return back()->with('message', 'Thêm thành công');
    }

    public function destroy($id)
    {
        try {
            $promotion = $this->model->destroy($id);
            return response()->json($promotion);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json($promotion);
        }
    }
}
