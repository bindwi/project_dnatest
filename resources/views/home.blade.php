<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dna Test</title>
    <link rel="icon" type="image/png" href="img/logo3.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


</head>

<body class="">
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <!--Advertising-->
        <section class="w-full h-full drop-shadow-xl ">
            <div class=" bg-transparent absolute z-10 mt-30 md:mt-50 md:ml-5 text-zinc-100 ">
                <h2 class="text-md md:text-4xl xl:text-5xl font-bold font-poppins">DNA TESTING SERVICES</h2>
                <p class="text-sm md:text-md xl:text-xl tracking-[.25em] font-bold font-poppins">your path to better
                    health starts here</p>

            </div>
            <img src="img/poster.png " class="h-110 w-full md:h-135 md:w-full" alt="">

        </section>

        <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="py-15 grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="justify-items-center text-center ">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none">
                            <g clip-path="url(#shipping_svg__a)">
                                <path fill="#fff" d="M0 0h40v40H0z"></path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="M12.563 36.25H11.25a2.5 2.5 0 0 1-2.5-2.5v-10a2.5 2.5 0 0 1 2.5-2.5h15a2.5 2.5 0 0 1 2.5 2.5v8.813M28.75 23.75h5a5 5 0 0 1 5 5v5a2.5 2.5 0 0 1-2.5 2.5h-3.813">
                                </path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="M26.25 35.625a3.125 3.125 0 1 0 6.25 0 3.125 3.125 0 0 0-6.25 0M12.5 35.625a3.125 3.125 0 1 0 6.25 0 3.125 3.125 0 0 0-6.25 0M26.313 36.25h-7.626M38.75 28.75h-5M2.928 23.152A15 15 0 1 1 31.25 16.25">
                                </path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="M16.25 1.25a19.76 19.76 0 0 0-6.25 15M16.25 1.25a19.76 19.76 0 0 1 6.25 15M2.105 11.25h28.286">
                                </path>
                            </g>
                            <defs>
                                <clipPath id="shipping_svg__a">
                                    <path fill="#fff" d="M0 0h40v40H0z"></path>
                                </clipPath>
                            </defs>
                        </svg></div>
                    <div><span class="typography p3 semibold" style="color: rgb(123, 123, 123);">Free 2-Way
                            Shipping</span></div>
                </div>
                <div class="justify-items-center text-center">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none">
                            <g clip-path="url(#analytics_svg__a)">
                                <path fill="#fff" d="M0 0h40v40H0z"></path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="m26.098 16.248-6.473 8.847a1.2 1.2 0 0 1-.392.347 1.2 1.2 0 0 1-1.445-.214l-3.885-3.98">
                                </path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="M17.935 2.262c.249-.317.563-.572.92-.747a2.6 2.6 0 0 1 2.29 0c.358.175.672.43.92.747l2.459 3.135c.278.355.64.633 1.05.808.412.175.859.24 1.301.192l3.903-.435a2.6 2.6 0 0 1 1.17.136c.375.135.715.355.996.643s.496.637.627 1.022c.132.384.177.794.134 1.199l-.425 4c-.048.453.017.912.187 1.333s.442.791.789 1.077l3.058 2.52c.309.254.558.577.73.943a2.77 2.77 0 0 1 0 2.347c-.172.366-.421.689-.73.943l-3.068 2.508a2.7 2.7 0 0 0-.789 1.078c-.17.422-.234.88-.187 1.334l.425 4c.044.405-.001.815-.133 1.2a2.7 2.7 0 0 1-.627 1.022 2.64 2.64 0 0 1-.997.642 2.6 2.6 0 0 1-1.17.136l-3.903-.435c-.442-.05-.89.017-1.3.191-.411.175-.772.453-1.05.81l-2.45 3.122a2.7 2.7 0 0 1-.92.748 2.6 2.6 0 0 1-2.29 0 2.7 2.7 0 0 1-.92-.748L15.48 34.6a2.66 2.66 0 0 0-1.052-.808 2.6 2.6 0 0 0-1.301-.192l-3.903.435c-.395.046-.795 0-1.17-.135a2.64 2.64 0 0 1-.998-.643 2.7 2.7 0 0 1-.627-1.022 2.8 2.8 0 0 1-.132-1.2l.425-4a2.8 2.8 0 0 0-.187-1.334 2.7 2.7 0 0 0-.789-1.078l-3.057-2.518a2.7 2.7 0 0 1-.73-.943 2.77 2.77 0 0 1 0-2.347c.172-.367.421-.689.73-.943l3.057-2.52c.347-.286.619-.656.79-1.077.17-.421.234-.88.186-1.333l-.425-4a2.8 2.8 0 0 1 .133-1.2c.131-.384.346-.734.627-1.022a2.64 2.64 0 0 1 .997-.642 2.6 2.6 0 0 1 1.17-.136l3.903.435c.442.049.89-.017 1.3-.192a2.66 2.66 0 0 0 1.053-.808z">
                                </path>
                            </g>
                            <defs>
                                <clipPath id="analytics_svg__a">
                                    <path fill="#fff" d="M0 0h40v40H0z"></path>
                                </clipPath>
                            </defs>
                        </svg></div>
                    <div><span class="typography p3 semibold" style="color: rgb(123, 123, 123);">99.9%
                            Analytical Accuracy</span></div>
                </div>
                <div class="justify-items-center text-center">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none">
                            <g clip-path="url(#encrypted_svg__a)">
                                <path fill="#fff" d="M0 0h40v40H0z"></path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="M12.917 14.583a6.667 6.667 0 1 0 0-13.333 6.667 6.667 0 0 0 0 13.333M17.917 30.417H1.25a11.667 11.667 0 0 1 18.333-9.575M36.25 26.25H25.417a2.5 2.5 0 0 0-2.5 2.5v7.5a2.5 2.5 0 0 0 2.5 2.5H36.25a2.5 2.5 0 0 0 2.5-2.5v-7.5a2.5 2.5 0 0 0-2.5-2.5">
                                </path>
                                <path stroke="#049FDA" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5"
                                    d="M25 26.285V23.75a5.834 5.834 0 0 1 11.667 0v2.535M28.333 32.5 30 34.167l3.333-3.334">
                                </path>
                            </g>
                            <defs>
                                <clipPath id="encrypted_svg__a">
                                    <path fill="#fff" d="M0 0h40v40H0z"></path>
                                </clipPath>
                            </defs>
                        </svg></div>
                    <div><span class="typography p3 semibold" style="color: rgb(123, 123, 123);">Encrypted
                            Secure Data</span></div>
                </div>
                <div class="justify-items-center text-center">
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none">
                            <path stroke="#049FDA" stroke-linecap="round" stroke-width="2.5"
                                d="M27.231 2c.092 1.846-.72 6.037-4.708 8.03M12.007 38c-.092-1.846.72-6.037 4.708-8.03M12 2.277c0 6.092 4.985 7.754 12.46 12.184 4.243 2.515 3.416 9.97-1.661 12.462">
                            </path>
                            <path stroke="#049FDA" stroke-linecap="round" stroke-width="2.5"
                                d="M27.187 38c0-6.092-4.985-7.754-12.46-12.185-3.835-2.272-3.416-9.969 1.66-12.461">
                            </path>
                        </svg></div>
                    <div><span class="typography p3 semibold" style="color: rgb(123, 123, 123);">1-1 Genetic
                            Consultation</span></div>
                </div>
            </div>

            <div class="usps-section relative">
                <div class="view-wrapper ">
                    <div class="usps-wrapper">
                        
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- DNA Test Offer Section -->
            <h2 class="text-3xl my-5 font-semibold text-center">Let your DNA journey begin</h2>
            <swiper-container class="mySwiper h-155 w-full py-12 " loop="true" effect="coverflow" grab-cursor="true"
                centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50"
                coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1"
                coverflow-effect-slide-shadows="true">
                <swiper-slide class="w-80 h-full p-4 bg-center bg-cover">
                    <section class="bg-blue-100 p-4 rounded-lg ">
                        <div class="flex flex-col items-center shadow-xl ">
                            <img src="img/lab.png" alt="DNA Collection Kit" class=" w-full h-45 rounded-t-lg" />
                            <div class="bg-white p-4 rounded-b-lg shadow-md">
                                <h3 class="text-xl font-bold">Premium DNA Test</h3>
                                <p>One Test, a Lifetime of Insights</p>
                                <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                                <p class="line-through text-red-500">Rp 10,999,999</p>
                                <p class="font-bold text-green-600">Rp 7,699,999</p>
                                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                            </div>

                        </div>
                    </section>
                </swiper-slide>
                <swiper-slide class="w-80 h-full p-4 bg-center bg-cover">
                    <section class="bg-blue-100 p-4 rounded-lg ">
                        <div class="flex flex-col items-center shadow-xl ">
                            <img src="img/sample.jpeg" alt="DNA Collection Kit" class=" w-full h-45 rounded-t-lg" />
                            <div class="bg-white p-4 rounded-b-lg shadow-md">
                                <h3 class="text-xl font-bold">Premium DNA Test</h3>
                                <p>One Test, a Lifetime of Insights</p>
                                <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                                <p class="line-through text-red-500">Rp 10,999,999</p>
                                <p class="font-bold text-green-600">Rp 7,699,999</p>
                                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                            </div>

                        </div>
                    </section>
                </swiper-slide>
                <swiper-slide class="w-80 h-full p-4 bg-center bg-cover">
                    <section class="bg-blue-100 p-4 rounded-lg ">
                        <div class="flex flex-col items-center shadow-xl ">
                            <img src="img/lab.png" alt="DNA Collection Kit" class=" w-full h-45 rounded-t-lg" />
                            <div class="bg-white p-4 rounded-b-lg shadow-md">
                                <h3 class="text-xl font-bold">Premium DNA Test</h3>
                                <p>One Test, a Lifetime of Insights</p>
                                <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                                <p class="line-through text-red-500">Rp 10,999,999</p>
                                <p class="font-bold text-green-600">Rp 7,699,999</p>
                                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                            </div>

                        </div>
                    </section>
                </swiper-slide>
                <swiper-slide class="w-80 h-full p-4 bg-center bg-cover">
                    <section class="bg-blue-100 p-4 rounded-lg ">
                        <div class="flex flex-col items-center shadow-xl ">
                            <img src="img/sample.jpeg" alt="DNA Collection Kit" class=" w-full h-45 rounded-t-lg" />
                            <div class="bg-white p-4 rounded-b-lg shadow-md">
                                <h3 class="text-xl font-bold">Premium DNA Test</h3>
                                <p>One Test, a Lifetime of Insights</p>
                                <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                                <p class="line-through text-red-500">Rp 10,999,999</p>
                                <p class="font-bold text-green-600">Rp 7,699,999</p>
                                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                            </div>

                        </div>
                    </section>
                </swiper-slide>
                <swiper-slide class="w-80 h-full p-4 bg-center bg-cover">
                    <section class="bg-blue-100 p-4 rounded-lg ">
                        <div class="flex flex-col items-center shadow-xl ">
                            <img src="img/lab.png" alt="DNA Collection Kit" class=" w-full h-45 rounded-t-lg" />
                            <div class="bg-white p-4 rounded-b-lg shadow-md">
                                <h3 class="text-xl font-bold">Premium DNA Test</h3>
                                <p>One Test, a Lifetime of Insights</p>
                                <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                                <p class="line-through text-red-500">Rp 10,999,999</p>
                                <p class="font-bold text-green-600">Rp 7,699,999</p>
                                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                            </div>

                        </div>
                    </section>
                </swiper-slide>
                <swiper-slide class="w-80 h-full p-4 bg-center bg-cover">
                    <section class="bg-blue-100 p-4 rounded-lg ">
                        <div class="flex flex-col items-center shadow-xl ">
                            <img src="img/sample.jpeg" alt="DNA Collection Kit" class=" w-full h-45 rounded-t-lg" />
                            <div class="bg-white p-4 rounded-b-lg shadow-md">
                                <h3 class="text-xl font-bold">Premium DNA Test</h3>
                                <p>One Test, a Lifetime of Insights</p>
                                <p>500+ Reports, 20 Categories covering every test CircleDNA has to offer</p>
                                <p class="line-through text-red-500">Rp 10,999,999</p>
                                <p class="font-bold text-green-600">Rp 7,699,999</p>
                                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Learn more</button>
                            </div>

                        </div>
                    </section>
                </swiper-slide>

            </swiper-container>

            <!-- Customer Testimonials Section -->
            <h2 class="text-2xl font-bold text-center my-8">What our customers have to say</h2>
            <swiper-container class="mySwiper w-full h-full" autoplay-delay="2500"
                autoplay-disable-on-interaction="false" loop="true" space-between="30" slides-per-view="auto">
                <swiper-slide class="flex justify-center items-center py-2 w-full md:w-95  ">
                    <div class="bg-zinc-100 p-6 rounded-lg shadow-xl">
                        <h3 class="font-semibold">Interesting Me</h3>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p class="line-clamp-3" >Didn't know so much information can be retrieved through our DNA. Wonderful
                            experience and good to know more about myself.</p>
                            <a href="" class="font-medium text-xs text-blue-500 hover:underline">
                                Read more &raquo;
                            </a>
                    </div>
                </swiper-slide>
                <swiper-slide class="flexjustify-center items-center py-2 w-full md:w-95 ">
                    <div class="bg-zinc-100 p-6 rounded-lg shadow-xl">
                        <h3 class="font-semibold">Detail Oriented DNA Health Test</h3>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p class="line-clamp-3">I think it’s amazing how even a simple cheek swab can help you learn so much about
                            yourself, your genetics, and your health prospects.</p>
                            <a href="" class="font-medium text-xs text-blue-500 hover:underline">
                                Read more &raquo;
                            </a>
                    </div>
                </swiper-slide>
                <swiper-slide class="flex justify-center items-center py-2 w-full md:w-95  ">
                    <div class="bg-zinc-100 p-6 rounded-lg shadow-xl">
                        <h3 class="font-semibold">Interesting Me</h3>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p class="line-clamp-3" >Didn't know so much information can be retrieved through our DNA. Wonderful
                            experience and good to know more about myself.</p>
                            <a href="" class="font-medium text-xs text-blue-500 hover:underline">
                                Read more &raquo;
                            </a>
                    </div>
                </swiper-slide>
                <swiper-slide class="flexjustify-center items-center py-2 w-full md:w-95 ">
                    <div class="bg-zinc-100 p-6 rounded-lg shadow-xl">
                        <h3 class="font-semibold">Detail Oriented DNA Health Test</h3>
                        <p>⭐⭐⭐⭐⭐</p>
                        <p class="line-clamp-3">I think it’s amazing how even a simple cheek swab can help you learn so much about
                            yourself, your genetics, and your health prospects.</p>
                            <a href="" class="font-medium text-xs text-blue-500 hover:underline">
                                Read more &raquo;
                            </a>
                    </div>
                </swiper-slide>
                

            </swiper-container>


        </main>

        <x-footer></x-footer>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>
