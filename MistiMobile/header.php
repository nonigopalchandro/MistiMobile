<html>
<head>
<title><?php wp_title();?></title>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4489213123493800",
    enable_page_level_ads: true
  });
</script>
<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<meta name="description" content="<?php the_excerpt_rss(); ?>
<?php csv_tags(); ?>
<?php endwhile; endif; elseif(is_home()) : ?>
</meta><meta name="description" content="<?php bloginfo('description'); ?>
<?php endif; ?>

<link rel='stylesheet' id='crayon-css'  href='http://howtrick.com/wp-content/plugins/crayon-syntax-highlighter/css/min/crayon.min.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='crayon-theme-classic-css'  href='http://howtrick.com/wp-content/plugins/crayon-syntax-highlighter/themes/classic/classic.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='crayon-font-monaco-css'  href='http://howtrick.com/wp-content/plugins/crayon-syntax-highlighter/fonts/monaco.css?ver=_2.7.2_beta' type='text/css' media='all' />
<link rel='stylesheet' id='pp-bootstrap-css'  href='http://howtrick.com/wp-content/plugins/ppress/assets/css/flat-ui/bs/css/bs.css?ver=4.7' type='text/css' media='all' />
<link rel='stylesheet' id='pp-flat-ui-css'  href='http://howtrick.com/wp-content/plugins/ppress/assets/css/flat-ui/css/flat-ui.css?ver=4.7' type='text/css' media='all' />
<link rel='stylesheet' id='ppcore-css'  href='http://howtrick.com/wp-content/plugins/ppress/assets/css/ppcore.css?ver=4.7' type='text/css' media='all' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://howtrick.com/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel='stylesheet' id='sneeit-sneeit-css'  href='http://howtrick.com/wp-content/plugins/sneeit-framework/css/sneeit.css?ver=2.2' type='text/css' media='all' />
<script type='text/javascript' src='http://howtrick.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://howtrick.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var CrayonSyntaxSettings = {"version":"_2.7.2_beta","is_admin":"0","ajaxurl":"http:\/\/howtrick.com\/wp-admin\/admin-ajax.php","prefix":"crayon-","setting":"crayon-setting","selected":"crayon-setting-selected","changed":"crayon-setting-changed","special":"crayon-setting-special","orig_value":"data-orig-value","debug":""};
var CrayonSyntaxStrings = {"copy":"Press %s to Copy, %s to Paste","minimize":"Click To Expand Code"};
/* ]]> */
</script>
<script type='text/javascript' src='http://howtrick.com/wp-content/plugins/crayon-syntax-highlighter/js/min/crayon.min.js?ver=_2.7.2_beta'></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=1.3" />
            <link rel="preload" href="http://ads.servebom.com/tmnhead.js" as="script"/>
    <link rel="preload" href="http://fonts.googleapis.com/css?family=Slabo+27px" as="style"/>
    <link rel="preload" href="http://img.wonderhowto.com/css/fonts-and-styles.woff2.bundle.min.css?v=1024201602" as="style"/>
    <link rel="preload" href="http://img.wonderhowto.com/js/ready.min.js?v=1024201602" as="script"/>
    <link rel="preload" href="http://img.wonderhowto.com/img/83/88/63616534655223/0/wonderhowto.b300x140.jpg" as="image"/>
        <link rel="preload" href="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" as="script" />
        <link rel="preload" href="http://img.wonderhowto.com/js/set.min.js?v=1024201602" as="script" />
        <link rel="preload" href="http://img.wonderhowto.com/js/go.min.js?v=1024201602" as="script" />

    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0,user-scalable=no"/>
        <script type="text/javascript">
        //<![CDATA[
        window._sf_startpt = (new Date()).getTime();
        var tmntag = tmntag || {}; tmntag.cmd = tmntag.cmd || [];
        
        (function (a) { _q = function () { return a; }; $ = function (f) { typeof f === "function" && a.push(arguments); return $; }; jQuery = $.ready = $; }([]));
        (function () {
            // callback format: callback(oElement, sSrc, bSuccess, bFromCache){}
            window.preloadImage = function (element, src, callback, skipCacheCheck) {
                var c = callback;
                if (skipCacheCheck !== true) { var t = document.createElement('img'); t.src = src; if (t.complete || t.width + t.height > 0) { t = null; if (callback) callback(element, src, true, true); return; } t = null; }
                var i = new Image();
                i.onload = function () { i.onload = i.onerror = i.onabort = null; if (callback) callback(element, i.src, true, false); i = null; };
                i.onerror = i.onabort = function () { i = i.onload = i.onerror = i.onabort = null; if (callback) callback(element, src, false, false); i = null; };
                i.src = src;
            };
        })();

        
            (function (WHT) { WHT.___pOpts = { type: 'homepage', pageSize: 0, kw: ["wonderhowto.com","WonderHowTo"], enableCloning: false, cloneOneAtATime: false, maxClone: 0, iForceRefreshIfUnfilledAfterSeconds: 15, iMinAgeForBlankVisiblePlacementRefresh: 6, speedyRefresh: false }; })(window.WHT = window.WHT || {});
                
                    (function() { 
                        var tmnhead = document.createElement('script'); tmnhead.async = true; tmnhead.type = 'text/javascript'; tmnhead.src = 'http://ads.servebom.com/tmnhead.js';
                        var node = document.getElementsByTagName('script')[0]; node.parentNode.insertBefore(tmnhead, node);
                    })();
                
        document.documentElement.className = '';
        //]]>
    </script>
    <link href="http://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://img.wonderhowto.com/css/fonts-and-styles.woff2.bundle.min.css?v=1024201602" type="text/css" />

