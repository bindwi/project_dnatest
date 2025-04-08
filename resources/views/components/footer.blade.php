<footer class="bg-white shadow-sm">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a
                href="/" class="hover:underline">Dna Testing™</a>. All Rights
            Reserved.
        </span>
        <ul
            class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <x-nav-foo class="hover:underline me-4 md:me-6" href="/" :active="request()->is('/')"> HOME</x-nav-foo>
            </li>
            <li>
                <x-nav-foo href="/shop" :active="request()->is('shop')"> SHOP</x-nav-foo>
            </li>
            <li>
                <x-nav-foo href="/report" :active="request()->is('report')"> DNA REPORT</x-nav-foo>
            </li>
            <li>
                <x-nav-foo href="/life" :active="request()->is('life')">DREAM LIFE</x-nav-foo>
            </li>
        </ul>
    </div>
</footer>