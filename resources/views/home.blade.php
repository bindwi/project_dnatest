<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dna Test</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


</head>

<body>
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">HOME</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- DNA Test Offer Section -->
                <section class="bg-blue-100 p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-center">Let your DNA journey begin</h2>
                    <div class="flex flex-col items-center mt-4">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold">Premium DNA Test</h3>
                            <p>One Test, a Lifetime of Insights</p>
                            <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                            <p class="line-through text-red-500">Rp 10,999,999</p>
                            <p class="font-bold text-green-600">Rp 7,699,999</p>
                            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                        </div>
                        <img src="path/to/your/image.jpg" alt="DNA Collection Kit" class="mt-4 w-1/2" />
                    </div>
                </section>

                <!-- Customer Testimonials Section -->
                <section class="mt-8">
                    <h2 class="text-2xl font-bold text-center">What our customers have to say</h2>
                    <div class="swiper-container mt-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-white m-2 p-4 rounded-lg shadow-md w-72">
                                <h3 class="font-semibold">Interesting Me</h3>
                                <p>⭐⭐⭐⭐⭐</p>
                                <p>Didn't know so much information can be retrieved through our DNA. Wonderful experience and good to know more about myself.</p>
                            </div>
                            <div class="swiper-slide bg-white m-2 p-4 rounded-lg shadow-md w-72">
                                <h3 class="font-semibold">Detail Oriented DNA Health Test</h3>
                                <p>⭐⭐⭐⭐⭐</p>
                                <p>I think it’s amazing how even a simple cheek swab can help you learn so much about yourself, your genetics, and your health prospects.</p>
                            </div>
                            <div class="swiper-slide bg-white m-2 p-4 rounded-lg shadow-md w-72">
                                <h3 class="font-semibold">My DNA discovery</h3>
                                <p>⭐⭐⭐⭐⭐</p>
                                <p>I feel like I’m introduced to my origin self through Circle DNA.</p>
                            </div>
                            <div class="swiper-slide bg-white m-2 p-4 rounded-lg shadow-md w-72">
                                <h3 class="font-semibold">Accurate DNA Results</h3>
                                <p>⭐⭐⭐⭐⭐</p>
                                <p>So interesting to be given such accurate DNA results! Such great insights into health and personality.</p>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </section>
                
                                <script>
                    const swiper = new Swiper('.swiper-container', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        breakpoints: {
                            640: {
                                slidesPerView: 2,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 3,
                                spaceBetween: 30,
                            },
                        },
                    });
                </script>
    <main>
        

<footer class="bg-white shadow-sm">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">About</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
        </li>
        <li>
            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
        </li>
        <li>
            <a href="#" class="hover:underline">Contact</a>
        </li>
    </ul>
    </div>
</footer>

        
</body>

</html>