</head>
<body class="theme-wh isworld is-world world-name-wonderhowto.com short-header controller-home action-index isnotuser" vocab="http://schema.org/">
    <header>
        <div id="header-offset" class="clearfix"><div></div></div>
        <div id="top-header" class="page-header header-height full-page-width">
            <div id="header-bg-image" class="header-bg header-height full-page-width immediate" style="background-image:url(http://img.wonderhowto.com/img/83/88/63616534655223/0/wonderhowto.b300x140.jpg);"></div>
                <div class="featured-story-anchor full-page-width">
                    <div class="center-frame featured-story">
                        <em>Featured Story</em><span class="hide">:</span>
                        <strong><span><a id="featured-story" href="http://android.wonderhowto.com/news/galaxy-s8-rumor-roundup-heres-latest-samsungs-upcoming-flagship-0175266/">Galaxy S8 Rumor Roundup—Here&#39;s the Latest on Samsung&#39;s Upcoming Flagship</a></span></strong>
                    </div>
                </div>
        </div>
        <div class="init">
            <!-- Preload header image -->
            <script type="text/javascript">
                //<![CDATA[
                (function (d) {
                    window.rxMatchDomain = /^http\:\/\/([a-z0-9-]+)\.(wonderhowto|foodhacksdaily|gadgethacks)\.com/i;
                    var sDN = function (u, s, rx) { rx = rxMatchDomain.exec(u); window['_WHT_' + s + 'sdn'] = rx == null ? '' : rx[1]; window['_WHT_' + s + 'tdn'] = rx == null ? '' : rx[2]; }, bDidJump = false,
                        sbbg = 'http://img.wonderhowto.com/img/83/88/63616534655223/0/wonderhowto.b300x140.jpg',
                        sfbg = 'http://img.wonderhowto.com/img/83/88/63616534655223/0/wonderhowto.1280x600.jpg';
                    sDN(document.location, 'c'); sDN(document.referrer, 'r');
                    window._RefInSite = (_WHT_ctdn === _WHT_rtdn && _WHT_csdn === _WHT_rsdn);
                    window._RefInNetwork = (_WHT_rtdn !== '');
                })(document.getElementById('header-bg-image'));
                //]]>
            </script>
        </div>
        <div id="top-nav" class="full-page-width small-logo immediate">
            <div class="center-frame" style="height:0;">
                <div id="locked-toolbar" class="locked-toolbar-block"></div>
                <div class="nav-menu-block">
                    <div class="shade immediate"></div>
                    <div class="logo-block">
                        <h1 class="site-logo">
                        <a class="logo" href="http://howtrick.com/">
                            HowTrick
                            <img class="immediate" src="http://howtrick.com/wp-content/themes/SELSF_MBL/images/HowTrick.Com.png" width="300" height="122"/>
                        </a>
                        </h1>
                    </div>
                    <div class="menu-buttons">
                        <button type="button" class="nav-button nav-menu-toggle fa fa-bars"></button>
                        <button type="button" class="nav-button nav-search-toggle fa fa-search"></button>
                    </div>
                    <form action="http://www.wonderhowto.com/search/" method="GET" class="search-form">
                        <input type="search" id="searchbox" placeholder="Search" class="search-box" name="searchText" value="">
                        <button type="submit" class="search-submit"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="top-nav-init">
            <script type="text/javascript">
                (function(){
                    window.waitForFont = function (fCallback, fontClass, oCallBackScope) {
                        window.waitForFont.fonts = window.waitForFont.fonts || {};
                        if (window.waitForFont.fonts[fontClass || 'default']) { if (oCallBackScope) fCallback.apply(oCallBackScope, []); else fCallback(); return; }
                        var fc = document.createElement('span'), w, to = null,retries=0;
                        fc.className = 'font-load-check' + (fontClass?' '+fontClass:'');
                        document.body.appendChild(fc);w = fc.offsetWidth;fc.className += ' check';
                        var fCheck = function () {
                            if (to != null) clearTimeout(to); to = null;
                            if (++retries > 3000) return;
                            if (fc && fc.offsetWidth != w) { window.waitForFont.fonts[fontClass || 'default'] = true; fc.parentNode.removeChild(fc); fc = null; if(oCallBackScope) fCallback.apply(oCallBackScope,[]); else fCallback(); return; }
                            to = setTimeout(fCheck, 10);
                        };
                        fCheck();
                    };
                })();
                (function(e,s,a,m,t,T,p) {
                    var e = document.getElementById('asw'), s = 42;
                    if (e == null) return; a = e.getElementsByTagName('a'); if (a.length == 0) return; a = a[0]; m = s;
                    a.style.visibility = 'hidden';
                    a.style.fontSize = String(s) + 'px';
                    window._fixSWN = function () {
                        if (document.getElementById('top-nav').className.indexOf('small-logo') > -1) { a.style.visibility = ''; return; }
                        a.style.visibility = ''; t = String(a.innerText); T = '', p = t.indexOf(' ') > -1;
                        if (t.length > 18) a.style.letterSpacing = 0;
                        if (t.length < 10 || !p) {
                            for (var x = 0; x < t.length; x++) T += t.charAt(x) + ((t.charAt(x) == ' ') ? '&nbsp; &nbsp; ' : ' ');
                            a.style.wordSpacing = '-0.3em';
                            a.style.letterSpacing = 0;
                            if (p) { e.style.width = '230px'; e.style.paddingRight = '30px'; }
                            a.innerHTML = T.substring(0, T.length - 1);
                        }
                        while (a.scrollHeight > ((m + 2) * 2) && s > 8) a.style.fontSize = String(--s) + 'px';
                    };waitForFont(window._fixSWN);
                })();
            </script>
        </div>
    </header>
   <section class="page-wrapper">
