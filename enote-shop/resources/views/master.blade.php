<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/116d3bf052.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/style/normalize.css">
    <link rel="stylesheet" href="/style/style.css">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(95599995, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true
    });
    </script>

 <!-- /Yandex.Metrika counter -->

    <title>Купить электронику</title>

</head>
<body>
    @if(Request::url() == (str_contains(Request::url(),'admin')))
    <div class="container-fluid text-center">
        @else
        <div class="container text-center">

    @endif
        <div class="row">
          <div class="col">
            <div class="row">
                <nav class="navbar fixed-top bg-secondary-subtle">
                    <div class="container">
                        <a target="_blank" class="navbar-brand" href="/">
                            <img src="/images/logo_header.svg" alt="Logo" width="40" height="40" > <!--class="d-inline-block align-text-top" -->
                            E-shop
                          </a>
                        <div class="contacts ">
                            <div class="">8-499-350-26-08</div>
                            <div class="">info@enote-shop.ru</div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="row content-wrapper">
                @yield('content')
            </div>
            <div class="row">
                <noscript><div><img src="https://mc.yandex.ru/watch/95599995" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

            </div>
          </div>
        </div>
      </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script src="/js/mine.js"></script>

</html>
