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

    </style>

</head>

<body>
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <main>
            <h2 class="text-3xl my-5 font-semibold text-center">PHYSICAL FEATURES</h2>
            <swiper-container class="mySwiper px-2 sm:px-5 h-full" autoplay-delay="2500"
                autoplay-disable-on-interaction="false" loop="true" space-between="20" slides-per-view="auto">
                <!--Bald Spot-->
                <swiper-slide
                    class="flex justify-center items-center rounded-xl border-1 border-zinc-200 p-2 w-full md:w-2xs  ">
                    <div>
                        <div class="justify-items-center">
                            <img src="img/report/bald.gif" alt="Icon GIF" width="50" height="50">
                            <h2>Bald Spot</h2>
                            <p>user, your genetic predicts</p>
                            <canvas class="h-64 md:h-1/2" id="baldHair"></canvas>
                            <a href="" class=" font-medium text-xs text-blue-500 mt-10 hover:underline">
                                View Report
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <!--Hair Color-->
                <swiper-slide
                    class="flex justify-center items-center rounded-xl border-1 border-zinc-200 p-2 w-full md:w-2xs  ">
                    <div>
                        <div class="justify-items-center">
                            <img src="img/report/hair_color.gif" alt="Icon GIF" width="50" height="50">
                            <h2>Hair Color</h2>
                            <p>user, your genetic predicts</p>
                            <canvas class="h-64 md:h-1/2" id="hairColor"></canvas>
                            <a href="" class=" font-medium text-xs text-blue-500 mt-10 hover:underline">
                                View Report
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <!--Hair Texture-->
                <swiper-slide
                    class="flex justify-center items-center rounded-xl border-1 border-zinc-200 p-2 w-full md:w-2xs  ">
                    <div>
                        <div class="justify-items-center">
                            <img src="img/report/hair_texture.gif" alt="Icon GIF" width="50" height="50">
                            <h2>Hair Texture</h2>
                            <p>user, your genetic predicts</p>
                            <canvas class="h-64 md:h-1/2" id="hairTexture"></canvas>
                            <a href="" class=" font-medium text-xs text-blue-500 mt-10 hover:underline">
                                View Report
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <!--Dandruff-->
                <swiper-slide
                    class="flex justify-center items-center rounded-xl border-1 border-zinc-200 p-2 w-full md:w-2xs  ">
                    <div>
                        <div class="justify-items-center">
                            <img src="img/report/Dandruff.gif" alt="Icon GIF" width="50" height="50">
                            <h2>Dandruff</h2>
                            <p>user, your genetic predicts</p>
                            <canvas class="h-64 md:h-1/2" id="dandruff"></canvas>
                            <a href="" class=" font-medium text-xs text-blue-500 mt-10 hover:underline">
                                View Report
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <!--Eye Color-->
                <swiper-slide
                    class="flex justify-center items-center rounded-xl border-1 border-zinc-200 p-2 w-full md:w-2xs  ">
                    <div>
                        <div class="justify-items-center">
                            <img src="img/report/eye_color.gif" alt="Icon GIF" width="50" height="50">
                            <h2>Eye Color</h2>
                            <p>user, your genetic predicts</p>
                            <canvas class="h-64 md:h-1/2" id="eyeColor"></canvas>
                            <a href="" class=" font-medium text-xs text-blue-500 mt-10 hover:underline">
                                View Report
                            </a>
                        </div>
                    </div>
                </swiper-slide>
                <!--Earlobe Ear-->
                <swiper-slide
                    class="flex justify-center items-center rounded-xl border-1 border-zinc-200 p-2 w-full md:w-2xs  ">
                    <div>
                        <div class="justify-items-center">
                            <img src="img/report/ear.gif" alt="Icon GIF" width="50" height="50">
                            <h2>Earlobe Ear</h2>
                            <p>user, your genetic predicts</p>
                            <canvas class="h-64 md:h-1/2" id="earlobeEar"></canvas>
                            <a href="" class=" font-medium text-xs text-blue-500 mt-10 hover:underline">
                                View Report
                            </a>
                        </div>
                    </div>
                </swiper-slide>


            </swiper-container>

        </main>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx1 = document.getElementById('baldHair');
        const ctx2 = document.getElementById('hairColor');
        const ctx3 = document.getElementById('hairTexture');
        const ctx4 = document.getElementById('dandruff');
        const ctx5 = document.getElementById('eyeColor');
        const ctx6 = document.getElementById('earlobeEar');

        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Not Bald ', 'Bald'],
                datasets: [{
                    label: 'Percent',
                    data: [88, 12],
                    borderWidth: 4,
                    backgroundColor: [
                        'rgba(0, 255, 255, 0.4)',
                        'rgba(128, 0, 128, 0.5)'
                    ]
                }]
            },


        });

        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Black Hair', 'Other Color'],
                datasets: [{
                    label: 'Percent',
                    data: [94, 6],
                    borderWidth: 4,
                    backgroundColor: [
                        'rgba(139, 69, 19, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ]
                }]
            },

        });

        new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: ['Straight', 'Slightly', 'Wavy', 'Big Curls', 'Small Curls', 'Tight Curls'],
                datasets: [{
                    label: 'Percent',
                    data: [20, 16, 15, 24, 13, 12],
                    borderWidth: 4,
                    backgroundColor: [
                        'rgba(152,251,152, 0.8)',
                        'rgba(75,0,130, 0.8)',
                        'rgba(205,92,92, 0.8)',
                        'rgba(139,69,19, 0.8)',
                        'rgba(238,232,170, 0.8)',
                        'rgba(25,25,112, 0.8)'
                    ]
                }]
            },


        });

        new Chart(ctx4, {
            type: 'doughnut',
            data: {
                labels: ['Have ', 'Dont Have '],
                datasets: [{
                    label: 'Percent',
                    data: [90, 10],
                    borderWidth: 4,
                    backgroundColor: [
                        'rgba(255,165,0, 0.8)',
                        'rgba(240,230,140, 0.8)'
                    ]
                }]
            },

        });

        new Chart(ctx5, {
            type: 'doughnut',
            data: {
                labels: ['Dark Brown', 'Light Brown', 'Dark Hazel', 'Light Hazel', 'Green', 'Blue', 'Greenish'],
                datasets: [{
                    label: 'Percent',
                    data: [73, 11, 9, 4, 1, 1, 1],
                    borderWidth: 2,
                    backgroundColor: [
                        'rgba(54, 21,9, 0.8)',
                        'rgba(91,80,54, 0.8)',
                        'rgba(116,90,65, 0.8)',
                        'rgba(163,127,90, 0.8)',
                        'rgba(57,84,75, 0.8)',
                        'rgba(69,88,108, 0.8)',
                        'rgba(196,227,208, 0.8)'

                    ]
                }]
            },

        });

        new Chart(ctx6, {
            type: 'doughnut',
            data: {
                labels: ['Detached', 'Attached'],
                datasets: [{
                    label: 'Percent',
                    data: [64,36],
                    borderWidth: 4,
                    backgroundColor: [
                        'rgba(172,65,61, 0.8)',
                        'rgba(54,131,100, 0.8)',
                        

                    ]
                }]
            },

        });
    </script>

    <x-footer></x-footer>
</body>

</html>