<div id="main-wrapper" class="clearfix">
<div id="content" class="center-frame">
<div id="content-container" class="site-home-page world-home-page reversed">
<div class="right-col padded">
<div class="home-section">
</div>   
</div>

<footer>
<div id="sidebars">
<div class="sidebar sidebar-nav-menu">
<div class="center-frame">
<div class="menu">
<div class="sidebar-pad">
<ul>
<li>
<span class="menu-section-heading">User Panel</span>
<ul>
<li><a href="http://howtrick.com/login/">Login</a></li>
<li><a href="http://howtrick.com/sign-up/">Signup</a></li>
</ul>
<span class="menu-section-heading">Pages</span>
<ul>
<li><a href="http://howtrick.com/privacy/"><strong>Privacy</strong></a></li>
<li>
<a href="http://howtrick.com/contact-us/">Contact Us</a>
</li>
<li>
<a href="http://howtrick.com/about/">About</a>
</li>
</ul>
</li>
<li>
<span class="menu-section-heading">Categories</span>
<ul>
<li><a href="http://howtrick.com/related/seo-tutorials/">SEO Tutorials</a></li>
<li><a href="http://howtrick.com/related/wordpress/">WordPress Tips</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<aside class="whtaph whtaph-skin" data-unit-type="skin"></aside>
</footer>
                <div id="foot-init" class="clearfix">
                <script type="text/javascript" src="http://img.wonderhowto.com/js/ready.min.js?v=1024201602"></script>
    <!--[if lt IE 7 ]><link rel="stylesheet" href="http://img.wonderhowto.com/css/jquery.jgrowl.ie6.css?v=1024201602" type="text/css"/><![endif]-->
    <!--[if lt IE 9 ]><link rel="stylesheet" href="http://img.wonderhowto.com/css/ie.css?v=1024201602" type="text/css"/><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">if(!window.jQuery) document.write('<'+'scr'+'ipt type="text/javascr'+'ipt" src="http://img.wonderhowto.com/js/libs/jquery-1.7.min.js?v=1024201602"><'+'/scri'+'pt>');</script>
        <script src="http://img.wonderhowto.com/js/set.min.js?v=1024201602" type="text/javascript"></script>
        <script src="http://img.wonderhowto.com/js/go.min.js?v=1024201602" type="text/javascript"></script>
   
        <script src="http://img.wonderhowto.com/js/done.min.js?v=1024201602" type="text/javascript"></script>
 <script type="text/javascript">
        //<![CDATA[
        WHT.init({
            loggedInUser:{"UserID":0,"UserName":"not_logged_in","DisplayName":"not_logged_in","UserBio":"","IsAdmin":false,"IsStaff":false,"IsUser":false,"IsCurator":false,"CanEdit":false,"cd":0,"UserCommentScore":0,"KudosCount":0,"KudosPower":0,"JudgementPower":0,"ReputationCount":0,"ResponseCount":0,"ImageID":"user_default_large.jpg"},currentWorld:{"IsCategoryOrSubCategoryWorld":false,"WorldID":1470,"WorldName":"WonderHowTo","Description":"Delivering the zeitgeist\u0027s most delightful how-tos, hacks, pro-tips, and insider secrets.","Slogan":"Fresh hacks for a changing world","UrlName":"wonderhowto.com","CreatedByUserID":32,"CreatedByUserName":"bryan","CreatedByUserDisplayName":"Bryan Crow","CreatedByUserImage":"634470464421918830.jpg","CreatedByUserGender":1,"CreatedByUserImagePath":"/userimages/634470464421918830.jpg","CreatedByUserProfilePath":"http://wwwwonderhowto.com/community/member/bryan/","CreatedDate":"\/Date(1262332800000)\/","LastUpdated":"\/Date(1410177810460)\/","HeaderGraphic":"636165346552238388","HeaderHeight":0,"HeaderColor":"      ","ShowHeaderText":true,"LargeImage":"636165346552238388","Image":"636165346552238388","TwitterUrl":"","FacebookUrl":"","GooglePlusUrl":"","HowToSubCategoryMode":0,"InspirationSubCategoryMode":0,"RootDomainName":"wonderhowto.com","FullDomainName":"wonderhowto.com","FullWWWDomainName":"www.wonderhowto.com","HasChildWorlds":true,"HasOwnDomain":true,"AllowUserPosts":true,"ChannelID":2,"CategoryID":19,"MemberCount":2,"ContributorCount":2,"PostCount":0,"ChildLevel":0,"ImageID":"636165346552238388","CoverImage":"636165346552238388"},alerts:[],ajaxControllerURL:'/ajax/',urlBase:'http://www.wonderhowto.com',imgUrlBase:'http://img.wonderhowto.com',imgFormats:["1014x174","w974","974x232","1920x1080","1280x600","1280x220","960x540","664x250","654x306","w532","w302","w240","w654","w728","w1456","300x380","300x200","300x140","250x188","236x160","225x113","200x150","200x113","191x89","190x88","186x86","w160","150x190","150x70","146x68","135x180","100x47","88x68","w88","65x30","64x50","62x83","62x29","51x68","48x64","42x56","32x43","18x24","16x16","b300x169","b300x140","b654x306","b300x52","original"],activeBrowseBase:'',hero: {id:175266,title:"Galaxy S8 Rumor Roundup—Here\'s the Latest on Samsung\'s Upcoming Flagship",img:"http://img.wonderhowto.com/img/83/88/63616534655223/0/wonderhowto.1280x600.jpg"},rootHero: {id:175266,title:"Galaxy S8 Rumor Roundup—Here\'s the Latest on Samsung\'s Upcoming Flagship",img:"http://img.wonderhowto.com/img/83/88/63616534655223/0/wonderhowto.1280x600.jpg"},rootDomains:["wonderhowto.com","reality.news"]
        });

        // Second part of jquery loading
        (function (i, s, q, l) { for (q = window._q(), l = q.length; i < l;) { $.apply(this, s.call(q[i++])); } window._q = undefined; }(0, Array.prototype.slice));

        //]]>
    </script>
    
    <!--[if lt IE 7 ]><script type="text/javascript" src="http://img.wonderhowto.com/js/libs/dd_belatedpng.js"></script><script type="text/javascript">DD_belatedPNG.fix('img, .png_bg');</script><![endif]-->
    <script type="text/javascript">
        //<![CDATA[
        // Manually trigger jQuery ready to speed up page init:
        setTimeout(function () { $.ready(); }, 0);
        //]]>
    </script>

        </div>