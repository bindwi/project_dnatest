<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dna Test</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
</head>

<body>
    <div class="min-h-full" x-data="{ showModal: false, modalTitle: '', modalContent: '' }">
        <x-navbar></x-navbar>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

                <h2 class="text-3xl font-semibold mb-6 text-center">Get a detailed overview of each report category</h2>
                <p class="text-lg text-gray-600 mb-10 text-center">More about what's included in each report and how it works</p>

                <h2 class="text-2xl font-semibold mb-6 text-center">Diet, Sports & Lifestyle</h2>

                <!-- Grid Section 1 -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-8 gap-6 mb-10">
                    <button @click="modalTitle='Diet'; modalContent='Diet adalah pengaturan pola makan dengan tujuan tertentu, seperti menurunkan berat badan, menjaga kesehatan, atau mengelola kondisi medis. Diet bukan berarti menahan lapar, tapi menyesuaikan asupan makanan agar sesuai dengan kebutuhan tubuh. Jenis diet populer antara lain diet Mediterania, diet keto, serta diet vegetarian atau vegan. Masing-masing memiliki pendekatan berbeda, namun tetap fokus pada keseimbangan nutrisi. Diet yang sehat harus memperhatikan gizi lengkap, termasuk karbohidrat, protein, lemak sehat, vitamin, dan mineral. Kunci keberhasilan diet adalah konsistensi, memahami kebutuhan tubuh, dan tidak memaksakan diri. Hindari tren diet ekstrem karena bisa berbahaya. Diet yang baik seharusnya membantu membentuk kebiasaan makan yang sehat dan berkelanjutan.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/diet.png" alt="Diet" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800">Diet</p>
                    </button>

                    <button @click="modalTitle='Nutrition'; modalContent='Nutrisi adalah zat gizi yang dibutuhkan tubuh untuk tumbuh, berkembang, dan berfungsi secara optimal. Nutrisi terbagi menjadi dua, yaitu makronutrien (karbohidrat, protein, lemak) dan mikronutrien (vitamin, mineral). Asupan nutrisi yang seimbang membantu menjaga daya tahan tubuh, meningkatkan energi, serta mencegah berbagai penyakit. Konsumsi makanan alami seperti sayur, buah, biji-bijian, dan sumber protein sehat sangat dianjurkan. Menghindari makanan olahan berlebihan juga penting agar tubuh tidak kelebihan gula, garam, atau lemak jenuh. Kebutuhan nutrisi bisa berbeda tiap orang, tergantung usia, jenis kelamin, aktivitas, dan kondisi kesehatan. Oleh karena itu, penting untuk memperhatikan label gizi serta pola makan harian. Nutrisi yang baik adalah pondasi gaya hidup sehat.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/nutrition.png" alt="Nutrition" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800">Nutrition</p>
                    </button>

                    <button @click="modalTitle='Sports & Fitness'; modalContent='Olahraga dan kebugaran fisik berperan penting dalam menjaga kesehatan tubuh dan pikiran. Aktivitas fisik rutin seperti jalan cepat, bersepeda, berenang, atau latihan kekuatan membantu meningkatkan sirkulasi darah, kekuatan otot, serta kebugaran jantung. Selain manfaat fisik, olahraga juga dapat menurunkan stres dan memperbaiki suasana hati melalui pelepasan hormon endorfin. Tidak harus selalu berat, yang penting dilakukan secara konsisten. Menyesuaikan jenis olahraga dengan kondisi tubuh sangat penting agar tetap aman dan efektif. Kombinasi antara latihan kardio, kekuatan otot, dan fleksibilitas bisa membentuk tubuh yang seimbang. Mulai dari gerakan ringan hingga olahraga intens, aktivitas fisik adalah bagian penting dari gaya hidup sehat yang tidak boleh diabaikan.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/sports.png" alt="Sports & Fitness" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Sports & Fitness</p>
                    </button>

                    <button @click="modalTitle='Sleep & Stress'; modalContent='Tidur yang cukup dan pengelolaan stres yang baik adalah kunci kesehatan mental dan fisik. Kurang tidur bisa menurunkan konsentrasi, imunitas, serta meningkatkan risiko penyakit kronis. Idealnya, orang dewasa membutuhkan 7–9 jam tidur per malam. Selain kuantitas, kualitas tidur juga penting, termasuk tidur dalam suasana tenang dan teratur. Di sisi lain, stres yang tidak dikelola dengan baik bisa berdampak negatif pada tubuh, seperti gangguan tidur, pencernaan, hingga tekanan darah tinggi. Beberapa cara efektif mengelola stres meliputi meditasi, olahraga, hobi, atau berbicara dengan orang terpercaya. Menjaga keseimbangan tidur dan stres dapat membantu tubuh tetap sehat, fokus, dan lebih siap menghadapi tantangan sehari-hari.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/sleep.png" alt="Sleep & Stress" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Sleep & Stress</p>
                    </button>

                    <button @click="modalTitle='Well-being'; modalContent='Well-being adalah kondisi sejahtera secara fisik, mental, dan emosional. Ini bukan sekadar bebas dari penyakit, tetapi juga merasakan hidup yang seimbang dan bermakna. Mencapai well-being melibatkan pola makan sehat, olahraga teratur, tidur cukup, serta hubungan sosial yang positif. Kesehatan mental juga penting, seperti memiliki pikiran positif, rasa syukur, dan kemampuan mengelola stres. Aktivitas yang meningkatkan kebahagiaan, seperti menekuni hobi, berjalan di alam, atau bersantai tanpa distraksi, turut berperan. Well-being bisa berbeda-beda bagi setiap orang, tergantung kebutuhan dan nilai hidup masing-masing. Menjaga kesejahteraan adalah proses berkelanjutan, bukan hasil instan. Dengan memperhatikan semua aspek ini, seseorang dapat menjalani hidup dengan lebih penuh energi, produktif, dan bahagia setiap hari.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/happiness.png" alt="Well-being" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800">Well-being</p>
                    </button>

                    <button @click="modalTitle='Skins'; modalContent='Kesehatan kulit mencerminkan kondisi tubuh secara keseluruhan. Kulit yang sehat tidak hanya indah dipandang, tapi juga berfungsi sebagai pelindung utama dari lingkungan luar. Perawatan kulit yang baik meliputi pembersihan rutin, penggunaan pelembap, perlindungan dari sinar matahari, dan konsumsi air yang cukup. Faktor lain seperti pola makan, tidur, dan stres juga memengaruhi kondisi kulit. Produk skincare yang sesuai jenis kulit dapat membantu mengatasi masalah seperti jerawat, kulit kering, atau penuaan dini. Hindari penggunaan produk sembarangan yang bisa merusak lapisan pelindung kulit. Selain itu, gaya hidup sehat secara keseluruhan juga akan mendukung tampilan kulit yang lebih segar dan bercahaya. Merawat kulit bukan soal estetika semata, tapi juga bagian dari menjaga kesehatan.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/depilation.png" alt="Skins" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800">Skins</p>
                    </button>

                    <button @click="modalTitle='Pollution'; modalContent='Polusi adalah ancaman serius bagi kesehatan, terutama di lingkungan perkotaan. Paparan jangka panjang terhadap polusi udara dapat menyebabkan gangguan pernapasan, penyakit jantung, bahkan menurunkan sistem imun. Sumber polusi bisa berasal dari kendaraan bermotor, asap industri, hingga pembakaran sampah. Selain udara, polusi juga mencakup air dan tanah yang tercemar limbah berbahaya. Untuk mengurangi dampaknya, penting menggunakan masker saat kualitas udara buruk, mengurangi aktivitas luar ruangan pada saat polusi tinggi, serta mendukung gaya hidup ramah lingkungan. Tanaman dalam rumah, mengurangi penggunaan plastik, dan memilih transportasi ramah lingkungan juga bisa membantu. Kesadaran akan polusi dan dampaknya merupakan langkah awal dalam menciptakan lingkungan yang lebih sehat dan berkelanjutan untuk semua.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/building.png" alt="Pollution" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800">Pollution</p>
                    </button>

                    <button @click="modalTitle='Hydration'; modalContent='Hydration atau hidrasi adalah proses menjaga tubuh tetap terhidrasi dengan cukup air agar fungsi tubuh berjalan dengan optimal. Air memegang peran penting dalam mengatur suhu tubuh, mendukung proses pencernaan, dan mengangkut nutrisi serta oksigen ke sel-sel tubuh. Dehidrasi dapat menyebabkan kelelahan, sakit kepala, dan gangguan pada konsentrasi. Untuk memastikan tubuh tetap terhidrasi, disarankan untuk mengonsumsi sekitar 2-3 liter air per hari, tergantung pada aktivitas fisik dan cuaca. Mengonsumsi makanan yang mengandung banyak air, seperti buah-buahan dan sayuran, juga dapat membantu menjaga keseimbangan cairan tubuh.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/water.png" alt="Hydration" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800">Hydration</p>
                    </button>
                </div>

                <h2 class="text-2xl font-semibold mb-6 text-center">Early Detection & Prevention</h2>

                <!-- Grid Section 2 -->
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <button @click="modalTitle='Common Health Risks'; modalContent='Risiko kesehatan umum seperti tekanan darah tinggi, kolesterol, obesitas, dan diabetes sering muncul akibat gaya hidup tidak sehat. Deteksi dini sangat penting agar kondisi tidak berkembang menjadi penyakit kronis. Pemeriksaan rutin dan perubahan pola makan serta aktivitas fisik dapat membantu mencegahnya. Penting juga untuk memahami riwayat kesehatan keluarga sebagai langkah pencegahan. Edukasi dan kesadaran terhadap tanda-tanda awal sangat membantu dalam pengelolaan kesehatan jangka panjang.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/unhealthy.png" alt="Common Health Risks" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Common Health Risks</p>
                    </button>

                    <button @click="modalTitle='Disease Risks'; modalContent='Risiko penyakit seperti jantung, stroke, dan gangguan metabolik bisa dicegah melalui deteksi dini dan pola hidup sehat. Faktor genetik, stres, kurang olahraga, dan pola makan buruk berkontribusi besar. Pemeriksaan kesehatan rutin dan gaya hidup aktif dapat membantu mengurangi kemungkinan terkena penyakit serius. Mengenali faktor risiko sejak awal memungkinkan seseorang mengambil tindakan preventif dan menjaga kualitas hidup yang lebih baik.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/coronavirus.png" alt="Disease Risks" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Disease Risks</p>
                    </button>

                    <button @click="modalTitle='Dementia & Brain Health'; modalContent='Kesehatan otak penting untuk fungsi kognitif yang optimal seiring bertambahnya usia. Risiko demensia bisa dikurangi dengan gaya hidup aktif, konsumsi makanan sehat, dan stimulasi mental. Deteksi dini terhadap perubahan daya ingat atau kemampuan berpikir sangat krusial. Aktivitas sosial, membaca, dan menjaga tekanan darah turut membantu menjaga fungsi otak. Pencegahan lebih efektif jika dilakukan sejak dini.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/paralyzed.png" alt="Dementia" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Dementia & Brain Health</p>
                    </button>

                    <button @click="modalTitle='Cancer Screening'; modalContent='Skrining kanker bertujuan mendeteksi sel abnormal sebelum berkembang menjadi kanker ganas. Jenis skrining seperti mammografi, pap smear, dan kolonoskopi penting dilakukan secara rutin. Deteksi dini meningkatkan peluang pengobatan berhasil. Skrining sangat disarankan bagi mereka dengan faktor risiko genetik atau riwayat keluarga. Pencegahan juga mencakup gaya hidup sehat, menghindari rokok, serta mengonsumsi makanan bergizi.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/cancer.png" alt="Cancer Screening" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Cancer Screening</p>
                    </button>

                    <button @click="modalTitle='Drug Response'; modalContent='Respon tubuh terhadap obat berbeda-beda tergantung genetik dan kondisi kesehatan. Dengan deteksi awal melalui tes genetik atau riwayat medis, dokter bisa menyesuaikan jenis serta dosis obat yang tepat. Ini mengurangi efek samping dan meningkatkan efektivitas pengobatan. Penting untuk tidak sembarangan konsumsi obat dan selalu konsultasi dengan tenaga medis. Personalisasi pengobatan jadi bagian penting dalam pencegahan risiko komplikasi.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/medicine.png" alt="Drug Response" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Drug Response</p>
                    </button>

                    <button @click="modalTitle='Family Planning'; modalContent='Perencanaan keluarga membantu pasangan mengatur jarak kehamilan dan kesehatan ibu-anak. Edukasi tentang kontrasepsi, kesiapan mental, dan kondisi fisik sangat penting. Deteksi awal terhadap gangguan reproduksi atau risiko kehamilan berisiko tinggi dapat membantu perencanaan lebih aman. Konsultasi dengan tenaga medis bisa memberi panduan yang tepat. Perencanaan matang mendukung tumbuh kembang anak serta kesejahteraan keluarga secara keseluruhan.'; showModal=true"
                        class="bg-white shadow-md rounded-xl flex flex-col items-center p-4 hover:shadow-lg hover:shadow-blue-500/50 hover:ring hover:ring-blue-400 hover:ring-offset-2 transition duration-300">
                        <img src="/img/home.png" alt="Family Planning" class="w-16 h-16 mb-3 hover:scale-110 transition-transform duration-300">
                        <p class="text-center font-medium text-gray-800 text-sm">Family Planning</p>
                    </button>
                </div>
            </div>
        </main>

        <!-- Modal -->
        <div x-data="modalNavigation" x-show="showModal" x-transition
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 px-8"
            @click.away="showModal = false"
            style="background: url('/img/bg_icons.jpg') no-repeat center center; background-size: cover;">

            <!-- Tips Section -->
            <div class="absolute top-5/12 transform -translate-y-1/2 left-50 w-70">
                <h3 class="text-center text-green-600 text-lg font-semibold mb-2" style="font-family: 'Pacifico', cursive;">Tips</h3>
                <div class="h-35 bg-gradient-to-br from-green-400 to-green-600 rounded-lg shadow-lg p-4 text-white flex items-center justify-center text-sm text-center" style="font-family: 'Poppins', sans-serif;">
                    <p>Jaga pola makan seimbang, rutin berolahraga, tidur cukup, dan kelola stres dengan baik untuk menjaga kesehatan tubuh dan pikiran.</p>
                </div>
            </div>

            <!-- Trick Section -->
            <div class="absolute top-5/12 transform -translate-y-1/2 right-50 w-70">
                <h3 class="text-center text-purple-500 text-lg font-semibold mb-2" style="font-family: 'Pacifico', cursive;">Trick</h3>
                <div class="h-35 bg-gradient-to-br from-purple-500 to-indigo-700 rounded-lg shadow-lg p-4 text-white flex items-center justify-center text-sm text-center" style="font-family: 'Poppins', sans-serif;">
                    <p>Temukan kegiatan yang menyenangkan dalam berolahraga, pilih makanan bergizi dengan porsi yang tepat, dan jangan lupakan pentingnya hidrasi serta waktu istirahat.</p>
                </div>
            </div>

            <!-- Kotak modal utama -->
            <div class="bg-white rounded-xl p-6 max-w-md w-full shadow-lg z-10 relative">
                <h3 class="text-xl font-semibold mb-2" x-text="modalTitle"></h3>
                <p class="text-gray-700" x-text="modalContent"></p>

                <!-- Tombol tutup di tengah -->
                <div class="flex justify-center mt-4">
                    <button @click="showModal = false"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tutup</button>
                </div>
            </div>
        </div>

        <x-footer></x-footer>
    </div>
</body>

</html>