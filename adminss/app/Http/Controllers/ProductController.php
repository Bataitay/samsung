<?php

namespace App\Http\Controllers;

use App\Exports\FridgeExport;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends BaseController
{
    public function fridge(Request $request)
    {
        $type = 1;
        $data = $this->listData($type);
        return view('content.fridge.index', compact('data'));

    }

    public function washing(Request $request)
    {
        $type = 2;
        $data = $this->listData($type);
        return view('content.washing.index', compact('data'));

    }

    public function airPurifier(Request $request)
    {
        $type = '08040000';
        $data = $this->listData($type);
        return view('admin.air_purifier', compact('data'));

    }

    public function airConditioning(Request $request)
    {
        $type = '08050000';
        $data = $this->listData($type);
        return view('admin.air_conditioning', compact('data'));

    }

    public function vacuumCleaner(Request $request)
    {
        $type = '08070000';
        $data = $this->listData($type);
        return view('admin.vacuum_cleaner', compact('data'));

    }

    public function houseware(Request $request)
    {
        $type = 7;
        $data = $this->listData($type);
        return view('content.houseware.index', compact('data'));

    }

    public function screen(Request $request)
    {
        $type = 6;
        $data = $this->listData($type);
        return view('content.screen.index', compact('data'));

    }

    public function phone(Request $request)
    {
        $type = 3;
        $data = $this->listData($type);
        return view('content.phone.index', compact('data'));

    }

    public function watch(Request $request)
    {
        $type = 4;
        $data = $this->listData($type);
        return view('content.watch.index', compact('data'));

    }

    public function tvAv(Request $request)
    {
        $type = 8;
        $data = $this->listData($type);
        return view('content.tv_av.index', compact('data'));

    }

    public function soundbar(Request $request)
        {
            $type = 5;
            $data = $this->listData($type);
            return view('content.soundbar.index', compact('data'));

        }

    public function exportFridge()
    {
        $type = 1;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'Tu-lanh.xlsx');
    }
    public function exportHouseware()
    {
        $type = 7;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'gia-dung.xlsx');
    }
    public function exportWashing()
    {
        $type = 2;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'may-giat.xlsx');
    }
    public function exportTvAv()
    {
        $type = 8;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'Tv&av.xlsx');
    }
    public function exportPhone()
    {
        $type = 3;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'phone-smartwatch.xlsx');
    }

    public function exportWatch()
    {
        $type = 4;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'smartwatch.xlsx');
    }

    public function exportScreen()
    {
        $type = 6;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'man-hinh.xlsx');
    }

    public function exportSoundbar()
    {
        $type = 5;
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'loa.xlsx');
    }
}
