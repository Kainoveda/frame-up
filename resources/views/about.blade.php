<x-layout>
  <x-slot name="heading">About</x-slot>

  <section class="min-h-screen flex items-center justify-center bg-none from-indigo-100 via-purple-100 to-pink-100 px-6 py-20">
    <div class="max-w-5xl w-full bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl shadow-xl p-10 text-gray-800">
      
      <!-- Title -->
      <h1 class="text-4xl font-extrabold text-center mb-6 text-indigo-600">About Frame Up</h1>
      <p class="text-center text-gray-700 text-base md:text-lg mb-10 leading-relaxed max-w-3xl mx-auto">
        <strong>Frame Up</strong> is your creative hub — a platform crafted for artists, photographers, and digital storytellers to showcase, sell, and connect through visual expression. Whether you’re starting out or mastering your craft, Frame Up empowers you to elevate your work in a community that celebrates creativity.
      </p>

      <!-- Mission & Vision -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <div class="bg-white/20 backdrop-blur-sm border border-white/30 p-6 rounded-xl shadow-md hover:shadow-lg transition">
          <h2 class="text-xl font-semibold text-indigo-700 mb-2">🌟 Our Mission</h2>
          <p class="text-sm text-gray-700 leading-relaxed">
            To empower creators by giving them intuitive tools, exposure, and opportunities to grow their brand and audience globally — all in one inspiring platform.
          </p>
        </div>
        <div class="bg-white/20 backdrop-blur-sm border border-white/30 p-6 rounded-xl shadow-md hover:shadow-lg transition">
          <h2 class="text-xl font-semibold text-indigo-700 mb-2">🚀 Our Vision</h2>
          <p class="text-sm text-gray-700 leading-relaxed">
            To become the leading destination for digital creators — where inspiration meets commerce, and every artist feels seen, supported, and celebrated.
          </p>
        </div>
      </div>

      <!-- Team -->
      <h3 class="text-2xl font-bold text-center mb-6 text-gray-800">Meet the Team</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 text-center">
        @foreach([
          ['Kai', 'Founder & Lead Developer', '/images/kai.jpg'],
          ['John Smith', 'Creative Director', 'https://i.pravatar.cc/100?img=2'],
          ['Alex Lee', 'Community Manager', 'https://i.pravatar.cc/100?img=3']
        ] as [$name, $role, $img])
          <div class="bg-white/20 backdrop-blur-sm border border-white/30 p-4 rounded-xl shadow hover:shadow-lg">
            <img src="{{ $img }}" alt="{{ $name }}" class="w-24 h-24 rounded-full mx-auto mb-3 object-cover border-2 border-white">
            <h4 class="font-semibold text-lg text-gray-800">{{ $name }}</h4>
            <p class="text-sm text-gray-500">{{ $role }}</p>
          </div>
        @endforeach
      </div>

    </div>
  </section>
</x-layout>
