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

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                <h2 class="text-3xl font-semibold mb-6 text-center">Get a detailed overview of each report category</h2>
                <p class="text-lg text-gray-600 mb-10 text-center">more about whats included in each report and how it works</p>

                <!-- Section Title -->
                <h2 class="text-2xl font-semibold mb-6 text-center">Diet, Sports & Lifestyle</h2>

                <!-- Grid Section 1 -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-6 mb-10">
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/diet.png" alt="Diet" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800">Diet</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/nutrition.png" alt="Nutrition" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800">Nutrition</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/sports.png" alt="Sports & Fitness" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Sports & Fitness</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/sleep.png" alt="Sleep & Stress" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Sleep & Stress</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/happiness.png" alt="Well-being" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800">Well-being</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/depilation.png" alt="Pollution" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800">Skins</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/building.png" alt="Hydration" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800">Pollution</p>
                    </div>
                </div>

                <!-- Section Title -->
                <h2 class="text-2xl font-semibold mb-6 text-center">Early Detection & Prevention</h2>

                <!-- Grid Section 2 -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/unhealthy.png" alt="Common Health Risks" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Common Health Risks</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/coronavirus.png" alt="Disease Risks" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Disease Risks</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/paralyzed.png" alt="Dementia" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Dementia & Brain Health</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/cancer.png" alt="Cancer Screening" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Cancer Screening</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/medicine.png" alt="Drug Response" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Drug Response</p>
                    </div>
                    <div class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg transition">
                        <img src="/img/home.png" alt="Family Planning" class="w-16 h-16 mb-3 transition-transform duration-300 hover:scale-110">
                        <p class="text-center font-medium text-gray-800 text-sm">Family Planning</p>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <x-footer></x-footer>

</body>

</html>
