<!DOCTYPE html>

<html lang="vi-VN">

<head>

    <link rel="preconnect" href="https://images.samsung.com"/>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- SEO -->


    <title>Multi Store Homepage</title>
    <meta name="title" content="Multi Store Homepage"/>


    <link rel="canonical" href="https://www.samsung.com/vn/multistore/vn_doanhnghiepd/"/>


    <meta name="keywords" content=" Multi Store Homepage   "/>
    <meta name="description" content="Multi Store Homepage"/>
    <meta name="date" content="2023-06-19"/>
    <meta name="sitecode" content="vn"/>


    <meta name="robots" content="noindex"/>


    <meta name="twitter:card"/>
    <meta name="twitter:site"/>
    <meta name="twitter:creator"/>
    <meta name="twitter:url" content="https://www.samsung.com/vn/multistore/vn_doanhnghiepd/"/>
    <meta name="twitter:title"/>
    <meta name="twitter:description"/>
    <meta name="twitter:image"/>


    <meta property="og:url" content="https://www.samsung.com/vn/multistore/vn_doanhnghiepd/"/>
    <meta property="og:image"/>
    <meta property="og:type"/>
    <meta property="og:site_name" content="Samsung vn"/>
    <meta property="og:locale" content="vi-VN"/>
    <meta property="og:title"/>
    <meta property="og:description"/>
    <meta property="og:country-name" content="vn"/>

    <meta property="name" content="Samsung vn"/>
    <meta property="image"/>
    <meta property="url" content="https://www.samsung.com/vn/multistore/vn_doanhnghiepd/"/>
    <meta property="description" content="Multi Store Homepage"/>
    <meta property="keywords" content=" Multi Store Homepage   "/>


    <link rel="shortcut icon"
          href="/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/images/Favicon.png"/>
    <link rel="apple-touch-icon"
          href="/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/images/app_ico.png"
          sizes="144x144"/>

    @include('Fe.layouts.css')
</head>

<body>

<div id="wrap">
    <!-- 공통  hidden input 시작-->
    <!-- typeAheadDomain 기존 search/ -> 붙이던 부분 삭제함 필요시 search/를 붙여서 사용-->
    <input type="hidden" name="searchDomain" id="searchDomain" value="//searchapi.samsung.com/v6"/>
    <input type="hidden" name="esapiSearchDomain" id="esapiSearchDomain" value="https://esapi.samsung.com"/>
    <input type="hidden" name="scene7domain" id="scene7domain" value="//images.samsung.com/is/image/samsung/"/>
    <input type="hidden" name="reviewUseYN" id="reviewUseYN" value="Y"/>
    <input type="hidden" name="aplautYn" id="aplautYn" value="N"/>
    <input type="hidden" name="reevooUseYN" id="reevooUseYN" value="N"/>
    <input type="hidden" name="bvFlag" id="bvFlag" value="Y"/>
    <input type="hidden" name="bvRTLFlag" id="bvRTLFlag" value="N"/>
    <input type="hidden" name="multiLanguageYn" id="multiLanguageYn" value="N"/>
    <input type="hidden" name="localLang" id="localLang" value="vi-vn"/>
    <!-- 기존 gnbRunmodeInfo-> runmodeInfo 이름 변경-->
    <input type="hidden" name="runmodeInfo" id="runmodeInfo" value="live"/>
    <input type="hidden" name="apiStageInfo" id="apiStageInfo" value="front"/>
    <input type="hidden" name="tempTitle" id="tempTitle" value="page-home"/>
    <input type="hidden" name="siteCode" id="siteCode" value="vn"/>
    <input type="hidden" name="store_sitecode" id="store_sitecode" value="vn"/>
    <input type="hidden" name="language" id="language" value="vi_VN"/>
    <input type="hidden" name="serverType" id="serverType" value="prod"/>
    <!-- new-hybris -->
    <input type="hidden" name="gpvStoreDomain" id="gpvStoreDomain"/>
    <input type="hidden" name="storeWebDomain" id="storeWebDomain" value="https://shop.samsung.com/vn/multistore"/>
    <input type="hidden" name="shopIntegrationFlag" id="shopIntegrationFlag" value="Hybris"/>
    <input type="hidden" name="newHyvStoreDomain" id="newHyvStoreDomain"
           value="https://p1-sms-api-cdn.shop.samsung.com"/>
    <!-- business page 여부 -->
    <input type="hidden" name="b2bFlag" id="b2bFlag" value="N"/>
    <input type="hidden" name="pageUrl" id="pageUrl"/>
    <input type="hidden" name="pathString" id="pathString"/>
    <input type="hidden" name="wishlistYn" id="wishlistYn"/>
    <input type="hidden" name="shopParmLang" id="shopParmLang"/>
    <!-- 공통  hidden input 끝-->


    <section class="progress cm-loader" style="display:none;">
        <div class="progress__wrapper">
            <div class="progress__circle-1"></div>
            <div class="progress__circle-2"></div>
            <div class="progress__circle-3"></div>
            <div class="progress__circle-4"></div>
        </div>
    </section>

    @include('Fe.layouts.header')



    @yield('content')


   @include('Fe.layouts.footer')

</div>
</body>
@include('Fe.layouts.javascript')
</html>
