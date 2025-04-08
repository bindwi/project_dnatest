@props(['active' => false])

<a class="{{ $active ? 'text-slate-500 ' : 'text-gray-300  hover:text-zinc-400' }} rounded-md px-3 py-2 text-sm font-medium "
    aria-current="{{ $active ? 'page':  false }}" {{ $attributes }}>{{ $slot }}</a>