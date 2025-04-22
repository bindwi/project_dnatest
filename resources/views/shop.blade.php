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
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="max-w-screen-xl mx-auto px-4 py-8">
                    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">What can we help you with?</h1>
                    <div class="grid grid-cols-1 gap-2 sm:grid-cols-5 justify-center ">
                        <!-- Healthy Body Card -->
                        <div class="bg-green-100 rounded-lg p-6 my-2 shadow-lg text-center w-full">
                            <img src="/img/bmi.png" >
                            <h2 class="text-xl font-semibold mb-2">Healthy Body</h2>
                            <p class="text-gray-700">Learn how to work with your DNA to build a diet and fitness routine that gets results more quickly.</p>
                            <a href="/shop/healthy" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</a>
                        </div>
            
                        <!-- Family Planning Card -->
                        <div class="bg-blue-100 rounded-lg p-6 my-2 shadow-lg text-center w-full">
                            <img src="/img/family.png" >
                            <h2 class="text-xl font-semibold mb-2">Family Planning</h2>
                            <p class="text-gray-700">Get screened for hereditary genetic conditions that may be passed on to your child.</p>
                            <a href="/shop/family" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</a>
                        </div>
            
                        <!-- Cancer & Disease Risk Card -->
                        <div class="bg-yellow-100 rounded-lg p-6 my-2 shadow-lg text-center w-full">
                            <img src="/img/cancer-cell.png" >
                            <h2 class="text-xl font-semibold mb-2">Cancer & Disease Risk</h2>
                            <p class="text-gray-700">Discover your genetic risk level for hundreds of cancers & diseases that may impact your future.</p>
                            <a href="/shop/cancer" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</a>
                        </div>
            
                        <!-- Skin Card -->
                        <div class="bg-purple-100 rounded-lg p-6 my-2 shadow-lg text-center w-full">
                            <img src="/img/skin-protection.png" >
                            <h2 class="text-xl font-semibold mb-2">Skin</h2>
                            <p class="text-gray-700">Get personalised skincare tips and insights to reveal your brightest, most youthful skin.</p>
                            <a href="/shop/skin" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</a>
                        </div>
            
                        <!-- Success Traits Card -->
                        <div class="bg-orange-100 rounded-lg p-6 my-2 shadow-lg text-center w-full">
                            <img src="/img/success.png" >
                            <h2 class="text-xl font-semibold mb-2">Success Traits</h2>
                            <p class="text-gray-700">Discover your child's hidden genetic talents and help them achieve their highest potential.</p>
                            <a href="/shop/success" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Shop now</a>
                        </div>
                    </div>
                </div>

                <div class="max-w-screen-xl mx-auto px-4 py-8">
                    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">Trusted Research & Results</h1>
                    <div class="flex flex-wrap justify-center gap-6">
        
                        <!-- Cutting Edge Technology Card -->
                        <div class="bg-gray-100 rounded-lg p-6 shadow-lg text-center w-72">
                            <div class="mb-4">
                                <img src="/img/lab.png" alt="Cutting Edge Technology" class="rounded-lg w-full h-32 object-cover">
                            </div>
                            <h2 class="text-xl font-semibold mb-2">Cutting Edge Technology</h2>
                            <p class="text-gray-700 text-sm">99.9% analytical accuracy by fully utilising 3 generations of sequencing platforms:</p>
                            <ul class="text-gray-700 text-sm list-disc list-inside">
                                <li>Sanger Sequencing</li>
                                <li>NGS: Illumina Platform</li>
                                <li>3rd Generation Long-Read Sequencing</li>
                            </ul>
                        </div>

                        <!-- Internationally Accredited Laboratory Card -->
                        <div class="bg-gray-100 rounded-lg p-6 shadow-lg text-center w-72">
                            <div class="mb-4">
                                <img src="/img/sample.jpeg" alt="Internationally Accredited Laboratory" class="rounded-lg w-full h-32 object-cover">
                            </div>
                            <h2 class="text-xl font-semibold mb-2">Internationally Accredited Laboratory</h2>
                            <p class="text-gray-700 text-sm">Certified with CAP ISO-15189 and ISO-27001, our lab upholds international standards for quality and data security. We guarantee precision, reliability, and safety in our genetic testing services.</p>
                        </div>

                        <!-- Expert Lab & Clinical Team Card -->
                        <div class="bg-gray-100 rounded-lg p-6 shadow-lg text-center w-72">
                            <div class="mb-4">
                                <img src="/img/lab.png" alt="Expert Lab & Clinical Team" class="rounded-lg w-full h-32 object-cover">
                            </div>
                            <h2 class="text-xl font-semibold mb-2">Expert Lab & Clinical Team</h2>
                            <p class="text-gray-700 text-sm">Genetic testing and genomic services are developed and overseen by global leaders in DNA sequencing. Dr. Lawrence Tzang leads Circle’s Lab & Development with 20+ years of experience.</p>
                        </div>
                    </div>
                </div>


                 <div class="max-w-screen-xl mx-auto px-4 py-8">
                    <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">Genetic Testing</h1>
                    <div class="flex flex-wrap justify-center gap-6">
                    
                        <div class="bg-white rounded-lg p-6 shadow-lg text-center w-72">
                            <div class="flex justify-center mb-4">
                                <img src="/img/sample.jpeg" alt="Vital DNA Test" class="w-24">
                            </div>
                            <h2 class="text-xl font-semibold mb-2">Vital DNA Test</h2>
                            <p class="text-gray-700 text-sm">Your first gateway to genetic insights: 120+ reports on diet management, fitness, nutrition, and more, enhancing daily life with personalised guidelines.</p>
                        </div>

                        <!-- Health DNA Test Card -->
                        <div class="bg-white rounded-lg p-6 shadow-lg text-center w-72">
                            <div class="flex justify-center mb-4">
                                <img src="/img/lab.png" alt="Health DNA Test" class="w-24">
                            </div>
                            <h2 class="text-xl font-semibold mb-2">Health DNA Test</h2>
                            <p class="text-gray-700 text-sm">A holistic disease risk assessment: 115+ professional disease risk insights for proactive health management and early disease prevention.</p>
                        </div>

                        <!-- Premium DNA Test Card -->
                        <div class="bg-white rounded-lg p-6 shadow-lg text-center w-72">
                            <div class="flex justify-center mb-4">
                                <img src="/img/sample.jpeg" alt="Premium DNA Test" class="w-24">
                            </div>
                            <h2 class="text-xl font-semibold mb-2">Premium DNA Test</h2>
                            <p class="text-gray-700 text-sm">Ultimate guide to your health: Comprehensive 500+ actionable reports ranging from wellness to disease, powered by the world’s most advanced DNA technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <x-footer></x-footer>

</body>

</html>
