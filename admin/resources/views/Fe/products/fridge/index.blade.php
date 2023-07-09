@extends('Fe.main')
@section('content')
    <div id="content" role="main">

        <input type="hidden" name="pfShopIntegrationFlag" id="pfShopIntegrationFlag" value="Hybris">
        <input type="hidden" name="pfDefaultParameter" id="pfDefaultParameter">
        <input type="hidden" name="pfDefaultSortby" id="pfDefaultSortby" value="NEW">


        <input type="hidden" name="pfCartUrl" id="pfCartUrl" value="/vn/cart">
        <input type="hidden" name="pfPriceDisplayYn" id="pfPriceDisplayYn" value="Y">
        <input type="hidden" name="pfCategoryTypeCode" id="pfCategoryTypeCode" value="08030000">
        <input type="hidden" name="pfCategoryGroupCode" id="pfCategoryGroupCode" value="08000000">
        <input type="hidden" name="typeCodeForGNB" id="typeCodeForGNB" value="08030000">
        <input type="hidden" name="groupCodeForGNB" id="groupCodeForGNB" value="08000000">

        <input type="hidden" name="pfPriceCurrency" id="pfPriceCurrency" value="VND">
        <input type="hidden" name="pfTwoCtaBtnYn" id="pfTwoCtaBtnYn">
        <input type="hidden" name="pfWtbCtaBtnYn" id="pfWtbCtaBtnYn" value="N">
        <input type="hidden" name="pfOfferCheckYn" id="pfOfferCheckYn">
        <input type="hidden" name="pfEmiUrl" id="pfEmiUrl">
        <input type="hidden" name="pfFinancingUrl" id="pfFinancingUrl">
        <input type="hidden" name="pfHybrisApiJson" id="pfHybrisApiJson" value="Y">
        <input type="hidden" name="pfWishlistUrl" id="pfWishlistUrl">
        <input type="hidden" name="pfPageTrack" id="pfPageTrack" value="epp product finder">
        <input type="hidden" name="pfCalculateFinancing" id="pfCalculateFinancing" value="N">
        <input type="hidden" name="pfPdurlAnchorCheckYn" id="pfPdurlAnchorCheckYn" value="N">
        <input type="hidden" name="pfType" id="pfType" value="G">
        <input type="hidden" name="pfOfferId" id="pfOfferId">
        <input type="hidden" name="pfTermsAndConditions" id="pfTermsAndConditions">
        <input type="hidden" name="pfEppOmniPricingUseYn" id="pfEppOmniPricingUseYn" value="N">


        <div class="cm-g-notice">

        </div>
        <div class="EPP-NV14_VLN-1 nv-g-visual-lnb">

            <input type="hidden" class="nv14_cqTemplate" value="/conf/epp/settings/wcm/templates/page-pf">

            <div id="component-id" class="nv14-visual-lnb" style="height: 112px;">
                <div class="nv14-visual-lnb__container sticky">
                    <div class="nv14-visual-lnb__headline-menu-wrap">

                        <p class="nv14-visual-lnb__headline">

                            Gia Dụng

                        </p>

                        <div class="nv14-visual-lnb__menu-wrap">
                            <button class="nv14-visual-lnb__menu-wrap--previous">
                                <svg class="icon" focusable="false" aria-hidden="true">
                                    <use xlink:href="#previous-regular" href="#previous-regular"></use>
                                </svg>
                            </button>
                            <ul class="nv14-visual-lnb__menu-list" role="list">

                                <li class="nv14-visual-lnb__menu" role="listitem">

                                    <a class="nv14-visual-lnb__menu-link"
                                        href="/vn/multistore/vn_doanhnghiepd/finder.refrigerators.html"
                                        an-tr="nv14_visual-lnb" an-ca="navigation" an-ac="secondary navi"
                                        an-la="secondary navi:refrigerators">
                                        Tủ Lạnh
                                    </a>

                                </li>

                                <li class="nv14-visual-lnb__menu" role="listitem">

                                    <a class="nv14-visual-lnb__menu-link"
                                        href="/vn/multistore/vn_doanhnghiepd/finder.washers-and-dryers.html"
                                        an-tr="nv14_visual-lnb" an-ca="navigation" an-ac="secondary navi"
                                        an-la="secondary navi:laundry">
                                        Máy Giặt
                                    </a>

                                </li>

                                <li class="nv14-visual-lnb__menu" role="listitem">

                                    <a class="nv14-visual-lnb__menu-link"
                                        href="/vn/multistore/vn_doanhnghiepd/finder.vacuum-cleaners.html"
                                        an-tr="nv14_visual-lnb" an-ca="navigation" an-ac="secondary navi"
                                        an-la="secondary navi:vacuum">
                                        Máy Hút Bụi
                                    </a>

                                </li>

                                <li class="nv14-visual-lnb__menu" role="listitem">

                                    <a class="nv14-visual-lnb__menu-link"
                                        href="/vn/multistore/vn_doanhnghiepd/finder.microwave-ovens.html"
                                        an-tr="nv14_visual-lnb" an-ca="navigation" an-ac="secondary navi"
                                        an-la="secondary navi:cooking">
                                        Dụng Cụ Nhà Bếp
                                    </a>

                                </li>

                                <li class="nv14-visual-lnb__menu" role="listitem">

                                    <a class="nv14-visual-lnb__menu-link"
                                        href="/vn/multistore/vn_doanhnghiepd/finder.air-conditioners.html"
                                        an-tr="nv14_visual-lnb" an-ca="navigation" an-ac="secondary navi"
                                        an-la="secondary navi:air solutions">
                                        Làm Sạch Không Khí
                                    </a>

                                </li>

                            </ul>
                            <button class="nv14-visual-lnb__menu-wrap--next">
                                <svg class="icon" focusable="false" aria-hidden="true">
                                    <use xlink:href="#next-regular" href="#next-regular"></use>
                                </svg>
                            </button>
                        </div>

                    </div>

                    <div class="nv14-visual-lnb__featured-item-wrap scroll-down"
                        style="height: 56px; opacity: 1;background: #ffff;">

                    </div>

                </div>
            </div>
        </div>
        <div class="EPP-HD02_HCR-2 pd-g-header-carousel">

            <section class="header-carousel header-carousel--small indicator-container" style="display: block;"
                data-filter-id="" data-header="">
                <div class="header-carousel__container swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight text-color--white"
                    data-carousel-data="{
			&quot;desktopIndicatorUse&quot;: true,
			&quot;mobileIndicatorUse&quot;: true,
			&quot;desktopArrowUse&quot;: true,
			&quot;mobileArrowUse&quot;: true,
			&quot;autoRolling&quot;: true,
			&quot;infiniteRolling&quot;: true}">
                    <button tabindex="-1" type="button" class="swiper-autoplay-stop-btn"><span class="hidden">Stop
                            automatic slide show</span></button>
                    <div class="header-carousel__wrapper swiper-wrapper"
                        style="transform: translate3d(-1440px, 0px, 0px); transition-duration: 0ms; height: 630px;">
                        <div class="header-carousel__slide bg-white swiper-slide indicator-page swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"
                            data-swiper-slide-index="1" style="width: 1440px;" aria-hidden="true">
                            <div class="header-carousel__slide-inner">
                                <div
                                    class="header-carousel__text-wrap header-carousel__text-wrap--black header-carousel__text-wrap--desktop-top-right header-carousel__text-wrap--mobile-top-center">
                                    <div class="header-carousel__text-inner">

                                        <h2 class="header-carousel__headline header-carousel__headline--medium">2 Dàn lạnh
                                            độc lập<br> Twin Cooling Plus™</h2>

                                        <p class="header-carousel__description header-carousel__description--large">Giữ
                                            thực phẩm tươi lâu gấp 2 lần<br></p>
                                        <div class="header-carousel__cta-wrap">


                                            <a class="cta cta--contained cta--white "
                                                href="/vn/multistore/vn_doanhnghiepd/finder.refrigerators.html?east-drawer-on-tmf"
                                                an-tr="hd02_header carousel (kv)-epp product finder-cta-button"
                                                an-ca="content click" an-ac="kv"
                                                an-la="2 dàn lạnh độc lập<br> twin cooling plus™:buy now" tabindex="-1">
                                                Mua ngay

                                            </a>



                                        </div>
                                    </div>
                                </div>
                                <div class="header-carousel__background-media indicator-background">


                                    <div class="image image--dyn-height image--main-loaded">



                                        <img class="image__preview responsive-img image--loaded image--hide"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$144_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454717?$LazyLoad_Home_PNG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$144_N_IMG$"
                                            aria-hidden="true">
                                        <img class="image__main responsive-img image--loaded"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$1440_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454717?$FB_TYPE_B_IMG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$1440_N_IMG$"
                                            style="">

                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="header-carousel__slide bg-white swiper-slide indicator-page swiper-slide-active"
                            data-swiper-slide-index="0" style="width: 1440px;">
                            <div class="header-carousel__slide-inner">
                                <div
                                    class="header-carousel__text-wrap header-carousel__text-wrap--white header-carousel__text-wrap--desktop-top-center header-carousel__text-wrap--mobile-top-center">
                                    <div class="header-carousel__text-inner">

                                        <h2 class="header-carousel__headline header-carousel__headline--medium">Tủ lạnh
                                            Bespoke</h2>

                                        <p class="header-carousel__description header-carousel__description--large">Linh
                                            hoạt thiết kế, cá tính riêng bạn</p>
                                        <div class="header-carousel__cta-wrap">


                                            <a class="cta cta--contained cta--white "
                                                href="/vn/multistore/vn_doanhnghiepd/finder.refrigerators.html?bespoke"
                                                an-tr="hd02_header carousel (kv)-epp product finder-cta-button"
                                                an-ca="content click" an-ac="kv"
                                                an-la="bespoke refrigerators:buy now">
                                                Mua ngay

                                            </a>



                                        </div>
                                    </div>
                                </div>
                                <div class="header-carousel__background-media indicator-background">


                                    <div class="image image--dyn-height image--main-loaded">



                                        <img class="image__preview responsive-img image--loaded image--hide"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$144_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373381?$LazyLoad_Home_PNG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$144_N_IMG$"
                                            aria-hidden="true">
                                        <img class="image__main responsive-img image--loaded"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$1440_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373381?$FB_TYPE_B_IMG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$1440_N_IMG$"
                                            style="">

                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="header-carousel__slide bg-white swiper-slide indicator-page swiper-slide-next swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" style="width: 1440px;" aria-hidden="true">
                            <div class="header-carousel__slide-inner">
                                <div
                                    class="header-carousel__text-wrap header-carousel__text-wrap--black header-carousel__text-wrap--desktop-top-right header-carousel__text-wrap--mobile-top-center">
                                    <div class="header-carousel__text-inner">

                                        <h2 class="header-carousel__headline header-carousel__headline--medium">2 Dàn lạnh
                                            độc lập<br> Twin Cooling Plus™</h2>

                                        <p class="header-carousel__description header-carousel__description--large">Giữ
                                            thực phẩm tươi lâu gấp 2 lần<br></p>
                                        <div class="header-carousel__cta-wrap">


                                            <a class="cta cta--contained cta--white "
                                                href="/vn/multistore/vn_doanhnghiepd/finder.refrigerators.html?east-drawer-on-tmf"
                                                an-tr="hd02_header carousel (kv)-epp product finder-cta-button"
                                                an-ca="content click" an-ac="kv"
                                                an-la="2 dàn lạnh độc lập<br> twin cooling plus™:buy now" tabindex="-1">
                                                Mua ngay

                                            </a>



                                        </div>
                                    </div>
                                </div>
                                <div class="header-carousel__background-media indicator-background">


                                    <div class="image image--dyn-height image--main-loaded">



                                        <img class="image__preview responsive-img image--loaded image--hide"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$144_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454717?$LazyLoad_Home_PNG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$144_N_IMG$"
                                            aria-hidden="true">
                                        <img class="image__main responsive-img image--loaded"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$1440_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454717?$FB_TYPE_B_IMG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533454716?$1440_N_IMG$"
                                            style="">

                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="header-carousel__slide bg-white swiper-slide indicator-page swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="0" style="width: 1440px;" aria-hidden="true">
                            <div class="header-carousel__slide-inner">
                                <div
                                    class="header-carousel__text-wrap header-carousel__text-wrap--white header-carousel__text-wrap--desktop-top-center header-carousel__text-wrap--mobile-top-center">
                                    <div class="header-carousel__text-inner">

                                        <h2 class="header-carousel__headline header-carousel__headline--medium">Tủ lạnh
                                            Bespoke</h2>

                                        <p class="header-carousel__description header-carousel__description--large">Linh
                                            hoạt thiết kế, cá tính riêng bạn</p>
                                        <div class="header-carousel__cta-wrap">


                                            <a class="cta cta--contained cta--white "
                                                href="/vn/multistore/vn_doanhnghiepd/finder.refrigerators.html?bespoke"
                                                an-tr="hd02_header carousel (kv)-epp product finder-cta-button"
                                                an-ca="content click" an-ac="kv"
                                                an-la="bespoke refrigerators:buy now" tabindex="-1">
                                                Mua ngay

                                            </a>



                                        </div>
                                    </div>
                                </div>
                                <div class="header-carousel__background-media indicator-background">


                                    <div class="image image--dyn-height image--main-loaded">



                                        <img class="image__preview responsive-img image--loaded image--hide"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$144_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373381?$LazyLoad_Home_PNG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$144_N_IMG$"
                                            aria-hidden="true">
                                        <img class="image__main responsive-img image--loaded"
                                            data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$1440_N_IMG$"
                                            data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373381?$FB_TYPE_B_IMG$"
                                            data-desktop-alt="" data-mobile-alt="" alt=""
                                            src="//images.samsung.com/is/image/samsung/p6pim/vn/epp/vn-eppcms-hd02image-533373379?$1440_N_IMG$"
                                            style="">

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="arrow-indicator-wrap" style="display: block;">
                        <button class="arrow-indicator arrow-indicator--contained arrow-indicator--prev"
                            an-tr="hd02_header carousel-epp product finder-image-arrow" an-ca="indication"
                            an-ac="carousel" an-la="carousel:arrow:left" tabindex="0" role="button"
                            aria-label="Previous slide" style="display: block;">
                            <span class="hidden">Trước</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                focusable="false">
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <circle cx="20" cy="20" r="20"></circle>
                                        <g fill-rule="nonzero">
                                            <path
                                                d="M15.179 3.173L16.043 4.077 7.765 12 16.043 19.923 15.179 20.827 5.957 12z"
                                                transform="translate(8 8)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                        <button class="arrow-indicator arrow-indicator--contained arrow-indicator--next"
                            an-tr="hd02_header carousel-epp product finder-image-arrow" an-ca="indication"
                            an-ac="carousel" an-la="carousel:arrow:right" tabindex="0" role="button"
                            aria-label="Next slide" style="display: block;">
                            <span class="hidden">Tiếp theo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                focusable="false">
                                <g fill="none" fill-rule="evenodd">
                                    <g>
                                        <circle cx="20" cy="20" r="20"></circle>
                                        <g fill-rule="nonzero">
                                            <path
                                                d="M7.957 4.077L8.821 3.173 18.043 12 8.821 20.827 7.957 19.923 16.235 12z"
                                                transform="translate(8 8)"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="indicator dot-indicator"
                        data-indicator-data="{
				&quot;type&quot;: &quot;dot-indicator&quot;,
				&quot;autoRolling&quot;: true,
				&quot;infiniteRolling&quot;: true}"
                        style="display: block;">
                        <div class="indicator-wrap">
                            <button class="indicator__controls"
                                an-tr="hd02_header carousel-epp product finder-image-Index" an-ca="indication"
                                an-ac="carousel" an-la="carousel:index:stop">
                                <svg class="play" focusable="false">
                                    <use xlink:href="#play-bold" href="#play-bold"></use>
                                </svg>
                                <svg class="pause" focusable="false">
                                    <use xlink:href="#pause-bold" href="#pause-bold"></use>
                                </svg>
                                <span class="hidden">stop</span>
                            </button>
                            <div class="indicator__list-wrap">
                                <div class="indicator__list" role="tablist">

                                    <button class="indicator__item indicator__item--active" role="tab"
                                        data-indicator-delay="5000"
                                        an-tr="hd02_header carousel-epp product finder-image-Index" an-ca="indication"
                                        an-ac="carousel" an-la="carousel:index:1" aria-selected="true">
                                        <span class="indicator__dot-wrap">
                                            <span class="indicator__dot"><span class="indicator__dot-inner"></span></span>
                                            <span class="hidden">Tủ lạnh Bespoke</span>
                                        </span>
                                    </button>

                                    <button class="indicator__item" role="tab" data-indicator-delay="5000"
                                        an-tr="hd02_header carousel-epp product finder-image-Index" an-ca="indication"
                                        an-ac="carousel" an-la="carousel:index:2" aria-selected="false">
                                        <span class="indicator__dot-wrap">
                                            <span class="indicator__dot"><span class="indicator__dot-inner"></span></span>
                                            <span class="hidden">2 Dàn lạnh độc lập&lt;br&gt; Twin Cooling Plus™</span>
                                        </span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </section>











        </div>
        <div class="EPP-PD03_PFN-3 pd-g-product-finder-v2">

            <section
                class="pd03-product-finder pd03-product-finder--horizontal margin-top-- margin-bottom-- js-pfv2-finder pd03-product-finder__sticky"
                data-usefilter="false" data-usefiltertype="true" data-usecomparebutton="true"
                data-usehighlightcard="false" data-desktopcardlayout="horizontal" data-productnametext="default"
                data-desktopbuttonposition="horizontal" data-mobilebuttonposition="horizontal"
                data-productgroupcode="08000000">


                <div class="pd03-product-finder__wrap">
                    <div class="pd03-product-finder__header">






                        <div class="us-epp-discount-keep">

                            <div class="us-epp-discount-dummy"></div>
                        </div>


                        <div class="pd03-product-finder__filters-bar" style="top: 112px;">
                            <div class="pd03-product-finder__filters-bar-wrap">
                                <div class="pd03-product-finder__filters-bar-filters">
                                    <button href="javascript:void(0)"
                                        class="pd03-product-finder__filters-bar-filters-cta is-opened" role="button"
                                        aria-expanded="true"
                                        an-tr="pd03_product finder:filter-epp product finder-action-filter"
                                        an-ca="filter and sort" an-ac="filter" an-la="filter:close" disabled="true">
                                        <svg class="icon icon--open" focusable="false">
                                            <use xlink:href="#filter-select-bold" href="#filter-select-bold"></use>
                                        </svg>
                                        <svg class="icon icon--closed" focusable="false">
                                            <use xlink:href="#filter-bold" href="#filter-bold"></use>
                                        </svg>
                                        Bộ lọc
                                    </button>
                                    <div class="pd03-product-finder__filters-bar-filters-result">
                                        <span
                                            class="pd03-product-finder__filters-bar-filters-result-desktop js-pfv2-result-total-count"
                                            aria-live="polite">30 Kết quả</span>
                                        <span class="pd03-product-finder__filters-bar-filters-reset cta--desktop-disabled">
                                            <a class="cta cta--underline cta--black js-pfv2-reset-filters-cta"
                                                href="javascript:;" title="Đặt lại Bộ lọc"
                                                an-tr="pd03_product finder:filter-epp product finder-action-filter"
                                                an-ca="filter and sort" an-ac="filter" an-la="filter:reset">
                                                Đặt lại Bộ lọc </a>
                                        </span>
                                    </div>
                                </div>




                                <div class="pd03-product-finder__filters-bar-select">
                                    <div class="menu js-pfv2-sortby-wrap selected">
                                        <select class="menu__select" tabindex="-1" data-default-messageop="Mới Nhất"
                                            data-default-value="Newest" aria-hidden="true">
                                            <option value="newest"
                                                an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                an-ca="filter and sort" an-ac="sort" an-la="sort:newest"
                                                selected="">Mới Nhất</option>

                                            <option value="mostclicked"
                                                an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                an-ca="filter and sort" an-ac="sort" an-la="sort:most clicked">Phổ Biến
                                                Nhất</option>


                                            <option value="highestrated"
                                                an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                an-ca="filter and sort" an-ac="sort" an-la="sort:highest rated">Highest
                                                Rated</option>


                                            <option value="recommended"
                                                an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                an-ca="filter and sort" an-ac="sort" an-la="sort:recommended">
                                                Theo Khuyến Nghị

                                            </option>


                                            <option value="onlineavailability"
                                                an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                an-ca="filter and sort" an-ac="sort" an-la="sort:online availability">
                                                Có Hàng Online</option>


                                            <option value="mostreviewed" an-tr="pd03_product finder:sort--text-sort"
                                                an-ca="filter and sort" an-ac="sort" an-la="sort:most reviewed">Xem
                                                nhiều nhất</option>

                                        </select>
                                        <button class="menu__select-field" aria-haspopup="listbox" aria-expanded="false"
                                            data-aria-label="click to sort results"
                                            aria-label="Mới Nhất: click to sort results">
                                            <span class="menu__select-field-text">Mới Nhất</span>
                                            <svg class="menu__select-field-icon down" focusable="false">
                                                <use xlink:href="#open-down-bold" href="#open-down-bold"></use>
                                            </svg>
                                            <svg class="menu__select-field-icon up" focusable="false">
                                                <use xlink:href="#close-up-bold" href="#close-up-bold"></use>
                                            </svg>
                                        </button>
                                        <div class="menu__list-wrap scrollbar" aria-hidden="true"
                                            style="visibility: hidden;">
                                            <div class="scrollbar__wrap" style="max-height: 0px;">
                                                <ul class="menu__list scrollbar__contents" role="listbox">
                                                    <li class="menu__list-option-wrap active" role="presentation"
                                                        an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:newest">
                                                        <button class="menu__list-option" aria-selected="true"
                                                            role="option"><span class="menu__list-option-text">Mới
                                                                Nhất</span><svg class="menu__list-option-icon"
                                                                focusable="false">
                                                                <use xlink:href="#done-bold" href="#done-bold"></use>
                                                            </svg></button>
                                                    </li>
                                                    <li class="menu__list-option-wrap" role="presentation"
                                                        an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:most clicked">
                                                        <button class="menu__list-option" aria-selected="false"
                                                            role="option"><span class="menu__list-option-text">Phổ Biến
                                                                Nhất</span><svg class="menu__list-option-icon"
                                                                focusable="false">
                                                                <use xlink:href="#done-bold" href="#done-bold"></use>
                                                            </svg></button>
                                                    </li>
                                                    <li class="menu__list-option-wrap" role="presentation"
                                                        an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort"
                                                        an-la="sort:highest rated"><button class="menu__list-option"
                                                            aria-selected="false" role="option"><span
                                                                class="menu__list-option-text">Highest Rated</span><svg
                                                                class="menu__list-option-icon" focusable="false">
                                                                <use xlink:href="#done-bold" href="#done-bold"></use>
                                                            </svg></button></li>
                                                    <li class="menu__list-option-wrap" role="presentation"
                                                        an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort" an-la="sort:recommended">
                                                        <button class="menu__list-option" aria-selected="false"
                                                            role="option"><span class="menu__list-option-text">Theo
                                                                Khuyến Nghị</span><svg class="menu__list-option-icon"
                                                                focusable="false">
                                                                <use xlink:href="#done-bold" href="#done-bold"></use>
                                                            </svg></button>
                                                    </li>
                                                    <li class="menu__list-option-wrap" role="presentation"
                                                        an-tr="pd03_product finder:sort-epp product finder-text-sort"
                                                        an-ca="filter and sort" an-ac="sort"
                                                        an-la="sort:online availability"><button class="menu__list-option"
                                                            aria-selected="false" role="option"><span
                                                                class="menu__list-option-text">Có Hàng Online</span><svg
                                                                class="menu__list-option-icon" focusable="false">
                                                                <use xlink:href="#done-bold" href="#done-bold"></use>
                                                            </svg></button></li>
                                                    <li class="menu__list-option-wrap" role="presentation"
                                                        an-tr="pd03_product finder:sort--text-sort"
                                                        an-ca="filter and sort" an-ac="sort"
                                                        an-la="sort:most reviewed"><button class="menu__list-option"
                                                            aria-selected="false" role="option"><span
                                                                class="menu__list-option-text">Xem nhiều nhất</span><svg
                                                                class="menu__list-option-icon" focusable="false">
                                                                <use xlink:href="#done-bold" href="#done-bold"></use>
                                                            </svg></button></li>
                                                </ul>
                                            </div>
                                            <div class="scrollbar-horizontal__track" style="display: none;">
                                                <div class="scrollbar-horizontal__track-content">
                                                    <div class="scrollbar-horizontal__bar"></div>
                                                </div>
                                            </div>
                                            <div class="scrollbar-vertical__track" style="">
                                                <div class="scrollbar-vertical__track-content">
                                                    <div class="scrollbar-vertical__bar"
                                                        style="height: 0px; transform: translate3d(0px, 0px, 0px);"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="pd03-product-finder__progress" aria-live="polite" style="display: none;">
                                <span class="pd03-product-finder__progress-line"></span>
                                <span class="pd03-product-finder__progress-line-filled" style="width: 80%;"></span>
                                <span class="hidden">loading</span>
                            </div>
                        </div>
                    </div>

                    <div class="pd03-product-finder__inner">

                        <div class="pd03-product-finder__filters-list" style="display: block; opacity: 1;">
                            <div class="pd03-product-finder__filters-list-wrap is-active">

                                <div class="pd03-product-finder__filters-list-top">
                                    <h2 class="pf-finder-v2__filters-list-top-text">Bộ lọc</h2>

                                    <button href="javascript:void(0)" class="pd03-product-finder__filters-list-top-closed"
                                        an-tr="pd03_product finder:filter-epp product finder-action-filter"
                                        an-ca="filter and sort" an-ac="filter" an-la="filter:close">
                                        <span class="hidden">Đóng</span>
                                        <svg class="icon" focusable="false">
                                            <use xlink:href="#delete-bold" href="#delete-bold"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="pd03-product-finder__filters-list-list">

                                    <div class="pd03-product-finder__zipcode-wrap pd03-product-finder__zipcode-desktop js-us-zipcode-area"
                                        style="display:none;">
                                        <!--  -->
                                        <form action="#" class="pd03-product-finder__zipcode-form" role="search">
                                            <fieldset>
                                                <legend>Search form</legend>
                                                <h3 class="pd03-product-finder__zipcode-title">Check Delivery Availablity
                                                </h3>

                                                <div class="text-field-v2 no-title" data-comp-name="textFieldv2">
                                                    <label class="text-field-v2__hint js-pfv2-zipcode-placeholder"
                                                        for="zipcode-desktop">Enter your ZIP code</label>
                                                    <div class="text-field-v2__input-wrap">
                                                        <input class="text-field-v2__input js-pfv2-zipcode-input"
                                                            id="zipcode-desktop"
                                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                                            maxlength="5" type="text" value=""
                                                            autocomplete="off">
                                                        <button
                                                            class="text-field-v2__input-icon delete js-pfv2-zipcode-delete"
                                                            aria-label="Delete" type="button">
                                                            <svg class="icon delete" focusable="false"
                                                                aria-hidden="true">
                                                                <use xlink:href="#cancel-bold" href="#cancel-bold"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>



                                                <div class="checkbox-radio pd03-product-finder__zipcode-delivery"
                                                    style="display:none;">
                                                    <input type="checkbox" name="checkbox-delivery" class="hidden"
                                                        id="EligibleFor3DayDelivery">
                                                    <div class="checkbox-radio__text-wrap">
                                                        <label class="checkbox-radio__label"
                                                            for="EligibleFor3DayDelivery">
                                                            <span class="checkbox-radio__label-text">
                                                                <!-- Delivery Filter -->
                                                            </span>
                                                        </label>

                                                        <div
                                                            class="pd03-product-finder__zipcode-delivery-info pd03-product-finder__zipcode-delivery-info-desktop">
                                                            <button type="button"
                                                                class="pd03-product-finder__zipcode-delivery-tip"
                                                                aria-describedby="zipcode-desktop-tooltip">
                                                                <svg class="icon icon--info" focusable="false"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#info-bold" href="#info-bold"></use>
                                                                </svg>
                                                            </button>

                                                            <div class="pd03-product-finder__zipcode-delivery-tooltip"
                                                                role="tooltip" id="zipcode-desktop-tooltip">
                                                                <div
                                                                    class="pd03-product-finder__zipcode-delivery-tooltip-text-wrap">
                                                                    <!-- Delivery Tooltip Text : <strong>Eligible for 3-Day Delivery</strong> -->
                                                                </div>
                                                                <button type="button"
                                                                    class="pd03-product-finder__zipcode-delivery-tooltip-close"><span
                                                                        class="hidden">Close</span>
                                                                    <svg class="icon icon--close" focusable="false"
                                                                        aria-hidden="true">
                                                                        <use xlink:href="#delete-bold"
                                                                            href="#delete-bold"></use>
                                                                    </svg>
                                                                </button>
                                                                <span
                                                                    class="pd03-product-finder__zipcode-delivery-tooltip-arrow"></span>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="pd03-product-finder__zipcode-delivery-info pd03-product-finder__zipcode-delivery-info-mobile">

                                                            <div class="pd03-product-finder__zipcode-delivery-popup"
                                                                role="dialog" tabindex="0" aria-modal="true"
                                                                id="zipcode-mobile-popup">
                                                                <div class="layer-popup">
                                                                    <div class="layer-popup__inner">
                                                                        <h2 class="layer-popup__title">Eligible for 3-Day
                                                                            Delivery</h2>

                                                                        <div class="layer-popup__contents scrollbar">
                                                                            <div class="scrollbar__wrap">
                                                                                <div class="scrollbar__contents">
                                                                                    <div
                                                                                        class="pd03-product-finder__zipcode-delivery-popup-text-wrap">
                                                                                        <b>Get it superfast with Samsung
                                                                                            Select 3-day delivery. Shop
                                                                                            select home appliances and we’ll
                                                                                            rush your order for free. Order
                                                                                            must be placed by 2:00pm EST for
                                                                                            3-day delivery. Limited to
                                                                                            selected ZIP Codes. Holiday
                                                                                            blackout periods apply.* </b>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="scrollbar-horizontal__track"
                                                                                style="display: none;">
                                                                                <div
                                                                                    class="scrollbar-horizontal__track-content">
                                                                                    <div class="scrollbar-horizontal__bar">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="scrollbar-vertical__track"
                                                                                style="display: none;">
                                                                                <div
                                                                                    class="scrollbar-vertical__track-content">
                                                                                    <div class="scrollbar-vertical__bar">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <button type="button" class="layer-popup__close">
                                                                            <span class="hidden">Layer Popup Close</span>
                                                                            <svg class="icon" focusable="false"
                                                                                aria-hidden="true">
                                                                                <use xlink:href="#delete-bold"
                                                                                    href="#delete-bold"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="button"
                                                                class="pd03-product-finder__zipcode-delivery-tip"
                                                                aria-describedby="zipcode-mobile-popup">
                                                                <svg class="icon icon--info" focusable="false"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#info-bold" href="#info-bold"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="pd03-product-finder__filters-list-list-wrap js-pfv2-filter_list-wrap">
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Product Type_0" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter"
                                                    an-la="filter:product type">Kiểu Tủ<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series11z02"
                                                                data-filter-info="filter1@@11z02@@door-4@@OR@@Product Type"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:product type:door-4">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series11z02"><span
                                                                        class="checkbox-radio__label-text">4
                                                                        Cửa</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series11z03"
                                                                data-filter-info="filter1@@11z03@@family-hub@@OR@@Product Type"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:product type:family-hub">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series11z03"><span
                                                                        class="checkbox-radio__label-text">Family
                                                                        Hub</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series11z04"
                                                                data-filter-info="filter1@@11z04@@side-by-side@@OR@@Product Type"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:product type:side-by-side">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series11z04"><span
                                                                        class="checkbox-radio__label-text">Side by
                                                                        Side</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series11z05"
                                                                data-filter-info="filter1@@11z05@@east-drawer-bmf@@OR@@Product Type"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:product type:east-drawer-bmf">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series11z05"><span
                                                                        class="checkbox-radio__label-text">2 Cửa Ngăn Đông
                                                                        Dưới</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series11z06"
                                                                data-filter-info="filter1@@11z06@@east-drawer-on-tmf@@OR@@Product Type"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:product type:east-drawer-on-tmf">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series11z06"><span
                                                                        class="checkbox-radio__label-text">2 Cửa Ngăn Đông
                                                                        Trên</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series11z07"
                                                                data-filter-info="filter1@@11z07@@bespoke-accessories@@OR@@Product Type"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:product type:bespoke-accessories">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series11z07"><span
                                                                        class="checkbox-radio__label-text">Phụ kiện
                                                                        Bespoke</span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Price_1" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter" an-la="filter:price">Giá
                                                    Bán<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series07z01"
                                                                data-filter-info="filter2@@07z01@@5-million-8-million@@OR@@Price"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:price:5-million-8-million">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series07z01"><span
                                                                        class="checkbox-radio__label-text">Từ 5 - 8 triệu
                                                                    </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series07z02"
                                                                data-filter-info="filter2@@07z02@@8-million-12-million@@OR@@Price"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:price:8-million-12-million">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series07z02"><span
                                                                        class="checkbox-radio__label-text">Từ 8 - 12 triệu
                                                                    </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series07z03"
                                                                data-filter-info="filter2@@07z03@@12-million-15-million@@OR@@Price"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:price:12-million-15-million">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series07z03"><span
                                                                        class="checkbox-radio__label-text">Từ 12 - 15 triệu
                                                                    </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series07z04"
                                                                data-filter-info="filter2@@07z04@@15-million-20-million@@OR@@Price"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:price:15-million-20-million">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series07z04"><span
                                                                        class="checkbox-radio__label-text">Từ 15 - 20 triệu
                                                                    </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series07z05"
                                                                data-filter-info="filter2@@07z05@@over-20-million@@OR@@Price"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:price:over-20-million">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series07z05"><span
                                                                        class="checkbox-radio__label-text">Trên 20 triệu
                                                                    </span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Capacity L_2" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter" an-la="filter:capacity l">Dung
                                                    tích<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden" id="checkbox-series02z04"
                                                                data-filter-info="filter3@@02z04@@less-than-300l@@OR@@Capacity L"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:capacity l:less-than-300l">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series02z04"><span
                                                                        class="checkbox-radio__label-text">Dưới
                                                                        300L</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series02z03"
                                                                data-filter-info="filter3@@02z03@@300400l@@OR@@Capacity L"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:capacity l:300400l">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series02z03"><span
                                                                        class="checkbox-radio__label-text">Từ 300L đến
                                                                        400L</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series02z02"
                                                                data-filter-info="filter3@@02z02@@400500l@@OR@@Capacity L"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:capacity l:400500l">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series02z02"><span
                                                                        class="checkbox-radio__label-text">Từ 400L đến
                                                                        500L</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series02z01"
                                                                data-filter-info="filter3@@02z01@@more-than-500l@@OR@@Capacity L"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:capacity l:more-than-500l">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series02z01"><span
                                                                        class="checkbox-radio__label-text">Trên
                                                                        550L</span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Cooling System_3" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter"
                                                    an-la="filter:cooling system">Công Nghệ Nổi Bật<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z05"
                                                                data-filter-info="filter4@@03z05@@bespoke@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:bespoke">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z05"><span
                                                                        class="checkbox-radio__label-text">Thiết kế
                                                                        Bespoke</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z02"
                                                                data-filter-info="filter4@@03z02@@triple-cooling@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:triple-cooling">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z02"><span
                                                                        class="checkbox-radio__label-text">3 Dàn lạnh
                                                                        độc lập Triple Cooling</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z01"
                                                                data-filter-info="filter4@@03z01@@twin-cooling-plus@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:twin-cooling-plus">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z01"><span
                                                                        class="checkbox-radio__label-text">2 Dàn lạnh
                                                                        độc lập Twin Cooling Plus</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z07"
                                                                data-filter-info="filter4@@03z07@@4-door-series@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:4-door-series">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z07"><span
                                                                        class="checkbox-radio__label-text">Đông mềm linh
                                                                        hoạt 4 chế độ Optimal Fresh+</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z03"
                                                                data-filter-info="filter4@@03z03@@spacemax-technology@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:spacemax-technology">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z03"><span
                                                                        class="checkbox-radio__label-text">Công Nghệ
                                                                        SpaceMax </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z04"
                                                                data-filter-info="filter4@@03z04@@optimal-fresh-zone@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:optimal-fresh-zone">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z04"><span
                                                                        class="checkbox-radio__label-text">Ngăn đông mềm
                                                                        Optimal Fresh Zone</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series03z06"
                                                                data-filter-info="filter4@@03z06@@beverage-center@@OR@@Cooling System"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:cooling system:beverage-center">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series03z06"><span
                                                                        class="checkbox-radio__label-text">Beverage
                                                                        Center</span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Surface_4" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter" an-la="filter:surface">Bề
                                                    mặt tủ<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series06z05"
                                                                data-filter-info="filter5@@06z05@@surface@@OR@@Surface"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:surface:surface">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series06z05"><span
                                                                        class="checkbox-radio__label-text">Gương Nguyên
                                                                        Khối </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series06z04"
                                                                data-filter-info="filter5@@06z04@@uniglass@@OR@@Surface"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:surface:uniglass">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series06z04"><span
                                                                        class="checkbox-radio__label-text">Gương
                                                                        Uniglass</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series06z02"
                                                                data-filter-info="filter5@@06z02@@stainless-steel@@OR@@Surface"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:surface:stainless-steel">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series06z02"><span
                                                                        class="checkbox-radio__label-text">Thép Không
                                                                        Gỉ</span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Feature_5" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter"
                                                    an-la="filter:feature">Tính năng<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z08"
                                                                data-filter-info="filter6@@05z08@@cool-select@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:cool-select">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z08"><span
                                                                        class="checkbox-radio__label-text">Ngăn chuyển
                                                                        đổi Cool Select</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z09"
                                                                data-filter-info="filter6@@05z09@@all-around-cooling@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:all-around-cooling">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z09"><span
                                                                        class="checkbox-radio__label-text">Làm Lạnh vòm
                                                                        All Around Cooling</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z10"
                                                                data-filter-info="filter6@@05z10@@metal-coolin@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:metal-coolin">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z10"><span
                                                                        class="checkbox-radio__label-text">Công nghệ
                                                                        Metal Cooling </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z11"
                                                                data-filter-info="filter6@@05z11@@mr-cool-pack@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:mr-cool-pack">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z11"><span
                                                                        class="checkbox-radio__label-text">Tấm giữ
                                                                        nhiệt Mr Cool Pack </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z12"
                                                                data-filter-info="filter6@@05z12@@power-cool@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:power-cool">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z12"><span
                                                                        class="checkbox-radio__label-text">Làm lạnh
                                                                        nhanh Power Cool </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z13"
                                                                data-filter-info="filter6@@05z13@@power-freeze@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:power-freeze">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z13"><span
                                                                        class="checkbox-radio__label-text">Làm đông nhanh
                                                                        Power Freeze </span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series05z14"
                                                                data-filter-info="filter6@@05z14@@than@@OR@@Feature"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:feature:than">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series05z14"><span
                                                                        class="checkbox-radio__label-text">Bộ lọc than
                                                                        hoạt tính </span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="Extra_6" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter" an-la="filter:extra">Tiện
                                                    Ích<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series04z02"
                                                                data-filter-info="filter7@@04z02@@water-dispenser@@OR@@Extra"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:extra:water-dispenser">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series04z02"><span
                                                                        class="checkbox-radio__label-text">Ngăn lấy nước
                                                                        ngoài</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series04z04"
                                                                data-filter-info="filter7@@04z04@@auto-ice-maker@@OR@@Extra"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:extra:auto-ice-maker">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series04z04"><span
                                                                        class="checkbox-radio__label-text">Máy làm đá
                                                                        tự động</span></label></div>
                                                        </div>
                                                    </li>
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series04z05"
                                                                data-filter-info="filter7@@04z05@@movable-ice-maker@@OR@@Extra"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:extra:movable-ice-maker">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series04z05"><span
                                                                        class="checkbox-radio__label-text">Hộp đá xoay
                                                                        di động</span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pd03-product-finder__filters-list-list-area pd03-product-finder__filters-list-list--active"
                                            data-name="other_7" style="display:block">
                                            <h3 class="pd03-product-finder__filters-list-list-headline"><span
                                                    class="pd03-product-finder__filters-list-list-headline-text"
                                                    role="button" tabindex="0"
                                                    an-tr="pd03_product finder:filter-epp product finder-text-filter"
                                                    an-ca="filter and sort" an-ac="filter" an-la="filter:other">Hàng
                                                    có sẵn tại Cửa hàng Trực tuyến<span class="hidden"
                                                        data-global-text="{&quot;Expand&quot; : &quot;Mở rộng&quot;,&quot;Collapse&quot; : &quot;Collapse&quot;}">Click
                                                        to Collapse</span><svg class="icon icon--open" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#open-down-regular" href="#open-down-regular">
                                                        </use>
                                                    </svg><svg class="icon icon--closed" focusable="false"
                                                        aria-hidden="true">
                                                        <use xlink:href="#close-up-regular" href="#close-up-regular">
                                                        </use>
                                                    </svg></span></h3>
                                            <div class="pd03-product-finder__filters-list-item-wrap" style="">
                                                <ul class="pd03-product-finder__filters-list-list-item">
                                                    <li class="pd03-product-finder__filters-list-list-items"
                                                        style="display:block">
                                                        <div class="checkbox-radio"><input type="checkbox"
                                                                name="checkbox" class="hidden"
                                                                id="checkbox-series12z01"
                                                                data-filter-info="filter8@@12z01@@other@@OR@@other"
                                                                an-tr="pd03_product finder:filter-epp product finder-list-filter"
                                                                an-ca="filter and sort" an-ac="filter"
                                                                an-la="filter:other:other">
                                                            <div class="checkbox-radio__text-wrap"><label
                                                                    class="checkbox-radio__label"
                                                                    for="checkbox-series12z01"><span
                                                                        class="checkbox-radio__label-text">Sản phẩm có thể
                                                                        đặt trước</span></label></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Filter List Html Area -->

                                    </div>
                                </div>

                                <div class="pd03-product-finder__filters-list-cta">
                                    <a class="cta cta--outlined cta--black reset-cta cta--dense js-pfv2-mobile-reset-cta"
                                        href="javascript:;" title="Đặt lại Bộ lọc" aria-label="Link Title"
                                        an-tr="pd03_product finder:filter-epp product finder-action-filter"
                                        an-ca="filter and sort" an-ac="filter" an-la="filter:reset"> Đặt lại Bộ lọc
                                    </a>
                                    <a class="cta cta--contained cta--emphasis cta--disabled view-cta cta--dense js-pfv2-view-results-cta"
                                        href="javascript:;" title="Xem kết quả" aria-label="Link Title"
                                        aria-disabled="true" tabindex="-1"
                                        an-tr="pd03_product finder:filter-epp product finder-action-filter"
                                        an-ca="filter and sort" an-ac="filter" an-la="filter:view result"> Xem kết quả
                                        <span class="js-pfv2-view-results-count"> ‎(30)‎ </span> </a>
                                </div>
                            </div>
                        </div>

                        <div class="pd03-product-finder__content">
                            <div class="pd03-product-finder__content-wrap js-pfv2-content-wrap categorized-group"
                                data-mobile-two-card="false" data-shop-promo-only="false">
                                <!--/* product-card-grid */-->
                                <div class="pd03-product-finder__content-item pd03-product-finder__content-item-view js-pfv2-product-card"
                                    data-productidx="0">
                                    <!--/* PD03 Product Card Component */-->
                                    <div class="pd03-product-card pd03-product-card--horizontal">

                                        <div class="pd03-product-card__item">
                                            <div class="pd03-product-card__product-image">
                                                <!-- product images -->

                                                <a class="pd03-product-card__product-image-link"
                                                    href="/vn/multistore/vn_doanhnghiepd/pd.RT31CG5424B1SV/"
                                                    data-modelcode="RT31CG5424B1SV" data-modelname="RT31CG5424B1SV"
                                                    aria-label="Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L"
                                                    an-tr="pd03_product finder:option-epp product finder-product-link"
                                                    an-ca="product click" an-ac="pf product card" an-la="image click">
                                                    <div class="swiper-container" aria-live="polite"
                                                        data-swiper-option="{
						&quot;componentEl&quot;:&quot;.pd03-product-card__image&quot;,
						&quot;slidesPerView&quot;:1,
						&quot;keepWrapper&quot;:true,
						&quot;loop&quot;: false,
						&quot;pagination&quot;:false
						}">
                                                        <div class="swiper-wrapper">

                                                            <div class="pd03-product-card__image-item swiper-slide">
                                                                <div class="image image--main-loaded">
                                                                    <img class="image__main responsive-img image--loaded"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303518?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303518?$344_344_PNG$"
                                                                        alt="front Black" role="img"
                                                                        data-comp-name="image"
                                                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303518?$252_252_PNG$"
                                                                        style="">
                                                                </div>
                                                            </div>

                                                            <div class="pd03-product-card__image-item swiper-slide"
                                                                style="display: none;">
                                                                <div class="image image--main-loaded">
                                                                    <img class="image__main responsive-img image--loaded"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303512?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303512?$344_344_PNG$"
                                                                        alt="l-perspective Black" role="img"
                                                                        data-comp-name="image"
                                                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303512?$252_252_PNG$"
                                                                        style="transition: opacity 0.2s ease 0s;">
                                                                </div>
                                                            </div>

                                                            <div class="pd03-product-card__image-item swiper-slide"
                                                                style="display: none;">
                                                                <div class="image image--main-loaded">
                                                                    <img class="image__main responsive-img image--loaded"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303513?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303513?$344_344_PNG$"
                                                                        alt="r-perspective Black" role="img"
                                                                        data-comp-name="image"
                                                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303513?$252_252_PNG$"
                                                                        style="transition: opacity 0.2s ease 0s;">
                                                                </div>
                                                            </div>

                                                            <div class="pd03-product-card__image-item swiper-slide"
                                                                style="display: none;">
                                                                <div class="image image--main-loaded">
                                                                    <img class="image__main responsive-img image--loaded"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303514?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303514?$344_344_PNG$"
                                                                        alt="back Black" role="img"
                                                                        data-comp-name="image"
                                                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303514?$252_252_PNG$"
                                                                        style="transition: opacity 0.2s ease 0s;">
                                                                </div>
                                                            </div>

                                                            <div class="pd03-product-card__image-item swiper-slide"
                                                                style="display: none;">
                                                                <div class="image image--main-loaded">
                                                                    <img class="image__main responsive-img image--loaded"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303515?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303515?$344_344_PNG$"
                                                                        alt="front-open-without-food Black"
                                                                        role="img" data-comp-name="image"
                                                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303515?$252_252_PNG$"
                                                                        style="transition: opacity 0.2s ease 0s;">
                                                                </div>
                                                            </div>

                                                            <div class="pd03-product-card__image-item swiper-slide"
                                                                style="display: none;">
                                                                <div class="image image--main-loaded">
                                                                    <img class="image__main responsive-img image--loaded"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303510?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303510?$344_344_PNG$"
                                                                        alt="front-open-with-food Black" role="img"
                                                                        data-comp-name="image"
                                                                        src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303510?$252_252_PNG$"
                                                                        style="transition: opacity 0.2s ease 0s;">
                                                                </div>
                                                            </div>

                                                            <div class="pd03-product-card__image-item swiper-slide"
                                                                style="display: none;">
                                                                <div class="image">
                                                                    <img class="image__main lazy-load responsive-img"
                                                                        data-desktop-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303509?$252_252_PNG$"
                                                                        data-mobile-src="//images.samsung.com/is/image/samsung/p6pim/vn/rt31cg5424b1sv/gallery/vn-top-mount-freezer-spacemax-rt31cg5424b1sv-thumb-536303509?$344_344_PNG$"
                                                                        alt="detail-internal-display Black"
                                                                        role="img" data-comp-name="image">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </a>

                                                <!-- award icons -->

                                                &lt;-- quick view --&gt;
                                                <button
                                                    class="pd03-product-card__product-image-cta cta  cta--outlined cta--black pd03-product-card__quickview_btn "
                                                    aria-label="Button Label"
                                                    an-tr="pd03_product finder-product finder-quick view-option_click1"
                                                    an-ca="option click" an-ac="pf product card" an-la="quick view">
                                                    Tổng Quan
                                                </button>
                                            </div>
                                            <div class="pd03-product-card__product-content">
                                                <!-- badge -->

                                                <!-- wishlist -->

                                                <div class="pd03-product-card__product-content-primary">
                                                    <div class="pd03-product-card__product-name">

                                                        <a class="pd03-product-card__product-name-link"
                                                            href="/vn/multistore/vn_doanhnghiepd/pd.RT31CG5424B1SV/"
                                                            aria-label="Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L"
                                                            data-modelcode="RT31CG5424B1SV"
                                                            data-modelname="RT31CG5424B1SV"
                                                            an-tr="pd03_product finder:option-epp product finder-product-link"
                                                            an-ca="product click" an-ac="pf product card"
                                                            an-la="display name">
                                                            <p class="pd03-product-card__product-name-text">Tủ Lạnh Ngăn
                                                                Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+,
                                                                305L</p>
                                                        </a>

                                                    </div>
                                                    <!-- option chips -->

                                                    <div class="pd03-product-card__option-selector ">

                                                        <!-- (2021.04.14 수정) .option-selector-v2__color-text 추가 -->
                                                        <div class="option-selector-v2 option-selector-v2__color-text">

                                                            <div class="option-selector-v2__color-name">Màu sắc :
                                                                <button type="button"
                                                                    class="option-selector-v2__color-name-text"
                                                                    disabled="true">
                                                                    <strong class="hidden"
                                                                        data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;, &quot;Collapse&quot; : &quot;Nhấp để thu gọn&quot;}">Nhấp
                                                                        để thu gọn</strong>
                                                                    <strong
                                                                        class="option-selector-v2__color-name-text-in">Đen</strong>
                                                                </button>
                                                                <div class="option-selector-v2__color-tooltip">
                                                                    Màu sắc : <strong
                                                                        class="option-selector-v2__color-tooltip-text">Đen</strong>
                                                                    <a href="javascript:void(0)"
                                                                        class="option-selector-v2__color-tooltip-close"
                                                                        role="button">
                                                                        <span class="hidden">Close</span>
                                                                        <svg class="icon icon-close" focusable="false"
                                                                            aria-hidden="true">
                                                                            <use xlink:href="#delete-bold"
                                                                                href="#delete-bold"></use>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="option-selector-v2__wrap option-selector-v2__wrap--color-chip"
                                                                data-global-text="{ &quot;selected&quot; : &quot;Đã chọn&quot; }">
                                                                <div
                                                                    class="option-selector-v2__swiper option-selector-v2__swiper--min">
                                                                    <!-- (2021.07.07 수정) aria-live="polite" 삭제 -->
                                                                    <div class="option-selector-v2__swiper-container">
                                                                        <!-- (2021.07.07 수정) role="list" 추가 -->
                                                                        <div class="option-selector-v2__swiper-wrapper"
                                                                            role="list" style="">

                                                                            <div class="option-selector-v2__swiper-slide is-checked "
                                                                                role="listitem">
                                                                                <button type="button"
                                                                                    class="option-selector-v2__color js-pfv2-product-fmychip"
                                                                                    data-chiptype="color"
                                                                                    data-modeli="0"
                                                                                    an-tr="pd03_product finder:option-epp product finder-text-option"
                                                                                    an-ca="option click"
                                                                                    an-ac="pf product card"
                                                                                    an-la="color:black"
                                                                                    data-modelcode="RT31CG5424B1SV"
                                                                                    data-modelname="RT31CG5424B1SV">

                                                                                    <span
                                                                                        class="option-selector-v2__color-code">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="36"
                                                                                            height="35.999"
                                                                                            viewBox="0 0 36 35.999">
                                                                                            <g
                                                                                                transform="translate(-18.001 9)">
                                                                                                <rect width="36"
                                                                                                    height="35.999"
                                                                                                    transform="translate(18.001 -9)"
                                                                                                    fill="none"></rect>
                                                                                                <path
                                                                                                    d="M18,0A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                    transform="translate(18.001 -9)"
                                                                                                    fill="#000000"></path>
                                                                                                <!--/* [D] 제일 마지막 태그인 path의 fill 속성 값 변경 제외 */-->
                                                                                                <path
                                                                                                    d="M18,1A17,17,0,0,0,5.979,30.019,17,17,0,1,0,30.02,5.979,16.889,16.889,0,0,0,18,1m0-1A18,18,0,1,1,0,18,18,18,0,0,1,18,0Z"
                                                                                                    transform="translate(18.001 -9)"
                                                                                                    fill="rgba(0,0,0,0.5)">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                        <span class="hidden">Đen</span>

                                                                                    </span>

                                                                                </button>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <!-- price area vertical -->

                                                    <div class="pd03-product-card__price for-vertical    ">

                                                        <p class="pd03-product-card__price-second ">

                                                            <span class="pd03-product-card__price-origin">
                                                                <span class="hidden">Price before discount: </span>
                                                                chiết khấu 1.600.043&nbsp;₫ (giá gốc
                                                                <del>11.190.300&nbsp;₫</del>)
                                                            </span>

                                                        </p>
                                                        <p class="pd03-product-card__price-main "
                                                            data-pricetext="9.590.257&nbsp;₫">

                                                            <span class="hidden">Tổng giá: </span>
                                                            9.590.257&nbsp;₫

                                                        </p>

                                                        <div class="pd03-product-card__price-description no-data">



                                                        </div>

                                                    </div>
                                                    <div class="pd03-product-card__seller for-vertical no-data">

                                                    </div>

                                                    <!-- package area vertical -->

                                                    <!-- energy fiche vertical -->
                                                    <div class="pd03-product-card__fiche for-vertical no-data"></div>
                                                    <!-- stock status vertical -->

                                                    <div class="pd03-product-card__stock  for-vertical ">

                                                        <div class="pd03-product-card__stock-inner">

                                                            <span class="pd03-product-card__stock-icons">
                                                                <svg class="icon icon--in-stock" focusable="false"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#done-bold" href="#done-bold">
                                                                    </use>
                                                                </svg>
                                                                <svg class="icon icon--out-of-stock" focusable="false"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#delete-bold" href="#delete-bold">
                                                                    </use>
                                                                </svg>
                                                            </span>

                                                            Có hàng
                                                        </div>

                                                    </div>

                                                    <!-- rating area -->
                                                    <div class="pd03-product-card__rating ">
                                                        <!--/* Rating 사용하지 않을 경우 아래 마크업 삭제 */-->
                                                        <a href="/vn/multistore/vn_doanhnghiepd/pd.RT31CG5424B1SV/#reviews"
                                                            aria-label="0, (0), Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L Reivew"
                                                            data-modelcode="RT31CG5424B1SV"
                                                            data-modelname="RT31CG5424B1SV"
                                                            an-tr="pd03_product finder:option-epp product finder-image-review"
                                                            an-ca="review" an-ac="pf product card"
                                                            an-la="read review">
                                                            <!-- /* 전체 Empty: .rating--empty 추가 */ -->
                                                            <span class="rating  rating--empty">
                                                                <span class="hidden">Mức đánh giá</span>
                                                                <span class="rating__inner">
                                                                    <span class="rating__star-list">
                                                                        <span class="rating__star-item"><span
                                                                                class="rating__star-empty"></span><span
                                                                                class="rating__star-filled"
                                                                                style="width: 0%;"></span></span><span
                                                                            class="rating__star-item"><span
                                                                                class="rating__star-empty"></span><span
                                                                                class="rating__star-filled"
                                                                                style="width: 0%;"></span></span><span
                                                                            class="rating__star-item"><span
                                                                                class="rating__star-empty"></span><span
                                                                                class="rating__star-filled"
                                                                                style="width: 0%;"></span></span><span
                                                                            class="rating__star-item"><span
                                                                                class="rating__star-empty"></span><span
                                                                                class="rating__star-filled"
                                                                                style="width: 0%;"></span></span><span
                                                                            class="rating__star-item"><span
                                                                                class="rating__star-empty"></span><span
                                                                                class="rating__star-filled"
                                                                                style="width: 0%;"></span></span>
                                                                    </span>
                                                                    <strong class="rating__point"><span
                                                                            class="hidden">Xếp hạng sản phẩm :
                                                                        </span><span>0</span></strong>
                                                                    <em class="rating__review-count">(<span
                                                                            class="hidden">Số lượng xếp hạng
                                                                            :</span><span>0</span>)</em>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <!-- spec -->

                                                    <div class="pd03-product-card__spec ">

                                                        <ul class="pd03-product-card__spec-list" role="list">
                                                            <li class="pd03-product-card__spec-item" role="listitem">
                                                                Ngăn đông mềm linh hoạt 4 chế độ Optimal Fresh+</li>
                                                            <li class="pd03-product-card__spec-item" role="listitem">
                                                                Tăng 20L dung tích với công nghệ SpaceMax™</li>
                                                            <li class="pd03-product-card__spec-item" role="listitem">Khử
                                                                mùi với hệ thống lọc than hoạt tính</li>
                                                        </ul>

                                                    </div>

                                                </div>
                                                <div class="pd03-product-card__product-content-secondary">
                                                    <!-- price area horizontal -->

                                                    <div class="pd03-product-card__price for-horizontal    ">

                                                        <p class="pd03-product-card__price-second ">

                                                            <span class="pd03-product-card__price-origin">
                                                                <span class="hidden">Price before discount: </span>
                                                                chiết khấu 1.600.043&nbsp;₫ (giá gốc
                                                                <del>11.190.300&nbsp;₫</del>)
                                                            </span>

                                                        </p>
                                                        <p class="pd03-product-card__price-main "
                                                            data-pricetext="9.590.257&nbsp;₫">

                                                            <span class="hidden">Tổng giá: </span>
                                                            9.590.257&nbsp;₫

                                                        </p>

                                                        <div class="pd03-product-card__price-description no-data">



                                                        </div>

                                                    </div>
                                                    <div class="pd03-product-card__seller for-horizontal no-data">

                                                    </div>

                                                    <!-- energy fiche horizontal -->
                                                    <div class="pd03-product-card__fiche for-horizontal no-data"></div>
                                                    <!-- stock status horizontal -->

                                                    <div class="pd03-product-card__stock  for-horizontal ">

                                                        <div class="pd03-product-card__stock-inner">

                                                            <span class="pd03-product-card__stock-icons">
                                                                <svg class="icon icon--in-stock" focusable="false"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#done-bold" href="#done-bold">
                                                                    </use>
                                                                </svg>
                                                                <svg class="icon icon--out-of-stock" focusable="false"
                                                                    aria-hidden="true">
                                                                    <use xlink:href="#delete-bold" href="#delete-bold">
                                                                    </use>
                                                                </svg>
                                                            </span>

                                                            Có hàng
                                                        </div>

                                                    </div>

                                                    <!-- feature benefit -->

                                                    <div class="pd03-product-card__benefit  ">

                                                        <div class="pd03-product-card__benefit-wrap ">
                                                            <ul class="pd03-product-card__benefit-list" role="list">

                                                                <li class="pd03-product-card__benefit-item"
                                                                    role="listitem">
                                                                    <div class="pd03-product-card__benefit-icon">
                                                                        <svg class="icon" focusable="false">
                                                                            <use xlink:href="#shopping-deal-regular"
                                                                                href="#shopping-deal-regular"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="pd03-product-card__benefit-text">
                                                                        Combo mua kèm ưu đãi cực hời, số lượng có hạn
                                                                    </p>
                                                                </li>

                                                                <li class="pd03-product-card__benefit-item"
                                                                    role="listitem">
                                                                    <div class="pd03-product-card__benefit-icon">
                                                                        <svg class="icon" focusable="false">
                                                                            <use xlink:href="#shopping-deal-regular"
                                                                                href="#shopping-deal-regular"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="pd03-product-card__benefit-text">
                                                                        :1. Mua kèm máy hút bụi với mức giá ưu đãi
                                                                    </p>
                                                                </li>

                                                                <li class="pd03-product-card__benefit-item"
                                                                    role="listitem">
                                                                    <div class="pd03-product-card__benefit-icon">
                                                                        <svg class="icon" focusable="false">
                                                                            <use xlink:href="#shopping-deal-regular"
                                                                                href="#shopping-deal-regular"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <p class="pd03-product-card__benefit-text">
                                                                        VS03R6523J1/SV với giá từ 3tr114
                                                                    </p>
                                                                </li>

                                                            </ul>


                                                            <div class="pd03-product-card__benefit-tooltip">
                                                                <button type="button"
                                                                    class="pd03-product-card__benefit-more pd03-product-card__quickview_btn">
                                                                    <span>Xem thêm</span>
                                                                </button>
                                                                <!-- div class="pd03-product-card__benefit-tooltip-wrap" role="tooltip">
                 <ul class="pd03-product-card__benefit-tooltip-list" role="list">
                  <li class="pd03-product-card__benefit-tooltip-item" role="listitem">*Combo mua kèm ưu đãi cực hời, số lượng có hạn</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*:1. Mua kèm máy hút bụi với mức giá ưu đãi</li><li class="pd03-product-card__benefit-tooltip-item" role="listitem">*VS03R6523J1/SV với giá từ 3tr114</li>
                 </ul>
                 <button type="button" class="pd03-product-card__benefit-tooltip-close">
                  <span class="hidden">Close</span>
                  <svg class="icon">
                   <use xlink:href="#delete-bold" href="#delete-bold"></use>
                  </svg>
                 </button>
                </div -->
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <!-- national flags and price campaign -->
                                                    <div class="pd03-product-card__nonshop-option no-data"></div>
                                                    <!-- CTA area -->

                                                    <div class="pd03-product-card__label-cta-wrap">

                                                        <button class="cta cta--outlined cta--black js-pfv2-learn-more"
                                                            href="/vn/multistore/vn_doanhnghiepd/pd.RT31CG5424B1SV/"
                                                            data-modelcode="RT31CG5424B1SV"
                                                            data-modelname="RT31CG5424B1SV"
                                                            aria-label="Tìm hiểu thêm:Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L"
                                                            an-tr="pd03_product finder:option-epp product finder-product-link"
                                                            an-ca="product click" an-ac="pf product card"
                                                            an-la="learn more click">
                                                            Tìm hiểu thêm
                                                        </button>

                                                        <button class="cta cta--contained cta--black js-pfv2-buy-now"
                                                            href="javascript:;"
                                                            aria-label="Thêm vào giỏ hàng:Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L"
                                                            data-cart="true"
                                                            data-link_info="https://shop.samsung.com/vn/multistore/vnepp/vn_doanhnghiepd/cart"
                                                            data-config_info="" data-pimsubtype="top mount freezer"
                                                            data-pvitype="refrigerator" data-pvisubtype="top freezer"
                                                            data-modelrevenue="11190300" data-modelqty="1"
                                                            data-modelcurrency="VND" data-modelcode="RT31CG5424B1SV"
                                                            data-modelname="RT31CG5424B1SV"
                                                            data-modeldisplay="Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L"
                                                            data-discountprice="11190300"
                                                            an-tr="pd03_product finder:buy cta-epp product finder-cta-cart page"
                                                            an-ca="ecommerce" an-ac="addToCart"
                                                            an-la="pf product card:add to cart">
                                                            Thêm vào giỏ hàng
                                                        </button>

                                                    </div>

                                                    <div class="pd03-product-card__icon-text-cta-wrap">
                                                        <input type="hidden" class="wtbStockStatusText"
                                                            value="inStock">
                                                        <input type="hidden" class="useWtbStockFunction"
                                                            value="N">


                                                        <button
                                                            class="cta cta--label cta--black cta--icon cta--icon-leading cta--icon-compare js-pfv2-compare-cta "
                                                            data-modelcode="RT31CG5424B1SV"
                                                            data-modelname="RT31CG5424B1SV"
                                                            an-tr="pd03_product finder:where to buy compare-epp product finder-text-compare"
                                                            an-ca="content click" an-ac="feature"
                                                            an-la="pf product card:compare"
                                                            data-displayname="Tủ Lạnh Ngăn Đông Trên với Đông Mềm Linh Hoạt 4 Chế Độ Optimal Fresh+, 305L"
                                                            data-addedmodelcode="" data-categorysubtypecode="08030500"
                                                            data-text-pressed="Comparing">
                                                            So Sánh
                                                            <svg class="icon" focusable="false" aria-hidden="true">
                                                                <use xlink:href="#default-circle-regular"
                                                                    href="#default-circle-regular"></use>
                                                            </svg>
                                                        </button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/* // PD03 Product Card Component */-->
                                </div>
                                <!--/* product-card-grid */-->

                                <!--/* product-card-grid */-->





                            </div>

                        </div>

                        <div class="pd03-product-card__icon-text-cta-wrap">
                            <input type="hidden" class="wtbStockStatusText" value="inStock">
                            <input type="hidden" class="useWtbStockFunction" value="N">


                            <button
                                class="cta cta--label cta--black cta--icon cta--icon-leading cta--icon-compare js-pfv2-compare-cta "
                                data-modelcode="RB27N4190BU/SV" data-modelname="RB27N4190BU"
                                an-tr="pd03_product finder:where to buy compare-epp product finder-text-compare"
                                an-ca="content click" an-ac="feature" an-la="pf product card:compare"
                                data-displayname="Tủ Lạnh Ngăn Đông Dưới với Optimal Fresh Zone, 276L"
                                data-addedmodelcode="" data-categorysubtypecode="08030100"
                                data-text-pressed="Comparing">
                                So Sánh
                                <svg class="icon" focusable="false" aria-hidden="true">
                                    <use xlink:href="#default-circle-regular" href="#default-circle-regular"></use>
                                </svg>
                            </button>

                        </div>


                    </div>
                </div>
        </div>
    </div>
    <!--/* // PD03 Product Card Component */-->

    <!-- price area vertical -->


    <div class="pd03-product-card__seller for-vertical no-data">

    </div>

    <!-- package area vertical -->

    <!-- energy fiche vertical -->
    <div class="pd03-product-card__fiche for-vertical no-data"></div>
    <!-- stock status vertical -->



    <div class="pd03-product-finder__compare-bar">
        <div class="pd03-product-finder__compare-bar-wrap">
            <div class="pd03-product-finder__compare-bar-box" aria-live="polite">
                <div class="pd03-product-finder__compare-bar-item">
                    <p class="pd03-product-finder__compare-bar-item-product-name"></p>
                    <p class="pd03-product-finder__compare-bar-item-description"></p>
                    <p class="pd03-product-finder__compare-bar-item-price-excluding-vat">Price without
                        VAT: <span></span></p>
                    <p class="pd03-product-finder__compare-bar-item-price-special">Price with discount:
                        <span></span>
                    </p>
                    <p class="pd03-product-finder__compare-bar-item-price-rrp">Price before: <del></del>
                    </p>
                    <button type="button" class="pd03-product-finder__compare-bar-item-close"
                        an-tr="pd03_product finder:compare-epp product finder-cta-action" an-ca="content click"
                        an-ac="feature" an-la="pf product card:compare:delete"
                        onclick="javascript:window.sg.components.pd03ProductFinder.comparebarSlotClose('m1');">
                        <span class="hidden">Đóng</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#cancel-close-regular" href="#cancel-close-regular"></use>
                        </svg>
                    </button>
                </div>
                <div class="pd03-product-finder__compare-bar-item">
                    <p class="pd03-product-finder__compare-bar-item-product-name"></p>
                    <p class="pd03-product-finder__compare-bar-item-description"></p>
                    <p class="pd03-product-finder__compare-bar-item-price-excluding-vat">Price without
                        VAT: <span></span></p>
                    <p class="pd03-product-finder__compare-bar-item-price-special">Price with discount:
                        <span></span>
                    </p>
                    <p class="pd03-product-finder__compare-bar-item-price-rrp">Price before: <del></del>
                    </p>
                    <button type="button" class="pd03-product-finder__compare-bar-item-close"
                        an-tr="pd03_product finder:compare-epp product finder-cta-action" an-ca="content click"
                        an-ac="feature" an-la="pf product card:compare:delete"
                        onclick="javascript:window.sg.components.pd03ProductFinder.comparebarSlotClose('m1');">
                        <span class="hidden">Đóng</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#cancel-close-regular" href="#cancel-close-regular"></use>
                        </svg>
                    </button>
                </div>
                <div class="pd03-product-finder__compare-bar-item">
                    <p class="pd03-product-finder__compare-bar-item-product-name"></p>
                    <p class="pd03-product-finder__compare-bar-item-description"></p>
                    <p class="pd03-product-finder__compare-bar-item-price-excluding-vat">Price without
                        VAT: <span></span></p>
                    <p class="pd03-product-finder__compare-bar-item-price-special">Price with discount:
                        <span></span>
                    </p>
                    <p class="pd03-product-finder__compare-bar-item-price-rrp">Price before: <del></del>
                    </p>
                    <button type="button" class="pd03-product-finder__compare-bar-item-close"
                        an-tr="pd03_product finder:compare-epp product finder-cta-action" an-ca="content click"
                        an-ac="feature" an-la="pf product card:compare:delete"
                        onclick="javascript:window.sg.components.pd03ProductFinder.comparebarSlotClose('m1');">
                        <span class="hidden">Đóng</span>
                        <svg class="icon" focusable="false">
                            <use xlink:href="#cancel-close-regular" href="#cancel-close-regular"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="pd03-product-finder__compare-bar-cta">
                <button class="cta cta--underline cta--black cta--clear js-pfv2-compare-clear-cta"
                    an-tr="pd03_product finder:compare-epp product finder-cta-action" an-ca="content click"
                    an-ac="feature" an-la="pf product card:compare:reset"> Xóa
                    tất cả </button>
                <button class="cta cta--contained cta--black cta--disabled cta--compare js-pfv2-open-compare-layer"
                    an-tr="pd03_product finder:compare-epp product finder-cta-action" an-ca="content click"
                    an-ac="feature" an-la="pf product card:compare:view result">
                    So Sánh (<span class="current-cnt">0</span>/<span class="max-cnt">3</span>)
                </button>
            </div>
        </div>



        <div class="pd03-product-finder__snack-bar">
            <p class="pd03-product-finder__snack-bar-text">Loại sản phẩm có một không hai</p>


            <button class="cta cta--underline cta--white">
                Đóng
            </button>
        </div>
    </div>





    </div>
    </section>



    <!-- <div class="pd03-product-finder__quick-view-popup" role="dialog" aria-modal="true">
         </div> -->
    <div class="pd03-product-finder__quick-view-popup " role="dialog" aria-modal="true">
        <div class="layer-popup">
            <div class="layer-popup__inner">
                <div class="layer-popup__contents scrollbar">
                    <div class="scrollbar__wrap">
                        <div class="scrollbar__contents">
                            <div class="quick-view__contents"></div>
                        </div>
                    </div>

                    <div class="scrollbar-horizontal__track" style="display: none;">
                        <div class="scrollbar-horizontal__track-content">
                            <div class="scrollbar-horizontal__bar"></div>
                        </div>
                    </div>
                    <div class="scrollbar-vertical__track" style="display: none;">
                        <div class="scrollbar-vertical__track-content">
                            <div class="scrollbar-vertical__bar"></div>
                        </div>
                    </div>
                </div>

                <button type="button" class="layer-popup__close">
                    <span class="hidden">Layer Popup Close</span>
                    <svg class="icon" focusable="false" aria-hidden="true">
                        <use xlink:href="#cancel-close-regular" href="#cancel-close-regular"></use>
                    </svg>
                </button>
            </div>
        </div>
    </div>


    </div>



    <!-- <div class="component-area" style=""> -->

    <section class="pdd16-step-buying" id="pdd16-step-buying" style="display:none;">
        <div class="pdd16-step-buying__header">
            <div class="pdd16-step-buying__header-wrap">
                <div class="pdd16-step-buying__header-title">
                    <div class="image">
                        <img class="image__preview lazy-load responsive-img" data-desktop-src="" data-mobile-src=""
                            alt="" style="display: none;" data-src="">
                        <img class="image__main lazy-load responsive-img" data-desktop-src="" data-mobile-src=""
                            alt="" style="display: none;" data-src="">
                    </div>
                    <div class="pdd16-step-buying__header-text"><strong></strong>
                        <!-- <div class="pdd16-step-buying__tooltip"></div> -->
                    </div>
                    <div class="pdd16-step-buying__quantity">
                        <strong></strong>
                    </div>
                </div>
                <div class="pdd16-step-buying__add-on-list swiper-container basic-swiper swiper-container-initialized swiper-container-horizontal"
                    style="display:none;" aria-live="polite"
                    data-swiper-option="{
            &quot;componentEl&quot;:&quot;.pdd16-step-buying__add-on-list&quot;,
            &quot;keepWrapper&quot;: true,
            &quot;offSlideAccessibility&quot;:true,
            &quot;followFinger&quot;: false,
            &quot;slidesPerView&quot;:&quot;auto&quot;
          }">
                    <button type="button" class="swiper-button-prev">
                        <span class="hidden">Previous</span>
                        <svg class="icon" focusable="false" aria-hidden="true">
                            <use xlink:href="#previous-regular" href="#previous-regular"></use>
                        </svg>
                    </button>
                    <div class="swiper-wrapper" role="list" style="transition-duration: 0ms;">
                    </div>
                    <button type="button" class="swiper-button-next">
                        <span class="hidden">Next</span>
                        <svg class="icon" focusable="false" aria-hidden="true">
                            <use xlink:href="#next-regular" href="#next-regular"></use>
                        </svg>
                    </button>
                </div>
                <!-- (2022.08.11 수정) p.pdd16-step-buying__header-price-text => div 태그로 수정 -->
                <div class="pdd16-step-buying__header-price">
                    <div class="pdd16-step-buying__header-price-text">
                        <strong></strong>
                        <!-- (2022.08.11 수정) Was Price, Save Price 있는 경우 .pdd16-step-buying__header-price-save 추가 -->

                        <div class="pdd16-step-buying__header-price-save">
                            <del class="was-text"></del>
                            <span class="sale-text"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pdd16-step-buying__header__dummy" style="height: 0px;"></div>

        <!-- (2022.08.11 수정) .pdd16-step-buying__promotion-banner 추가 -->

        <div class="pdd16-step-buying__promotion-banner">
            <svg class="icon" focusable="false">
                <use xlink:href="#deal-bold" href="#deal-bold"></use>
            </svg>
            <p class="pdd16-step-buying__promotion-banner-text"></p>
        </div>
        <div class="pdd16-step-buying__contents">
            <h2 class="pdd16-step-buying__headline">Amazing additions</h2>
            <h3 class="pdd16-step-buying__sub-headline" style="display:none;"></h3>
            <div class="pdd16-step-buying__evoucher" style="display:none;">
                <div class="pdd16-step-buying__evoucher-wrap">
                    <ul class="pdd16-step-buying__evoucher-list">
                        <li class="pdd16-step-buying__evoucher-item">
                            <span class="pdd16-step-buying__evoucher-title">Đã chọn (<span>0</span>)</span>
                            <p class="pdd16-step-buying__evoucher-content" id="selectedItem"></p>
                            <input type="hidden" id="voucherTotal" value="0">
                        </li>
                        <li class="pdd16-step-buying__evoucher-item">
                            <span class="pdd16-step-buying__evoucher-title">Số dư eVoucher của tôi</span>
                            <p class="pdd16-step-buying__evoucher-content" id="voucherBalance"></p>
                        </li>
                        <li class="pdd16-step-buying__evoucher-item">
                            <span class="pdd16-step-buying__evoucher-title">Phí phụ thêm</span>
                            <p class="pdd16-step-buying__evoucher-content" id="voucherCharge"></p>
                        </li>
                    </ul>
                </div>
                <div class="pdd16-step-buying__evoucher-cta">
                    <button class="cta cta--underline cta--black cta--icon cta--clear-all" aria-label="Clear All">
                        Xoá hết
                        <svg class="icon" focusable="false">
                            <use xlink:href="#delete-bold" href="#delete-bold"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="pdd16-step-buying__tab-wrap">
                <div class="tab bg-light-gray" data-use-arrow="">
                    <div class="tab__left-arrow-wrap disabled">
                        <button class="tab__left-arrow" type="button" role="button" aria-label="previous">
                            <svg class="icon" focusable="false" aria-hidden="true">
                                <use xlink:href="#previous-regular" href="#previous-regular"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class="tab__list" role="tablist">
                        <li class="tab__item tab__item--active" role="presentation">
                            <button class="tab__item-title" role="tab" aria-selected="true"><span
                                    class="tab__item-line"></span></button>
                        </li>
                    </ul>
                    <div class="tab__right-arrow-wrap disabled">
                        <button class="tab__right-arrow" type="button" role="button" aria-label="next">
                            <svg class="icon" focusable="false" aria-hidden="true">
                                <use xlink:href="#next-regular" href="#next-regular"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pdd16-step-buying__card-wrap swiper-container basic-swiper swiper-container-initialized swiper-container-horizontal swiper-container-autoheight"
                    aria-live="polite"
                    data-swiper-option="{
          &quot;slidesPerView&quot;:1,
          &quot;autoHeight&quot;:true,
          &quot;pagination&quot;:false,
          &quot;componentEl&quot;:&quot;.pdd16-step-buying__card-wrap&quot;,
          &quot;watchOverflow&quot;:true,
          &quot;offTxtAccesibility&quot;:&quot;true&quot;
          }">
                    <div class="swiper-wrapper" style="transition: all 0ms ease-out 0s;">
                        <div class="pdd16-step-buying__tab pdd16-step-buying__2column swiper-slide" style="">
                            <div class="pdd16-step-buying__list-type">
                                <a class="btn-type on" aria-label="2column">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                        focusable="false">
                                        <path fill="none" d="M0 0H16V16H0z"
                                            transform="translate(-344 -388) translate(344 388)"></path>
                                        <g>
                                            <path
                                                d="M.764 0h3.822a.764.764 0 0 1 .764.764v3.822a.764.764 0 0 1-.764.764H.764A.764.764 0 0 1 0 4.586V.764A.764.764 0 0 1 .764 0z"
                                                transform="translate(-344 -388) translate(2 2) translate(344 388)">
                                            </path>
                                            <path
                                                d="M.764 0h3.822a.764.764 0 0 1 .764.764v3.822a.764.764 0 0 1-.764.764H.764A.764.764 0 0 1 0 4.586V.764A.764.764 0 0 1 .764 0z"
                                                transform="translate(-344 -388) translate(2 2) translate(344 394.649)">
                                            </path>
                                            <path
                                                d="M.764 0h3.822a.764.764 0 0 1 .764.764v3.822a.764.764 0 0 1-.764.764H.764A.764.764 0 0 1 0 4.586V.764A.764.764 0 0 1 .764 0z"
                                                transform="translate(-344 -388) translate(2 2) translate(350.65 388)">
                                            </path>
                                            <path
                                                d="M.764 0h3.822a.764.764 0 0 1 .764.764v3.822a.764.764 0 0 1-.764.764H.764A.764.764 0 0 1 0 4.586V.764A.764.764 0 0 1 .764 0z"
                                                transform="translate(-344 -388) translate(2 2) translate(350.65 394.649)">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <a class="btn-type" aria-label="1column">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                        focusable="false">
                                        <path fill="none" d="M0 0H16V16H0z"
                                            transform="translate(349 388) translate(-349 -388)"></path>
                                        <g>
                                            <path
                                                d="M.652 0h10.7A.681.681 0 0 1 12 .764v3.822a.681.681 0 0 1-.652.764H.652A.681.681 0 0 1 0 4.586V.764A.681.681 0 0 1 .652 0z"
                                                class="cls-2"
                                                transform="translate(344 388.732) translate(7 1.268) translate(-349 -388)">
                                            </path>
                                            <path
                                                d="M.652 0h10.7A.681.681 0 0 1 12 .764v3.822a.681.681 0 0 1-.652.764H.652A.681.681 0 0 1 0 4.586V.764A.681.681 0 0 1 .652 0z"
                                                class="cls-2"
                                                transform="translate(344 395.732) translate(7 1.268) translate(-349 -388)">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="scrollbar">
                                <div class="scrollbar__wrap">
                                    <div class="scrollbar__contents none-color-chip">
                                        <div class="pdd16-step-buying__view-more" style="display: none; height: 0px;">
                                            <button type="button" class="cta" aira-label="View more">
                                                <svg class="icon next" focusable="false">
                                                    <use xlink:href="#next-bold" href="#next-bold"></use>
                                                </svg>
                                                <span class="cta-text">Xem thêm</span>
                                                <svg class="icon down" focusable="false">
                                                    <use xlink:href="#open-down-bold" href="#open-down-bold"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="scrollbar-horizontal__track" style="display: none;">
                                    <div class="scrollbar-horizontal__track-content">
                                        <div class="scrollbar-horizontal__bar"></div>
                                    </div>
                                </div>
                                <div class="scrollbar-vertical__track" style="display: none;">
                                    <div class="scrollbar-vertical__track-content">
                                        <div class="scrollbar-vertical__bar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pdd16-step-buying__disclaimer" style="display:none">
                        <p></p>
                    </div>

                    <div class="pdd16-step-buying__footer">
                        <div class="pdd16-step-buying__footer-price">
                            <p class="pdd16-step-buying__footer-text"><strong>Total</strong>VAT Inclusive</p>
                            <p class="pdd16-step-buying__footer-sum"><strong></strong></p>
                        </div>

                    </div>
                    <div class="pdd16-step-buying__footer__dummy" style="height: 0px;"></div>
                </div>
            </div>
        </div>
        <!-- (2022.01.21 수정) .pdd16-step-buying__layer-learn-more 추가 -->


        <div class="pdd16-step-buying__layer-learn-more" role="dialog" tabindex="0" aria-modal="true"
            id="layerPopupLearnMore">
            <div class="layer-popup">
                <div class="layer-popup__inner">
                    <h2 class="layer-popup__title"></h2>
                    <div class="layer-popup__contents scrollbar">
                        <div class="scrollbar__wrap">
                            <div class="scrollbar__contents">
                                <div class="pdd16-step-buying__learn-more-images">
                                </div>
                                <div class="pdd16-step-buying__learn-more-content">
                                </div>
                            </div>
                        </div>

                        <div class="scrollbar-horizontal__track" style="display: none;">
                            <div class="scrollbar-horizontal__track-content">
                                <div class="scrollbar-horizontal__bar"></div>
                            </div>
                        </div>
                        <div class="scrollbar-vertical__track" style="display: none;">
                            <div class="scrollbar-vertical__track-content">
                                <div class="scrollbar-vertical__bar"></div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="layer-popup__close">
                        <span class="hidden">Layer Popup Close</span>
                        <svg class="icon" focusable="false" aria-hidden="true">
                            <use xlink:href="#delete-bold" href="#delete-bold"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section>

    <!--  </div> -->


    </div>
@endsection
