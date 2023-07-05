

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/common/cm-g-notice/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/common/cm-g-text-block-container/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/home/ho-g-category-hscroll/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/home/ho-g-home-kv-carousel/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/home/ho-g-showcase-card-tab/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/offer/of-g-feature-benefit-card/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/product/pd-g-feature-benefit-column-carousel/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/offer/pd-g-offer-product-card-list/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/home/ho-g-home-search/clientlibs/site.min.js')}}" async></script>

<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/components/content/consumer/global/common/cm-g-local-benefit/clientlibs/site.min.js')}}" async></script>
<script src="//assets.adobedtm.com/72afb75f5516/bc53d9be9281/launch-018bdc16e17d.min.js')}}" async></script>
<script src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-dependencies.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('/www.samsung.com/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/js/crypto-js.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="/etc.clientlibs/samsung/clientlibs/consumer/global/clientlib-common/resources/ie9/html5.js')}}"></script>
<![endif]-->
<!--[if lte IE 9]>
<script type='text/javascript'
        src='//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.3/jquery.xdomainrequest.min.js'></script>

<script type="application/ld+json" data-type="seo" data-object-type="WebPage"
    data-id="81a6baff-db14-4d0e-a5dd-ba2705c782bb">{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "Multi Store Homepage",
    "url": "https://www.samsung.com/vn/multistore/vn_doanhnghiepd/"
}
</script>
<script type="text/javascript">
var winhref = window.location.href.replace("/content/samsung", "").replace(".html", "/");
if (winhref.indexOf("?") > 0) {
    winhref = winhref.substring(0, winhref.indexOf("?"));
}
var siteCode = winhref.split("/")[3];

//depth Info.
var depth = winhref.split("/").length;
var depth_last = winhref.split("/")[depth - 1];
if (depth_last == "" || depth_last.charAt(0) == "?") {
    depth -= 1;
}

//set pathIndicator(not product page)
var pageName = "";
var depth_2 = "";
var depth_3 = "";
var depth_4 = "";
var depth_5 = "";

var digitalData = {
    "page": {
        "pageInfo": {
            "siteCode": "vn-epp",
            "pageName": pageName,
            "pageID": "L2NvbnRlbnQvc2Ftc3VuZy92bi9tdWx0aXN0b3JlL3ZuX2RvYW5obmdoaWVwZA==",
            "pageTrack": "epp home",
            "originPlaform": "web"
        },
        "pathIndicator": {
            "depth_2": depth_2,
            "depth_3": depth_3,
            "depth_4": depth_4,
            "depth_5": depth_5
        }
    },
    "user": {
        "userDeviceList": []
    },
    "product": {
        "category": "",
        "model_code": "", // PD class정보 이용하여 설정
        "model_name": "", // PD page(server-side)
        "displayName": "", // PD class정보 이용하여 설정
        "pvi_type_code": "", //PD page(server-side)
        "pvi_type_name": "", //PD page(server-side)
        "pvi_subtype_code": "", //PD page(server-side)
        "pvi_subtype_name": "",//PD page(server-side)
        "pd_type": "", //PD type
        "content_id": "",
        "products": "",
        "prodView": ""
    }
}
</script>

<script>
var commonNetFunnelUseYn = "N";
var commonNetFunnelJsStringArea = "SMS";
</script>


<script type="text/javascript">
;(function (win, doc, style, timeout) {
    var STYLE_ID = 'at-body-style';

    function getParent() {
        return doc.getElementsByTagName('head')[0];
    }

    function addStyle(parent, id, def) {
        if (!parent) {
            return;
        }

        var style = doc.createElement('style');
        style.id = id;
        style.innerHTML = def;
        parent.appendChild(style);
    }

    function removeStyle(parent, id) {
        if (!parent) {
            return;
        }

        var style = doc.getElementById(id);

        if (!style) {
            return;
        }

        parent.removeChild(style);
    }

    addStyle(getParent(), STYLE_ID, style);
    setTimeout(function () {
        removeStyle(getParent(), STYLE_ID);
    }, timeout);
}(window, document, "#home-kv {opacity: 0; !important}", 1500));
</script>

<script>
let isWebView = false

