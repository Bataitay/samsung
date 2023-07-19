<?php

namespace App\Console\Commands;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        $fridges = $this->listData($apiFridge);
        $this->insertMultipleData($fridges, $typeFridge);

        //Máy giặt
        $apiWashing = '08010000';
        $typeWashing = 2;
        $washings = $this->listData($apiWashing);
        $this->insertMultipleData($washings, $typeWashing);

        //Điện thoai
        $apiPhone = '01000000';
        $typePhone = 3;
        $phones = $this->listData($apiPhone);
        $this->insertMultipleData($phones, $typePhone);

        //Đồng hồ
        $apiWatch = '01030000';
        $typeWatch = 4;
        $watches = $this->listData($apiWatch);
        $this->insertMultipleData($watches, $typeWatch);

        //Loa
        $apiSoundbar = '05000000';
        $typeSoundbar = 5;
        $soundbars = $this->listData($apiSoundbar);
        $this->insertMultipleData($soundbars, $typeSoundbar);

         //Màn hình
         $apiScreen = '07000000';
         $typeScreen = 6;
         $screens = $this->listData($apiScreen);
        $this->insertMultipleData($screens, $typeScreen);

          //đồ gia dụng
        $apiHouseware = '08000000';
        $typeHouseware = 7;
        $housewares = $this->listData($apiHouseware);
        $this->insertMultipleData($housewares, $typeHouseware);

         //TV&AV
         $apiTvAv = '04000000';
         $typeTvAv = 8;
         $tvAvs = $this->listData($apiTvAv);
        $this->insertMultipleData($tvAvs, $typeTvAv);

    }

    public function listData($type)
    {
        $listData = $this->handdleData($type);
        $data = [];
        foreach ($listData as $value) {
            $arr = [
                'Model' => $value['modelCode'],
                'title' => $value['displayName'],
                'color' => $value['fmyChipList'][0]['fmyChipLocalName'] ?? '',
                'afterTaxPriceDisplay' => $value['afterTaxPriceDisplay'],
                'priceDisplay' => $value['priceDisplay'],
                'afterTaxPrice' => $value['afterTaxPrice'],
                'price' => $value['price'],
                'promotionPrice' => $value['promotionPrice'],
                'stock' => $value['ctaType'] != 'outOfStock' ? 1 : 0,
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

    public function insertMultipleData($dataArray, $type)
    {
        foreach ($dataArray as $data) {
            $this->insertData($data, $type);
        }
    }
    public function insertData($data, $type)
    {
        $product = Product::firstOrNew(['code' => $data['Model']]);

        if ($product->exists && $product->stock != $data['stock']) {
            $product->stock = $data['stock'];
            $product->save();
        } elseif (!$product->exists) {
            $product->type = $type;
            $product->title = $data['title'];
            $product->color_or_size = $data['color'];
            $product->price_display = $data['priceDisplay'];
            $product->promotion_price = $data['promotionPrice'];
            $product->price = $data['price'];
            $product->after_tax_price = $data['afterTaxPrice'];
            $product->after_tax_price_display = $data['afterTaxPriceDisplay'];
            $product->stock = $data['stock'];
            $product->save();
        }
        // Log the synchronization success message
        Log::info('Đồng bộ thành công '. Carbon::now());
        // Store the success message in session
        session()->flash('success', 'Đồng bộ thành công '. Carbon::now());
    }

}
