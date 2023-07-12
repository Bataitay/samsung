<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sync-product';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = [];

        //Tủ lạnh
        $apiFridge = '08030000';
        $typeFridge = 1;
        $fridges = $this->listData($typeFridge);

        //Máy giặt
        $apiWashing = '08010000';
        $typeWashing = 2;
        $washings = $this->listData($typeWashing);

        //Điện thoai
        $apiPhone = '01000000';
        $typePhone = 3;
        $phones = $this->listData($typePhone);

        //Đồng hồ
        $apiWatch = '01030000';
        $typeWatch = 4;
        $watches = $this->listData($typeWatch);

        //Loa
        $apiSoundbar = '05000000';
        $typeSoundbar = 5;
        $soundbars = $this->listData($typeSoundbar);

         //Màn hình
         $apiSoundbar = '05000000';
         $typeSoundbar = 6;
         $soundbars = $this->listData($typeSoundbar);

          //đồ gia dụng
        $apiSoundbar = '05000000';
        $typeSoundbar = 7;
        $soundbars = $this->listData($typeSoundbar);

         //TV&AV
         $apiSoundbar = '05000000';
         $typeSoundbar = 8;
         $soundbars = $this->listData($typeSoundbar);
 
        array_merge($products, $fridges, $phones, $washings, $watches, soundbars, );
        
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
}