class ShopAppUtil {
    constructor(params) {
        let startT = new Date().valueOf();
        console.log("★ startTime:", startT);
        this.params = params;
        window.addEventListener("flutterInAppWebViewPlatformReady", (event) => {
            isWebView = true;
            let responseT = new Date().valueOf();
            console.log("★ responseTime:", responseT);
            console.log("★ responseTime-startTime:", responseT - startT);
            console.log("flutter InAppWebViewPlatformReady, web view:", isWebView);
            params.readyCallback()
        });
    }

    callHandler = (methodName, ...params) => {
        if (isWebView) {
            return window.flutter_inappwebview.callHandler(methodName, ...params)
        } else {
            return Promise.reject("Calling methodName: " + methodName + ", but webview not identified")
        }
    }
    logger = (info, value) => {
        this.params.logger && console.log(" " + info + " " + value + " ")
    }
    isWebView = () => {
        this.logger('Returning isWebView: ', isWebView)
        return isWebView
    }
    getAppVersionCode = () => new Promise((resolve, reject) => {
        this.callHandler('getAppVersionCode')
            .then(result => {
                this.logger("App version", result)
                resolve(result)
            })
            .catch(err => {
                this.logger("Error in App version", err)
                reject(err)
            })
    })
    triggerAnalytics = (data) => new Promise((resolve, reject) => {
        this.callHandler('OnAnalyticsEvent', data)
            .then(result => {
                this.logger("OnAnalyticsEvent Success", result)
                resolve(JSON.stringify(result))
            })
            .catch(err => {
                this.logger("Error in OnAnalyticsEvent", err)
                reject(err)
            })
    })
    openExternalBrowser = (url) => new Promise((resolve, reject) => {
        this.callHandler('openExternalBrowser', url)
            .then(result => {
                this.logger("openExternalBrowser Success", result)
                resolve(JSON.stringify(result))
            })
            .catch(err => {
                this.logger("Error in openExternalBrowser", err)
                reject(err)
            })
    })
    setupCloseForBack = (exit, confirm, hide, backCallback) => {
        this.callHandler('configureBackV2', exit, confirm, hide, backCallback)
            .then(function (result) {
                console.log(JSON.stringify(result));
            })
            .catch(function (err) {
                console.log("Error in configureBackV2", err)
            })
    }
    setupNormalBack = () => {
        this.callHandler('configureBackV2', false, false, false, '')
            .then(function (result) {
                console.log(JSON.stringify(result));
            })
            .catch(function (err) {
                console.log("Error in configureBackV2", err)
            })
    }
    getUserDetails = () => new Promise((resolve, reject) => {
        this.callHandler('getUserDetails', 'window.setUserDetails')
            .then(result => {
                this.logger("User Details", result)
                resolve(result)
            })
            .catch(err => {
                this.logger("Error in getUserDetails", err)
                reject(err)
            })
    })
    updateCartCount = (cartCount) => new Promise((resolve, reject) => {
        this.callHandler('updateCartCount', cartCount)
            .then(result => {
                this.logger("updated Cart Count", result)
                resolve(result)
            })
            .catch(err => {
                this.logger("Error in updateCartCount", err)
                reject(err)
            })
    })
    getToken = () => new Promise((resolve, reject) => {
        this.callHandler('getToken', false)
            .then(result => {
                this.logger("GetToken Success", result)
                resolve(result)
            })
            .catch(err => {
                this.logger("Error in getToken", err)
                reject(err)
            })
    })
    displayInAppReview = () => new Promise((resolve, reject) => {
        this.callHandler('displayInAppReview')
            .then(result => {
                this.logger("displayInAppReview success")
                resolve(result)
            })
            .catch(err => {
                this.logger("displayInAppReview failed")
                reject(err)
            })
    })
}

// [START log_event]
function logEvent(name, params) {
    if (!name) {
        return;
    }

    if (window.AnalyticsWebInterface) {
        // Call Android interface
        window.AnalyticsWebInterface.logEvent(name, JSON.stringify(params));
    } else if (window.webkit
        && window.webkit.messageHandlers
        && window.webkit.messageHandlers.firebase) {
        // Call iOS interface
        var message = {
            command: 'logEvent',
            name: name,
            parameters: params
        };
        window.webkit.messageHandlers.firebase.postMessage(message);
    } else {
        // No Android or iOS interface found
        console.log("No native APIs found.");
    }
}

