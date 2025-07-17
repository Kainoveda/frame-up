@props(['active' => false])

<a class="{{ $active ? 'text-indigo-600 border-b-2 border-indigo-600' : 'text-gray-700 hover:text-indigo-600' }} px-3 py-2 text-sm font-medium transition-colors duration-200"
   aria-current="{{ $active ? 'page' : 'false' }}"
   {{ $attributes }}>
   {{ $slot }}
</a>
