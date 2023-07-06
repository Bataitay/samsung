<?php

namespace App\Http\Controllers;

use App\Exports\FridgeExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function fridge(Request $request)
    {
        $type = '08030000';
        $data = $this->listData($type);

        return view('admin.fridge', compact('data'));

    }

    public function washing(Request $request)
    {
        $type = '08010000';
        $data = $this->listData($type);
        return view('admin.washing', compact('data'));

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
        $type = '08000000';
        $data = $this->listData($type);
        return view('admin.houseware', compact('data'));

    }
    public function screen(Request $request)
    {
        $type = '07000000';
        $data = $this->listData($type);
        return view('admin.screen.index', compact('data'));

    }
    public function phone(Request $request)
    {
        $type = '01000000';
        $data = $this->listData($type);
        return view('admin.phone.index', compact('data'));

    }
    public function tvAv(Request $request)
    {
        $type = '04000000';
        $data = $this->listData($type);
        return view('admin.tv_av.index', compact('data'));

    }

    public function listData($type)
    {
        $listData = $this->handdleData($type);
        $data = [];
        foreach ($listData as $value) {
            $arr = [
                'Model' => $value['modelCode'],
                'description' => $value['displayName'],
                'color' => $value['fmyChipList'][0]['fmyChipLocalName'] ?? '',
                'afterTaxPriceDisplay' => $value['afterTaxPriceDisplay'],
                'priceDisplay' => $value['priceDisplay'],
                'stock' => $value['ctaType'] != 'outOfStock' ? 'Còn hàng' : 'Hết hàng'
//                'ton_kho' => $this->getDataUrl('https://shop.samsung.com/vn/multistore/vnepp/vn_doanhnghiepd/servicesv2/getSimpleProductsInfo?productCodes=' . $value['modelCode'])

            ];
//            $arr['ton_kho'] = data_get($arr['ton_kho'], 'productDatas.*.stockLevel');
            array_push($data, $arr);
        }
        return $data;
    }

    public function handdleData($type)
    {
        $url = 'https://searchapi.samsung.com/v6/front/epp/v2/product/finder/global?type='.$type.'&siteCode=vn&start=1&num=12&sort=newest&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&companyCode=vn_doanhnghiepd&pfType=G&familyId=';
        $response = $this->getDataUrl($url);
        $data = $response['response'];
        $quantity = $data['resultData']['common']['totalRecord'];
        $urlAll = 'https://searchapi.samsung.com/v6/front/epp/v2/product/finder/global?type='.$type.'&siteCode=vn&start=1&num='.$quantity.'&sort=newest&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&companyCode=vn_doanhnghiepd&pfType=G&familyId=';
        $getUrl = $this->getDataUrl($urlAll);
        return data_get(collect($getUrl), 'response.resultData.productList.*.modelList.*');
    }
    public function getDataUrl($url)
    {
        $response = Http::get($url);
        return  $response->json();
    }

    public function exportFridge()
    {
        $type = '08030000';
        $data = $this->listData($type);
        return Excel::download(new FridgeExport($data), 'Tu-lanh.xlsx');
    }
}
