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
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <header class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">DNA REPORT</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="max-w-screen-xl mx-auto px-4 py-8">
                    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">What can we help you with?</h1>
                    <div class="flex flex-wrap justify-center gap-6">
                        <!-- Healthy Body Card -->
                        <div class="bg-green-100 rounded-lg p-6 shadow-lg text-center w-64">
                            <img src="path/to/healthy-body-image.jpg">
                            <h2 class="text-xl font-semibold mb-2">Healthy Body</h2>
                            <p class="text-gray-700">Learn how to work with your DNA to build a diet and fitness routine
                                that gets results more quickly.</p>
                            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</button>
                        </div>

                        <!-- Family Planning Card -->
                        <div class="bg-blue-100 rounded-lg p-6 shadow-lg text-center w-64">
                            <img src="path/to/family-planning-image.jpg">
                            <h2 class="text-xl font-semibold mb-2">Family Planning</h2>
                            <p class="text-gray-700">Get screened for hereditary genetic conditions that may be passed
                                on to your child.</p>
                            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</button>
                        </div>

                        <!-- Cancer & Disease Risk Card -->
                        <div class="bg-yellow-100 rounded-lg p-6 shadow-lg text-center w-64">
                            <img src="path/to/cancer-risk-image.jpg">
                            <h2 class="text-xl font-semibold mb-2">Cancer & Disease Risk</h2>
                            <p class="text-gray-700">Discover your genetic risk level for hundreds of cancers & diseases
                                that may impact your future.</p>
                            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</button>
                        </div>

                        <!-- Skin Card -->
                        <div class="bg-purple-100 rounded-lg p-6 shadow-lg text-center w-64">
                            <img src="path/to/skin-image.jpg">
                            <h2 class="text-xl font-semibold mb-2">Skin</h2>
                            <p class="text-gray-700">Get personalised skincare tips and insights to reveal your
                                brightest, most youthful skin.</p>
                            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</button>
                        </div>

                        <!-- Success Traits Card -->
                        <div class="bg-orange-100 rounded-lg p-6 shadow-lg text-center w-64">
                            <img src="path/to/success-traits-image.jpg">
                            <h2 class="text-xl font-semibold mb-2">Success Traits</h2>
                            <p class="text-gray-700">Discover your child's hidden genetic talents and help them achieve
                                their highest potential.</p>
                            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</button>
                        </div>
                    </div>
                </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <x-footer></x-footer>
</body>

</html>
