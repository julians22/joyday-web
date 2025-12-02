<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        @font-face{
            font-family: Chewy;
            src: url({{ asset('fonts/fontsource-converted/Chewy-Regular.woff2') }});
        }
    </style>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header class="relative bg-joyday-yellow py-6">
        <div class="flex justify-between mx-auto container">
            <div class="relative w-[270px]">
                <img width="270" height="120" src="{{ asset('logo.png') }}" alt="" class="-top-1 z-10 absolute inset-x-0">
            </div>
            <ul class="flex space-x-10 font-chewy text-2xl">
                <li class="text-center">Tentang <br> Joyday</li>
                <li class="text-center">Produk <br> Unggulan</li>
                <li class="text-center">Informasi <br> Menarik</li>
                <li class="text-center">Hubungi <br> Kami</li>
            </ul>
        </div>

        <div class="bottom-0 absolute inset-x-0 bg-joyday-orange w-full h-2.5"></div>
    </header>

    <main>
        <div class="bg-joyday-blue h-screen">
            <!-- Slider main container -->
            <div class="h-full swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="banner-slide">
                            <div class="aspect-banner-video">
                                <video src="{{ asset('content-banner/JoydayVideoBackground.mp4') }}" muted="muted" class="size-full object-cover content"></video>
                            </div>

                            <div class="relative flex-1 justify-center items-center w-full grow">
                                <div class="absolute inset-0 mx-auto container">
                                    <div class="relative size-full">
                                        <img src="{{ asset('overlay/product-1.png') }}" alt="" class="banner-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-slide">
                            <div class="aspect-banner-video">
                                <video src="{{ asset('content-banner/JoydayVideoBackground.mp4') }}" class="size-full object-cover content"></video>
                            </div>

                            <div class="relative flex-1 justify-center items-center w-full grow">
                                <div class="absolute inset-0 mx-auto container">
                                    <div class="relative size-full">
                                        <img src="{{ asset('overlay/product-2.png') }}" alt="" class="banner-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="banner-slide">
                            <div class="aspect-banner-video">
                                <video src="{{ asset('content-banner/JoydayVideoBackground.mp4') }}" class="size-full object-cover content"></video>
                            </div>

                            <div class="relative flex-1 justify-center items-center w-full grow">
                                <div class="absolute inset-0 mx-auto container">
                                    <div class="relative size-full">
                                        <img src="{{ asset('overlay/product-3.png') }}" alt="" class="banner-overlay">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        @for ($i = 1; $i <= 7; $i++)<div>
            <img src="{{ asset('content/Desktop - '.$i.'.jpg') }}" alt="">
        </div>@endfor
    </main>
</body>

</html>
