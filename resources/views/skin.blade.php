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
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">SHOP</h1>
            </div>
        </header>
        <main>
            <div class="container mx-auto flex flex-col md:flex-row p-8">
                <!-- Left Section -->
                <div class="md:w-1/2 flex flex-col justify-center">
                    <h1 class="text-4xl font-bold mb-4">Premium DNA Test</h1>
                    <h2 class="text-xl mb-2">500+ Reports • 20 Categories</h2>
                    <p class="mb-4">Keep your skin healthy, young, and beautiful with genetic insights into your skin’s wrinkle formation, acne, and other risks, along with personalised skincare recommendations.</p>
                    <p>Detailed, personalised reports that help you determine:</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Your skin’s genetic risk for skin problems such as wrinkling, hyperpigmentation, stretch marks, cellulite, and more</li>
                        <li>An assessment of your genetic skin age from “Mature” to “Younger”</li>
                        <li>What ingredients to pay attention to in your skincare</li>
                    </ul>
                    <p>Plus, 500+ more reports including:</p>
                    <ul class="list-disc list-inside mb-4">
                        <li>Prescription drugs response</li>
                        <li>Ancestry breakdown/li>
                        <li>Your risk level of inherited cancers & disease</li>
                        <li>Your optimal diet & fitness routines</li>
                    </ul>
                    <p>Convenient at-home saliva collection with free pick-up</p>
                    <p>Complimentary 30-minute genetic consultation included</p>
                </div>
                <!-- Right Section -->
                <div class="md:w-1/2 flex flex-col items-center justify-center">
                    <img src="/img/skin-protection.png" alt="DNA Test" class="mb-3 rounded-lg shadow-lg">
                    <div class="bg-white shadow-md rounded-lg p-4 w-full">
                        <h3 class="text-lg font-bold mb-2">Save with bundles</h3>
                        <div class="flex justify-between items-center mb-4">
                            <div>
                                <p class="text-xl">2x Premium DNA Test</p>
                                <p class="line-through text-red-500">Rp 10,000,000</p>
                                <p class="text-green-500 font-bold">Rp 7,699,999 / kit</p>
                            </div>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Buy now</button>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xl">1x Premium DNA Test</p>
                                <p class="line-through text-red-500">Rp 10,000,000</p>
                                <p class="text-green-500 font-bold">Rp 8,249,999</p>
                            </div>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Buy now</button>
                        </div>
                    </div>
                </div>
            </div>
    <x-footer></x-footer>
</body>  

</html>