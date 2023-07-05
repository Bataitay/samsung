<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $url = 'https://searchapi.samsung.com/v6/front/epp/v2/product/finder/global?type=08030000&siteCode=vn&start=1&num=12&sort=newest&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&companyCode=vn_doanhnghiepd&pfType=G&familyId=';
        $response = $this->getDataUrl($url);
        $data = $response['response'];
        $quantity = $data['resultData']['common']['totalRecord'];
        $urlAll = 'https://searchapi.samsung.com/v6/front/epp/v2/product/finder/global?type=08030000&siteCode=vn&start=1&num='.$quantity.'&sort=newest&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&companyCode=vn_doanhnghiepd&pfType=G&familyId=';
        $getUrl = $this->getDataUrl($urlAll);
        $dataGet = data_get(collect($getUrl), 'response.resultData.productList.*.modelList.*');
        $urlQuantity = 'https://shop.samsung.com/vn/multistore/vnepp/vn_doanhnghiepd/servicesv2/getSimpleProductsInfo?productCodes=';
        $data = [];

        foreach ($dataGet as $value) {
            $arr = [
                'Model' => $value['modelCode'],
                'description' => $value['displayName'],
                'color' => $value['fmyChipList'][0]['fmyChipLocalName'],
                'afterTaxPriceDisplay' => $value['afterTaxPriceDisplay'],
                'priceDisplay' => $value['priceDisplay'],
                'ton_kho' => $this->getDataUrl('https://shop.samsung.com/vn/multistore/vnepp/vn_doanhnghiepd/servicesv2/getSimpleProductsInfo?productCodes=' . $value['modelCode'])

            ];
            $arr['ton_kho'] = data_get($arr['ton_kho'], 'productDatas.*.stockLevel');
            array_push($data, $arr);
        }

        return response()->json($data);

//        return view('admin.fridge');

    }

    public function getDataUrl($url)
    {
        $response = Http::get($url);
        return  $response->json();
    }
}