// [END log_event]

// [START set_user_property]
function setUserProperty(name, value) {
    if (!name || !value) {
        return;
    }

    if (window.AnalyticsWebInterface) {
        // Call Android interface
        window.AnalyticsWebInterface.setUserProperty(name, value);
    } else if (window.webkit
        && window.webkit.messageHandlers
        && window.webkit.messageHandlers.firebase) {
        // Call iOS interface
        var message = {
            command: 'setUserProperty',
            name: name,
            value: value
        };
        window.webkit.messageHandlers.firebase.postMessage(message);
    } else {
        // No Android or iOS interface found
        console.log("No native APIs found.");
    }
}

// [END set_user_property]

/*
document.getElementById("event1").addEventListener("click", function() {
    console.log("event1");
    logEvent("event1", { foo: "bar", baz: 123 });
});

document.getElementById("event2").addEventListener("click", function() {
  console.log("event2");
    logEvent("event2", { size: 123.456 });
});

document.getElementById("userprop").addEventListener("click", function() {
    console.log("userprop");
    setUserProperty("userprop", "custom_value");
});
*/

</script>
<script>
console.log("[analytics.html] before !!window.flutter_inappwebview=" + !!window.flutter_inappwebview);
const hideHeaderFooterByWindowFlutterInappwebview = () => {
    console.log("[analytics.html] call hideHeaderFooterByWindowFlutterInappwebview !");
    //$('.gnb').hide();
    if (document.querySelector(".gnb") != null && document.querySelector(".gnb").style != null) {
        document.querySelector(".gnb").style.display = 'none';
    }

    if (document.querySelector(".nv00-gnb") != null && document.querySelector(".nv00-gnb").style != null) {
        document.querySelector(".nv00-gnb").style.display = 'none';
    }

    if (document.querySelector(".breadcrumb") != null && document.querySelector(".breadcrumb").style != null) {
        document.querySelector(".breadcrumb").style.display = 'none';
    }
    if (document.querySelector(".epp-breadcrumb") != null && document.querySelector(".epp-breadcrumb").style != null) {
        document.querySelector(".epp-breadcrumb").style.display = 'none';
    }
    if (document.querySelector(".footer-column") != null && document.querySelector(".footer-column").style != null) {
        document.querySelector(".footer-column").style.display = 'none';
    }
    if (("es" === "vn" || "de" === "vn") && document.querySelector(".footer-bottom") != null && document.querySelector(".footer-bottom").style != null) {
        document.querySelector(".footer-bottom").style.display = 'none';
    }
    if (document.querySelector(".footer-language") != null && document.querySelector(".footer-language").style != null) {
        document.querySelector(".footer-language").style.display = 'none';
    }
    if (document.querySelector(".footer-language__anchor") != null && document.querySelector(".footer-language__anchor").style != null) {
        document.querySelector(".footer-language__anchor").style.display = 'none';
    }
    if (document.querySelector(".footer-language-wrap") != null && document.querySelector(".footer-language-wrap").style != null) {
        document.querySelector(".footer-language-wrap").style.display = 'none';
    }
    if (document.querySelector(".footer-sns") != null && document.querySelector(".footer-sns").style != null) {
        document.querySelector(".footer-sns").style.display = 'none';
    }

    if (document.querySelector(".footer-terms") != null && document.querySelector(".footer-terms").style != null) {
        document.querySelector(".footer-terms").style.display = 'none';
    }

    if (document.querySelector("#teconsent") != null && document.querySelector("#teconsent").style != null) {
        document.querySelector("#teconsent").style.display = 'none';
    }

    if (document.querySelector("#QSIFeedbackButton-btn") != null && document.querySelector("#QSIFeedbackButton-btn").style != null) {
        document.querySelector("#QSIFeedbackButton-btn").style.display = 'none';
    }

    if (window.location.href.indexOf("/mypage/myproducts/") > -1 || window.location.href.indexOf("/mypage/myrepair/") > -1 || window.location.href.indexOf("/mypage/rewards/") > -1) {

        if (document.querySelector(".explore-lnb-navigation") != null && document.querySelector(".explore-lnb-navigation").style != null) {
            document.querySelector(".explore-lnb-navigation").style.display = 'none';
        }

        if (document.querySelector(".nv-g-lnb") != null && document.querySelector(".nv-g-lnb").style != null) {
            document.querySelector(".nv-g-lnb").style.display = 'none';
        }
    }

    if ("page-standard-pd" === "page-home" || "page-buying-pd" === "page-home" || "page-feature-pd" === "page-home") {
        if (document.querySelector(".pd-header-navigation__menu-epromoter-cta") != null && document.querySelector(".pd-header-navigation__menu-epromoter-cta").style != null) {
            document.querySelector(".pd-header-navigation__menu-epromoter-cta").style.display = 'none';
        }

        if (document.querySelector(".product-detail-kv__cta-epromotor") != null && document.querySelector(".product-detail-kv__cta-epromotor").style != null) {
            document.querySelector(".product-detail-kv__cta-epromotor").style.display = 'none';
        }
    } else if ("page-bc-pd" === "page-home") {
        document.querySelectorAll("#content .s-message-link").forEach(function (item) {
            item.style.display = "none";
        });
    }

    document.querySelectorAll("#content a[href$='.pdf'][target='_blank']").forEach(function (item) {
        item.removeAttribute('target');
    });

    window.sg.common.utils.visibleScroll();
}

