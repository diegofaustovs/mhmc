@extends('index')

@section('content')
    {{--<body class="homepage">--}}
    {{--<div id="page-wrapper">--}}
        <body class="loading">

        <div id="preload">
            <img src="images/header.jpg">
            <img src="images/16.jpg">
            <img src="images/16-2.jpg">
            <img src="images/whooriginal.jpg">
            <img src="images/what.jpg">
        </div>

        <main>

        {{--<!-- Header -->--}}
        {{--<div id="header" data-center="background-position: 50% 0px;"--}}
             {{--data-top-bottom="background-position: 50% -200px;"--}}
             {{--data-anchor-target="#header">--}}

            {{--<!-- Inner -->--}}
            {{--<div class="inner" data-center="opacity: 1"--}}
                 {{--data-20-top="opacity: 0"--}}
                 {{--data-anchor-target="#logoImg">--}}
                {{--<image id="logoImg" class="logo" src="../images/logohome.png"></image>--}}
                {{--<footer>--}}
                    {{--<a href="#banner"><i class="logo fa fa-angle-down fa-5x"></i></a>--}}
                {{--</footer>--}}

            {{--</div>--}}


            @include('header')

        {{--</div>--}}

        {{--<section id="infowhat" class="wrapper style1">--}}
            {{--<div class="infowhat1" data-center="opacity: 1;"--}}
                 {{--data-10p-top="opacity: 0;"--}}
                 {{--data-anchor-target="#infowhat">--}}
            {{--</div>--}}
            {{--<div class="infowhat2"  data-center="opacity: 0; "--}}
                 {{--data-10p-top="opacity: 1;"--}}
                 {{--data-anchor-target="#infowhat">--}}
            {{--</div>--}}
            {{--<div id="infowhat3" class="contenido container special" data-center="opacity: 0; top:80%"--}}
                 {{--data-top-bottom="opacity: 1; top:110%"--}}
                 {{--data-anchor-target="#header">--}}
                {{--<header>--}}
                    {{--<h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>--}}
                {{--</header>--}}
                {{--<p style="text-align: center">--}}
                    {{--{{Lang::get('home.what')}}--}}
                {{--</p>--}}
            {{--</div>--}}
        {{--</section>--}}

        {{--<section id="infowho" class="wrapper style1">--}}
            {{--<div class="contenido container special">--}}
                {{--<header>--}}
                    {{--<h2 class="titulo">{{Lang::get('home.whoTitle')}}</h2>--}}
                {{--</header>--}}
                {{--<p style="text-align: center">--}}
                    {{--{{Lang::get('home.who')}}--}}
                {{--</p>--}}
                {{--<footer>--}}
                {{--</footer>--}}
            {{--</div>--}}
        {{--</section>--}}

        <section id="slide-1" class="homeSlide">
            <div class="bcg"
                 data-center="background-position: 50% 0%;"
                 data-top-bottom="background-position: 50% -25%;"
                 data-anchor-target="#slide-1"
                    >
                <div class="hsContainer">
                    <div class="hsContent" data-center="opacity: 1" data-top="opacity: 0" data-anchor-target="#logoImg">
                        <div class="logoImg">
                            <image id="logoImg" class="logo" src="../images/logohome4.png"></image>
                        </div>
                        <div class="flecha" style="left: 50%;">
                            <i class="logo fa fa-angle-down fa-5x" style="color:#fff"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="slide-2" class="homeSlide">
            <div class="bcg"
                 data-center="background-position: 50% 5%;"
                 data-top-bottom="background-position: 50% -25%;"
                 data-bottom-top="background-position: 50% 25%;"
                 data-anchor-target="#slide-2"
                    >
                <div class="hsContainer">
                    <div class="hsContent" data-center="opacity: 1" data-center-top="opacity: 0" data--100-bottom="opacity: 0;" data-anchor-target="#slide-2">
                        {{--<h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>--}}
                        <div class="s2">
                            <h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>
                            <p style="text-align: center">
                            {{Lang::get('home.what')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="slide-3" class="homeSlide">
            <div class="bcg"
                 data-center="background-position: 50% 0%;"
                 data-top-bottom="background-position: 50% -25%;"
                 data-bottom-top="background-position: 50% 25%;"
                 data-anchor-target="#slide-3"
                    >
                <div class="hsContainer">
                    <div class="hsContent" data-center="opacity: 1" data-center-top="opacity: 0" data--100-bottom="opacity: 0;" data-anchor-target="#slide-3">
                        {{--<h2 class="titulo">{{Lang::get('home.whatTitle')}}</h2>--}}
                        <div class="s2">
                            <h2 class="titulo">{{Lang::get('home.whoTitle')}}</h2>
                            <p style="text-align: center">
                                {{Lang::get('home.who')}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="slide-4" class="homeSlide">
            <div class="bcg"
                 data-center="background-position: 50% 0%;"
                 data-top-bottom="background-position: 50% -25%;"
                 data-bottom-top="background-position: 50% 25%;"
                 data-anchor-target="#slide-4"
                    >
                <div class="hsContainer">
                    <div class="hsContent">
                        <div class="youtube-player" data-id="Us6N7FllxT8"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

            <section id="slide-5" class="homeSlide">
                <div class="bcg"
                     data-center="background-position: 50% 0%;"
                     data-top-bottom="background-position: 50% -25%;"
                     data-bottom-top="background-position: 50% 25%;"
                     data-anchor-target="#slide-4"
                        >
                    <div class="hsContainer">
                        <div class="hsContent">
                                <h2 class="titulo">Redes Sociales</h2>
                                <a class="twitter-timeline" href="https://twitter.com/solarduniandes" data-widget-id="611942708815527940">Tweets {{Lang::get('home.by')}} @solarduniandes</a>
                                <div class="fb-page" data-href="https://www.facebook.com/mashuertomascasa" data-width="510px" data-height="605px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mashuertomascasa"><a href="https://www.facebook.com/mashuertomascasa">Solar Decathlon Uniandes 2015:   Más Huerto, Más Casa.</a></blockquote></div></div>
                        </div>
                    </div>

                </div>
            </section>
            </main>

        {{--<section id="banner" class="banner">--}}
            {{--<div class="contenido container special">--}}
                {{--<div class="youtube-container" data-center="opacity: 0;"--}}
                     {{--data-top-bottom="opacity: 1;"--}}
                     {{--data-anchor-target="#header">--}}
                    {{--<div class="youtube-player" data-id="Us6N7FllxT8"></div>--}}
                {{--</div>--}}

                {{--<div class="youtube-container">--}}
                {{--<div class="youtube-player" data-id="PUtkGRQzXVs"></div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</section>--}}

        {{--<section id="sociales" class="home wrapper style1">--}}
            {{--<div id="redes">--}}
                {{--<header>--}}
                    {{--<h2 class="titulo">Redes sociales</h2>--}}
                {{--</header>--}}
                {{--<a class="twitter-timeline" href="https://twitter.com/solarduniandes" data-widget-id="611942708815527940">Tweets {{Lang::get('home.by')}} @solarduniandes</a>--}}
                {{--<div class="fb-page" data-href="https://www.facebook.com/mashuertomascasa" data-width="510px" data-height="605px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mashuertomascasa"><a href="https://www.facebook.com/mashuertomascasa">Solar Decathlon Uniandes 2015:   Más Huerto, Más Casa.</a></blockquote></div></div>            </header>--}}
            {{--</div>--}}
        {{--</section>--}}


        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <script>
            (function() {
                var v = document.getElementsByClassName("youtube-player");
                for (var n = 0; n < v.length; n++) {
                    var p = document.createElement("div");
                    p.innerHTML = labnolThumb(v[n].dataset.id);
                    p.onclick = labnolIframe;
                    v[n].appendChild(p);
                }
            })();

            function labnolThumb(id) {
                return '<img class="youtube-thumb" src="http://img.youtube.com/vi/'+ id +'/maxresdefault.jpg"><div class="play-button"></div>';
            }

            function labnolIframe() {
                var iframe = document.createElement("iframe");
                iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?vq=hd720&autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("id", "youtube-iframe");
                this.parentNode.replaceChild(iframe, this);
            }
        </script>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        {{--</div>--}}
@endsection
