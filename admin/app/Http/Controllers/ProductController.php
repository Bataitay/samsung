<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $url = 'https://searchapi.samsung.com/v6/front/epp/v2/product/finder/global?type=08030000&siteCode=vn&start=1&num=12&sort=newest&onlyFilterInfoYN=N&keySummaryYN=Y&specHighlightYN=Y&companyCode=vn_doanhnghiepd&pfType=G&familyId=';
        $response = Http::get($url);
        $convertJson = $response->json();
        $data = $convertJson['response'];
//        $productList = $data['productList'];
        return response()->json($data);
    }
}