let timerId = setInterval(() => {
    if (!!window.flutter_inappwebview) {
        console.log("[analytics.html] setInterval !");
        hideHeaderFooterByWindowFlutterInappwebview();
    }
}, 10);

setTimeout(() => {
    clearInterval(timerId);
    console.log("[analytics.html] STOP setInterval  !");
}, 20000);

let isInAppWebViewSessionStorage = sessionStorage.getItem('isInAppWebViewSessionStorage');
//hide header / footer ~
const setSessionStorage = () => {
    if (typeof isInAppWebViewSessionStorage != "undefined" && isInAppWebViewSessionStorage) {
        console.log("[analytics.html] isInAppWebViewSessionStorage=[" + isInAppWebViewSessionStorage + "]");
    } else {
        //notice : 최초 호출할때는 값이 없고 이후에만 유지되는지? 테스트
        console.log("[analytics.html] isInAppWebViewSessionStorage none!");
        //sessionStorage.set
        // readyCallback에서   세팅 (기존에 없는 경우만 세팅)
        sessionStorage.setItem('isInAppWebViewSessionStorage', "true");
    }
}

const readyCallback = () => {
    console.log("[analytics.html] call readyCallback() ");
    console.log("[analytics.html] after !!window.flutter_inappwebview=" + !!window.flutter_inappwebview);
    setSessionStorage();
}


let loadingCount = 0; //페이지가 재로딩 되는지? 체크하는
let isInAppWebView = false;
let shopAppUtilInstance = null;
//쿠키 체크 이후 정상(웹뷰가 판단)인 경우

//new ShopAppUtil
shopAppUtilInstance = new ShopAppUtil({
    logger: true,
    readyCallback: readyCallback
});

if (typeof shopAppUtilInstance != "undefined" && shopAppUtilInstance != null && shopAppUtilInstance.isWebView()) {
    //웹뷰에서 띄웠다고 했을때 처리
    //hideHeaderFooter;
    //이쪽 로직은 바로 응답이 안오고 시간차 오기 때문에 호출자체가 잘 안됨  ;;;
    let isInAppWebViewSessionStorageTemp = sessionStorage.getItem('isInAppWebViewSessionStorage');
    if (typeof isInAppWebViewSessionStorageTemp != "undefined" && isInAppWebViewSessionStorageTemp) {
        console.log("[analytics.html] isInAppWebViewSessionStorageTemp=[" + isInAppWebViewSessionStorageTemp + "]");
    } else {
        console.log("[analytics.html] isInAppWebViewSessionStorageTemp none!");
        //sessionStorage.set
        // readyCallback에서  에 세팅 (기존에 없는 경우만 세팅)
        sessionStorage.setItem('isInAppWebViewSessionStorageTemp', "true");
        localStorage.setItem('isInAppWebViewSessionStorageTemp', "true");
    }
    console.log("[analytics.html] call shopAppUtilInstance.isWebView() ");
    console.log("[analytics.html] shopAppUtilInstance.isWebView() [true]  loadingCount=[" + loadingCount + "]");
    console.log("[analytics.html] shopAppUtilInstance.getAppVersionCode()=[" + shopAppUtilInstance.getAppVersionCode() + "]");
} else {
    console.log("[analytics.html] shopAppUtilInstance.isWebView() [false]  loadingCount=[" + loadingCount + "]");
}


