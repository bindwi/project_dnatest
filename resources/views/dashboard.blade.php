<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dna Test</title>

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        {{-- Section: Start Here --}}
        <section class="max-w-7xl mx-auto px-4 py-12 space-y-10">
            <h2 class="text-2xl font-semibold mb-6">Start Here</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ([
                    'Health Overview',
                    'Clinical Overview',
                    'Action Plan',
                    'Longevity Screener'
                ] as $title)
                    <div class="bg-white shadow rounded-lg p-4">
                        <div class="text-lg font-medium mb-4">{{ $title }}</div>
                        <div class="relative group">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-md flex items-center justify-between w-full group-hover:bg-blue-700">
                                Download
                                <svg class="ml-2 w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path d="M5 7l5 5 5-5" stroke="currentColor" stroke-width="2" fill="none" />
                                </svg>
                            </button>
                            <div class="absolute z-10 hidden group-hover:block mt-1 bg-white border border-gray-200 rounded shadow-lg w-full">
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Download PDF</a>
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Download CSV</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Section: Next Step --}}
            <h2 class="text-2xl font-semibold mt-12 mb-6">Next Step</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ([
                    'Methylation Pathway',
                    'Blood Test Results',
                    'Medication Check (Pharmacogenomics)',
                    'Family Planning (Carrier Status)',
                    'Ancestry',
                    'Mitochondrial Ancestry'
                ] as $title)
                    <div class="bg-white shadow rounded-lg p-4">
                        <div class="text-lg font-medium mb-4">{!! nl2br(e($title)) !!}</div>
                        <div class="relative group">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-md flex items-center justify-between w-full group-hover:bg-blue-700">
                                Download
                                <svg class="ml-2 w-4 h-4 transform transition-transform duration-200 group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path d="M5 7l5 5 5-5" stroke="currentColor" stroke-width="2" fill="none" />
                                </svg>
                            </button>
                            <div class="absolute z-10 hidden group-hover:block mt-1 bg-white border border-gray-200 rounded shadow-lg w-full">
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Download PDF</a>
                                <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100">Download CSV</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Section: Chat Prompt --}}
        <section class="max-w-7xl mx-auto px-4 py-12 space-y-10">
            <div class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                <div class="lg:col-span-2 space-y-6">
                    {{-- Header --}}
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2zm4 0c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z" />
                                </svg>
                            </div>
                            <h1 class="text-xl font-semibold text-gray-800">Ask your AI health coach!</h1>
                        </div>
                        <div class="flex items-center space-x-1 text-sm">
                            <span class="font-semibold text-blue-600">DecodyGPT</span>
                            <span class="text-xs text-blue-600 border border-blue-600 rounded-full px-1">1.0</span>
                        </div>
                    </div>

                    {{-- Prompt Suggestions --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-3">
                        @foreach([
                            "What should I focus on improving first?",
                            "Show my impactful SNPs for the MTHFR report.",
                            "Show me my top 10 supplement recommendations.",
                            "What blood tests should I take?"
                        ] as $question)
                            <div class="text-sm font-medium text-blue-700 bg-white border border-blue-100 rounded-xl py-3 px-4 hover:bg-blue-50 cursor-pointer transition">
                                {{ $question }}
                            </div>
                        @endforeach
                    </div>

                    {{-- Input Box --}}
                    <div class="relative">
                        <textarea
                            placeholder="Message DecodyGPT"
                            class="w-full resize-none border-2 border-blue-500 rounded-full py-4 px-6 pr-14 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-300 transition"
                            rows="1"
                        ></textarea>
                        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-blue-600 hover:text-blue-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 28.512 29.097">
                                <g transform="scale(1.4)">
                                    <g transform="translate(-2.828 14.842) rotate(-45)">
                                        <path d="M26.488,3,16.5,12.988" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <path d="M21.161,3,14.8,21.161l-3.632-8.172L3,9.356Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>

                    {{-- Disclaimer --}}
                    <p class="text-xs text-gray-400">
                        By using <span class="text-blue-700 font-semibold">DecodyGPT</span> 1.0, you agree to share anonymized personal data related to your question with OpenAI.
                        <a href="#" class="underline">Learn more</a>.
                    </p>
                </div>

                {{-- Download Box --}}
                <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl text-white p-6 relative shadow-lg">
                    <div class="space-y-3">
                        <h2 class="text-lg font-semibold">Download PDFs</h2>
                        <p class="text-sm opacity-90">Explore and download key insights in PDF format for easy access.</p>
                        <a href="/app/download-pdfs" class="inline-block mt-4 bg-white text-blue-600 font-semibold text-sm py-2 px-4 rounded-full shadow hover:bg-blue-50 transition">
                            EXPLORE
                        </a>
                    </div>
                    <div class="absolute top-6 right-6 opacity-20">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 19.582" class="w-8 h-auto">
                            <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                <path d="M26.5,22.5v4.889a2.444,2.444,0,0,1-2.444,2.444H6.944A2.444,2.444,0,0,1,4.5,27.389V22.5" transform="translate(0 -3.333)" />
                                <path d="M9.5,15l5.481,6.111L20.463,15" transform="translate(0.519 -1.944)" />
                                <path d="M18,14.749V4.5" transform="translate(-2.5 4.418)" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section: Health Score --}}
        <section class="max-w-7xl mx-auto px-4 py-12 space-y-10">
            <div class="bg-gray-50 py-16">
                <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    {{-- SVG Circle --}}
                    <div class="flex flex-col items-center space-y-6">
                        <div class="relative w-64 h-64">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 200 200">
                                <circle cx="100" cy="100" r="90" stroke="#e5e7eb" stroke-width="20" fill="none" />
                                <circle cx="100" cy="100" r="90" stroke="#3b82f6" stroke-width="20" fill="none" stroke-linecap="round" stroke-dasharray="565.48" stroke-dashoffset="299">
                                    <animate attributeName="stroke-dashoffset" from="565.48" to="299" dur="1s" fill="freeze" />
                                </circle>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <p class="text-sm text-gray-500">HEALTH</p>
                                <p class="text-xs text-gray-400 -mt-1 mb-2">OVERALL SCORE</p>
                                <p class="text-5xl font-bold text-blue-500">47</p>
                                <p class="text-blue-500 font-semibold">FAIR</p>
                                <p class="text-sm text-gray-400 mt-1">Score Breakdown:</p>
                            </div>
                        </div>
                        <div class="flex space-x-6">
                            <div class="w-10 h-10 rounded-full border-2 border-red-400 flex items-center justify-center">
                                <img src="/icons/dna.svg" alt="DNA" class="w-5 h-5">
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-blue-400 flex items-center justify-center">
                                <img src="/icons/lifestyle.svg" alt="Lifestyle" class="w-5 h-5">
                            </div>
                            <div class="w-10 h-10 rounded-full border-2 border-green-400 flex items-center justify-center">
                                <img src="/icons/test.svg" alt="Test" class="w-5 h-5">
                            </div>
                        </div>
                    </div>

                    {{-- Description and Button --}}
                    <div class="text-center md:text-left md:pl-10">
                        <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-4">Your Health Score</h2>
                        <p class="text-gray-600 mb-6 text-base leading-relaxed">
                            Your score is influenced by your DNA, lifestyle and lab test results.
                            Select a health topic, discover your ratings and see actionable recommendations to optimize your overall health!
                        </p>
                        <a href="/recommendations" class="inline-flex items-center px-6 py-3 rounded-full bg-blue-600 text-white font-semibold text-sm hover:bg-blue-700 transition">
                            SEE MY RECOMMENDATIONS
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

                <!-- Carousel Wrapper -->
        <section class="max-w-7xl mx-auto px-4 py-12 space-y-10">
            <div class="relative overflow-hidden">
                <!-- Slider container -->
                <div id="reportCarousel" class="flex transition-transform duration-300 ease-in-out space-x-4">
                    @foreach ($reports as $report)
                        <div class="min-w-[300px] max-w-sm p-6 rounded-xl shadow border flex-shrink-0 
                            @if($report->type === 'warning') border-orange-500 @elseif($report->type === 'typical') border-cyan-500 @else border-purple-500 @endif">
                            
                            <div class="flex items-center space-x-3 mb-4">
                                {!! $report->icon !!}
                                <div>
                                    <p class="uppercase text-xs font-bold 
                                        @if($report->type === 'warning') text-orange-500 
                                        @elseif($report->type === 'typical') text-cyan-500 
                                        @else text-purple-500 @endif">
                                        {{ $report->tag }}
                                    </p>
                                    <h3 class="text-lg font-semibold">{{ $report->title }}</h3>
                                </div>
                            </div>
                            
                            <p class="text-sm text-gray-700 mb-4">{{ $report->description }}</p>

                            <div class="flex justify-between items-center">
                                <button class="text-blue-600 font-semibold text-sm">Download ⏷</button>
                                <a href="#" class="text-blue-600 font-semibold text-sm flex items-center">View →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Carousel Controls -->
                <button onclick="moveCarousel(-1)" class="absolute top-1/2 left-0 -translate-y-1/2 bg-white border rounded-full shadow p-2">←</button>
                <button onclick="moveCarousel(1)" class="absolute top-1/2 right-0 -translate-y-1/2 bg-white border rounded-full shadow p-2">→</button>
            </div>
            <script>
            let currentIndex = 0;
            function moveCarousel(direction) {
                const slider = document.getElementById('reportCarousel');
                const cardWidth = slider.children[0].offsetWidth + 16; // card width + margin
                currentIndex += direction;
                if (currentIndex < 0) currentIndex = 0;
                const maxIndex = slider.children.length - 1;
                if (currentIndex > maxIndex) currentIndex = maxIndex;
                slider.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            }
            </script>
        </section>
    </div>
</body>

</html>
