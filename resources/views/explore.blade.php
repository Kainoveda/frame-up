<x-layout>
  <x-slot name="heading">Explore</x-slot>

  <div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Explore Photos & Art</h1>

    

    {{-- Success Message --}}
    @if (session('uploaded_image'))
      <p class="text-green-600 text-center mb-6">Image uploaded successfully!</p>
    @endif

    <!-- Masonry-style grid -->
    <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">

      {{-- Uploaded image (if available) --}}
      @if (session('uploaded_image'))
        <div class="break-inside-avoid overflow-hidden rounded-lg shadow-md bg-white">
          <img src="{{ asset('storage/images/' . session('uploaded_image')) }}" alt="Uploaded Artwork" class="w-full h-auto object-cover" />
          <div class="p-3">
            <h3 class="text-sm font-semibold text-gray-800 mb-1">Your Upload</h3>
            <p class="text-xs text-gray-500">Uploaded just now</p>
          </div>
        </div>
      @endif


<a href="{{ url('/upload') }}"
   class="fixed bottom-8 right-16 bg-blue-600 hover:bg-blue-700 text-white rounded-full w-16 h-16 flex items-center justify-center shadow-lg transition duration-300 ease-in-out z-50"
   title="Upload">
    <!-- Plus Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
    </svg>
</a>


      {{-- Static sample images --}}
      @foreach (range(1, 12) as $i)
        <div class="break-inside-avoid overflow-hidden rounded-lg shadow-md bg-white">
          <img src="{{ asset('images/art' . ($i % 5 + 1) . '.jpg') }}" alt="Artwork {{ $i }}" class="w-full h-auto object-cover" />
          <div class="p-3">
            <h3 class="text-sm font-semibold text-gray-800 mb-1">Artwork Title {{ $i }}</h3>
            <p class="text-xs text-gray-500">by Artist {{ chr(64 + $i) }}</p>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</x-layout>