console.log("[analytics.html] shopAppUtilInstance.isWebView()=[" + shopAppUtilInstance.isWebView() + "]");

let isWebViewFlag = false;
window.addEventListener("flutterInAppWebViewPlatformReady", function (event) {
    isWebViewFlag = true;
    console.log("[analytics.html] flutter InAppWebViewPlatformReady  true!!");
});
if (!isWebViewFlag) {
    console.log("[analytics.html] flutter InAppWebViewPlatformReady  false!!");
}
if (isWebViewFlag) {
    let platform = window.flutter_inappwebview.callHandler('getPlatform');
    console.log("[analytics.html]  getPlatform=[" + platform + "]");
}
console.log("[analytics.html]  window.flutter_inappwebview=[" + window.flutter_inappwebview + "]");
loadingCount++;


//EMI 팝업에서 호출 확인 용
function hideModalEmipopup() {
    console.log("[from finance-popup.js] call hideModalEmipopup()!! ");
    $('#wrap > div.finance-popup > div > div > div > button').click();
}

function hideModalEmipopupConsole() {
    console.log("dummy [from finance-popup.js] call hideModalEmipopup()!! ");

}
</script>

<script>(window.BOOMR_mq = window.BOOMR_mq || []).push(["addVar", {
    "rua.upush": "false",
    "rua.cpush": "true",
    "rua.upre": "false",
    "rua.cpre": "false",
    "rua.uprl": "false",
    "rua.cprl": "false",
    "rua.cprf": "false",
    "rua.trans": "SJ-0873237d-7d73-4e77-8ba3-f78157c3b3ba",
    "rua.cook": "false",
    "rua.ims": "true",
    "rua.ufprl": "false",
    "rua.cfprl": "false",
    "rua.isuxp": "false",
    "rua.texp": "norulematch"
}]);</script>
<script>!function (a) {
    var e = "https://s.go-mpulse.net/boomerang/", t = "addEventListener";
    if ("False" == "True") a.BOOMR_config = a.BOOMR_config || {}, a.BOOMR_config.PageParams = a.BOOMR_config.PageParams || {}, a.BOOMR_config.PageParams.pci = !0, e = "https://s2.go-mpulse.net/boomerang/";
    if (window.BOOMR_API_key = "VRZKC-5BSTD-4EWS3-R2J59-B8GYB", function () {
        function n(e) {
            a.BOOMR_onload = e && e.timeStamp || (new Date).getTime()
        }

        if (!a.BOOMR || !a.BOOMR.version && !a.BOOMR.snippetExecuted) {
            a.BOOMR = a.BOOMR || {}, a.BOOMR.snippetExecuted = !0;
            var i, _, o, r = document.createElement("iframe");
            if (a[t]) a[t]("load", n, !1); else if (a.attachEvent) a.attachEvent("onload", n);
            r.src = "javascript:void(0)", r.title = "", r.role = "presentation", (r.frameElement || r).style.cssText = "width:0;height:0;border:0;display:none;", o = document.getElementsByTagName("script")[0], o.parentNode.insertBefore(r, o);
            try {
                _ = r.contentWindow.document
            } catch (O) {
                i = document.domain, r.src = "javascript:var d=document.open();d.domain='" + i + "';void(0);", _ = r.contentWindow.document
            }
            _.open()._l = function () {
                var a = this.createElement("script");
                if (i) this.domain = i;
                a.id = "boomr-if-as", a.src = e + "VRZKC-5BSTD-4EWS3-R2J59-B8GYB", BOOMR_lstart = (new Date).getTime(), this.body.appendChild(a)
            }, _.write("<bo" + 'dy onload="document._l();">'), _.close()
        }
    }(), "".length > 0) if (a && "performance" in a && a.performance && "function" == typeof a.performance.setResourceTimingBufferSize) a.performance.setResourceTimingBufferSize();
    !function () {
        if (BOOMR = a.BOOMR || {}, BOOMR.plugins = BOOMR.plugins || {}, !BOOMR.plugins.AK) {
            var e = "true" == "true" ? 1 : 0, t = "",
                n = "dnegahyxynyd4zfdyaca-f-1fcd94c66-clientnsv4-s.akamaihd.net", i = "false" == "true" ? 2 : 1,
                _ = {
                    "ak.v": "36",
                    "ak.cp": "154626",
                    "ak.ai": parseInt("293013", 10),
                    "ak.ol": "0",
                    "ak.cr": 81,
                    "ak.ipv": 4,
                    "ak.proto": "h2",
                    "ak.rid": "2f0ecfd",
                    "ak.r": 45472,
                    "ak.a2": e,
                    "ak.m": "x",
                    "ak.n": "essl",
                    "ak.bpcip": "27.72.96.0",
                    "ak.cport": 51566,
                    "ak.gh": "27.77.82.236",
                    "ak.quicv": "",
                    "ak.tlsv": "tls1.3",
                    "ak.0rtt": "",
                    "ak.csrc": "-",
                    "ak.acc": "",
                    "ak.t": "1688453124",
                    "ak.ak": "hOBiQwZUYzCg5VSAfCLimQ==TYNUW1dMUW7d0g89qDOaiOp2XCNdwSVEdxqD9cyTNcZXzTDh7GHxfFAPqlrDydtsupa7ROj8Dh/i4XOxhMYcyJ4YlF77x4wGPRoiB5nNiGuZKFVlLsAGzWlWJIKYzxb1dSHtONhrEn5AjoAe3pLvMiUHa/F3Go463KBWvelmlPEIQ70U0G6k25ZazHzeceWHApbiFD6Yc26Tb1YQmjOxddgnS6SqMO6qV56P5OECY77M81n4D1NXgjbIhfqo3UdHVVKO/JgY9aazuNGPzf9vjbDbhp1bobD6Si7XC+UWz7sTU8TVKd4YNX0GLaD7blK1TGZRBAGVS55IjgT9GMenH82zOB8plCloAODgVOrW2nClJ2zRqdLj1ScwkdDrVwkXpLvSy/vFeqXBP/twzrbro9jDMOLmD3MtvXi3iUlIPs8=",
                    "ak.pv": "3045",
                    "ak.dpoabenc": "",
                    "ak.tf": i
                };
            if ("" !== t) _["ak.ruds"] = t;
            var o = {
                i: !1, av: function (e) {
                    var t = "http.initiator";
                    if (e && (!e[t] || "spa_hard" === e[t])) _["ak.feo"] = void 0 !== a.aFeoApplied ? 1 : 0, BOOMR.addVar(_)
                }, rv: function () {
                    var a = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n", "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t", "ak.tf"];
                    BOOMR.removeVar(a)
                }
            };
            BOOMR.plugins.AK = {
                akVars: _, akDNSPreFetchDomain: n, init: function () {
                    if (!o.i) {
                        var a = BOOMR.subscribe;
                        a("before_beacon", o.av, null, null), a("onbeacon", o.rv, null, null), o.i = !0
                    }
                    return this
                }, is_complete: function () {
                    return !0
                }
            }
        }
    }()
}(window);</script>
<script>
var isInIframe = (window.location != window.top.location);
var isNotDotcom = (window.location.href.indexOf('samsung.com') < 0);
var isTopNotDotcom = (window.top.location.href.indexOf('samsung.com') < 0);

//404 페이지에서는 실행하지 않음.
if (window.location.href.indexOf('404') < 0 && isTopNotDotcom) {
    if (isInIframe == true) {
        console.log('isInIframe =' + isInIframe);
        //에러 페이지 이동  self.location.href   /"+siteCd+"/common/404.html
        window.location.href = '/vn/common/404.html';
    } else {
        console.log('isInIframe =' + isInIframe);
    }
}
</script>
