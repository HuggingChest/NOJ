<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | @yield('site')</title>
    <!-- Copyright Information -->
    <meta name="author" content="<{$version_info['author']}>">
    <meta name="organization" content="<{$version_info['organization']}>">
    <meta name="developer" content="<{$version_info['developer']}>">
    <meta name="version" content="<{$version_info['version']}>">
    <meta name="subversion" content="<{$version_info['subversion']}>">
    <!-- Necessarily Declarations -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="<{$ATSAST_CDN}>/img/atsast/favicon.png">
    <!-- Loading Style -->
    <style>
    loading > div{
        text-align: center;
    }
    loading p{
        font-weight:100;
    }
    loading{
        display:flex;
        z-index:999;
        position:fixed;
        top:0;
        bottom:0;
        right:0;
        left:0;
        justify-content:center;
        align-items:center;
        background: #f5f5f5;
        transition:.2s ease-out .0s;
        opacity:1;
    }

    .lds-ellipsis {
        display: inline-block;
        position: relative;
        width: 64px;
        height: 64px;
    }
    .lds-ellipsis div {
        position: absolute;
        top: 27px;
        width: 11px;
        height: 11px;
        border-radius: 50%;
        background: rgba(0,0,0,.54);
        animation-timing-function: cubic-bezier(0, 1, 1, 0);
    }
    .lds-ellipsis div:nth-child(1) {
        left: 6px;
        animation: lds-ellipsis1 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(2) {
        left: 6px;
        animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(3) {
        left: 26px;
        animation: lds-ellipsis2 0.6s infinite;
    }
    .lds-ellipsis div:nth-child(4) {
        left: 45px;
        animation: lds-ellipsis3 0.6s infinite;
    }
    @keyframes lds-ellipsis1 {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
    @keyframes lds-ellipsis3 {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
    }
    @keyframes lds-ellipsis2 {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(19px, 0);
        }
    }
    </style>
</head>

<body>
    <!-- Loading -->
    <loading>
        <div>
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p>ATSAST疯狂加载中……</p>
        </div>
    </loading>
    <!-- Style -->
    <link rel="stylesheet" href="https://fonts.geekzu.org/css?family=Roboto:300,300i,400,400i,500,500i,700,700i">
    <link rel="stylesheet" href="<{$ATSAST_CDN}>/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="<{$ATSAST_CDN}>/css/wemd-color-scheme.css">
    <link rel="stylesheet" href="<{$ATSAST_CDN}>/css/atsast.css">
    <link rel="stylesheet" href="<{$ATSAST_CDN}>/fonts/MDI-WXSS/MDI.css">
    <link rel="stylesheet" href="<{$ATSAST_CDN}>/fonts/Devicon/devicon.css">
    <!-- Background -->
    <div class="mundb-background-container">
        <img src="<{$bg}>">
    </div>
    <{include file="navbar.html" }>
    <{include file=$__template_file}>
    <{include file="footer.html" }>
    <script src="<{$ATSAST_CDN}>/js/jquery-3.2.1.min.js"></script>
    <script src="<{$ATSAST_CDN}>/js/popper.min.js"></script>
    <script src="<{$ATSAST_CDN}>/js/snackbar.min.js"></script>
    <script src="<{$ATSAST_CDN}>/js/bootstrap-material-design.js"></script>
    <script>
        $(document).ready(function () { $('body').bootstrapMaterialDesign(); });
        window.addEventListener("load",function() {

            // compatable with proxy

            $.each($("a"),function(i,link){
                $(link).attr("href",$(link).attr("href").replace(/https:\/\/static.1cf.co/gi,'<{$ATSAST_CDN}>'));
                // link.href=link.href.replace(/https:\/\/static.1cf.co/gi,'<{$ATSAST_CDN}>'); 
            });

            $.each($("img"),function(i,image){
                $(image).attr("src",$(image).attr("src").replace(/https:\/\/static.1cf.co/gi,'<{$ATSAST_CDN}>'));
                // image.src=image.src.replace(/https:\/\/static.1cf.co/gi,'<{$ATSAST_CDN}>'); 
            });

            $('loading').css({"opacity":"0","pointer-events":"none"});

            // Console Text

            var consoleSVG = "data:image/svg+xml,<svg version='1.1' id='Ebene_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='600px' height='100px' viewBox='0 0 600 100'> <style type='text/css'> <![CDATA[ text %7B filter: url(%23filter); fill: black; font-family: 'Share Tech Mono', consolas, sans-serif; font-size: 100px; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; %7D ]]> </style> <defs> <filter id='filter'> <feFlood flood-color='white' result='black' /> <feFlood flood-color='red' result='flood1' /> <feFlood flood-color='limegreen' result='flood2' /> <feOffset in='SourceGraphic' dx='3' dy='0' result='off1a'/> <feOffset in='SourceGraphic' dx='2' dy='0' result='off1b'/> <feOffset in='SourceGraphic' dx='-3' dy='0' result='off2a'/> <feOffset in='SourceGraphic' dx='-2' dy='0' result='off2b'/> <feComposite in='flood1' in2='off1a' operator='in' result='comp1' /> <feComposite in='flood2' in2='off2a' operator='in' result='comp2' /> <feMerge x='0' width='100%25' result='merge1'> <feMergeNode in = 'black' /> <feMergeNode in = 'comp1' /> <feMergeNode in = 'off1b' /> <animate attributeName='y' id = 'y' dur ='4s' values = '104px; 104px; 30px; 105px; 30px; 2px; 2px; 50px; 40px; 105px; 105px; 20px; 6%C3%9Fpx; 40px; 104px; 40px; 70px; 10px; 30px; 104px; 102px' keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1' repeatCount = 'indefinite' /> <animate attributeName='height' id = 'h' dur ='4s' values = '10px; 0px; 10px; 30px; 50px; 0px; 10px; 0px; 0px; 0px; 10px; 50px; 40px; 0px; 0px; 0px; 40px; 30px; 10px; 0px; 50px' keyTimes = '0; 0.362; 0.368; 0.421; 0.440; 0.477; 0.518; 0.564; 0.593; 0.613; 0.644; 0.693; 0.721; 0.736; 0.772; 0.818; 0.844; 0.894; 0.925; 0.939; 1' repeatCount = 'indefinite' /> </feMerge> <feMerge x='0' width='100%25' y='60px' height='65px' result='merge2'> <feMergeNode in = 'black' /> <feMergeNode in = 'comp2' /> <feMergeNode in = 'off2b' /> <animate attributeName='y' id = 'y' dur ='4s' values = '103px; 104px; 69px; 53px; 42px; 104px; 78px; 89px; 96px; 100px; 67px; 50px; 96px; 66px; 88px; 42px; 13px; 100px; 100px; 104px;' keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 0.548; 0.577; 0.613; 1' repeatCount = 'indefinite' /> <animate attributeName='height' id = 'h' dur = '4s' values = '0px; 0px; 0px; 16px; 16px; 12px; 12px; 0px; 0px; 5px; 10px; 22px; 33px; 11px; 0px; 0px; 10px' keyTimes = '0; 0.055; 0.100; 0.125; 0.159; 0.182; 0.202; 0.236; 0.268; 0.326; 0.357; 0.400; 0.408; 0.461; 0.493; 0.513; 1' repeatCount = 'indefinite' /> </feMerge> <feMerge> <feMergeNode in='SourceGraphic' /> <feMergeNode in='merge1' /> <feMergeNode in='merge2' /> </feMerge> </filter> </defs> <g> <text x='0' y='100'>AT SAST</text> </g> </svg>";
            var consoleCSS = "background: url(\"" + consoleSVG + "\") left top no-repeat; font-size: 100px;line-height:140px;";
            console.log('%c       ', consoleCSS);
            console.info("ATSAST - Auxiliary Teaching for SAST\n\nAuthor: <{$version_info['author']}>\nOrganization: <{$version_info['organization']}>\nDeveloper: <{$version_info['developer']}>\nVersion: <{$version_info['version']}>\nVersion Number: <{$version_info['subversion']}>\n");

        }, false);
    </script>
</body>

</html>