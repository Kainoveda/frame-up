<x-layout>
  <x-slot name="heading">Explore</x-slot>

  <div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">
      Meet the Artists
    </h1>

    <!-- Responsive Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      @foreach (range(1, 12) as $i)
        @php
          $rating = rand(3, 5); // simulate ratings
          $reviews = rand(20, 200);
        @endphp

        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-4 text-center">
          <!-- Avatar -->
          <img src="https://randomuser.me/api/portraits/{{ $i % 2 === 0 ? 'men' : 'women' }}/{{ $i + 20 }}.jpg"
               alt="Artist {{ $i }}"
               class="w-20 h-20 rounded-full mx-auto mb-4 object-cover border-2 border-indigo-500" />

          <!-- Name -->
          <h3 class="text-lg font-bold text-gray-800">
            Artist {{ chr(64 + $i) }}
          </h3>

          <!-- Description -->
          <p class="text-sm text-gray-600 mt-1">
            Visual storyteller & creative soul capturing emotion through color & form.
          </p>

          <!-- Star Ratings -->
          <div class="flex justify-center items-center mt-3">
            @for ($star = 1; $star <= 5; $star++)
              @if ($star <= $rating)
                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.284 3.942h4.146c.969 0 1.371 1.24.588 1.81l-3.36 2.44 1.284 3.943c.3.92-.755 1.688-1.539 1.117L10 13.347l-3.36 2.44c-.783.571-1.838-.196-1.539-1.117l1.284-3.943-3.36-2.44c-.783-.57-.38-1.81.588-1.81h4.146l1.284-3.942z"/></svg>
              @else
                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.284 3.942h4.146c.969 0 1.371 1.24.588 1.81l-3.36 2.44 1.284 3.943c.3.92-.755 1.688-1.539 1.117L10 13.347l-3.36 2.44c-.783.571-1.838-.196-1.539-1.117l1.284-3.943-3.36-2.44c-.783-.57-.38-1.81.588-1.81h4.146l1.284-3.942z"/></svg>
              @endif
            @endfor
          </div>

          <!-- Review Count -->
          <p class="text-xs text-gray-500 mt-1">{{ $reviews }} reviews</p>

          <!-- Sales -->
          <p class="mt-3 text-xs text-indigo-600 font-medium">
            {{ rand(50, 500) }}+ sales
          </p>
        </div>
      @endforeach
    </div>
  </div>
</x-layout>
