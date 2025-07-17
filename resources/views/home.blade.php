<x-layout>
  <x-slot name="heading">Home</x-slot>

  <!-- Hero Section -->
<div class="min-h-auto bg-transparent text-gray-800 px-6 pt-12 pb-3">


    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12 pb-10">

      <!-- Left -->
      <div class="flex-1 space-y-6">
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
          Discover, Sell<br />
          and Share <br />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
            Art & Photography
          </span>
        </h1>
        <p class="text-gray-600 max-w-md">
          The world’s largest online marketplace for discovering, showcasing, and selling digital art and photography.
        </p>

        <div class="flex items-center gap-4 flex-wrap">
         <a href="{{ url('/explore') }}">
    <button class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-5 py-2 rounded-full font-semibold shadow">
        Discover
    </button>
</a>



        <form action="{{ url('/upload') }}" method="GET">
    <button type="submit" class="border border-gray-300 px-5 py-2 rounded-full font-semibold text-gray-700 hover:bg-gray-100">
        Create
    </button>
</form>

</form>
        </div>

        <div class="flex flex-wrap gap-4 mt-6">
          <div class="bg-gray-100 rounded-lg px-4 py-2 shadow-sm">
            <p class="text-xl font-bold text-indigo-600">27k+</p>
            <p class="text-sm text-gray-600">Art works</p>
          </div>
          <div class="bg-gray-100 rounded-lg px-4 py-2 shadow-sm">
            <p class="text-xl font-bold text-indigo-600">20k+</p>
            <p class="text-sm text-gray-600">Auctions</p>
          </div>
          <div class="bg-gray-100 rounded-lg px-4 py-2 shadow-sm">
            <p class="text-xl font-bold text-indigo-600">7k+</p>
            <p class="text-sm text-gray-600">Artists</p>
          </div>
        </div>

        <div class="flex items-center mt-6 space-x-3">
          <div class="flex -space-x-3">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-8 h-8 rounded-full border-2 border-white shadow" />
            <img src="https://randomuser.me/api/portraits/women/45.jpg" class="w-8 h-8 rounded-full border-2 border-white shadow" />
            <img src="https://randomuser.me/api/portraits/men/64.jpg" class="w-8 h-8 rounded-full border-2 border-white shadow" />
            <img src="https://randomuser.me/api/portraits/women/12.jpg" class="w-8 h-8 rounded-full border-2 border-white shadow" />
          </div>
          <span class="text-sm text-gray-600">40k+ Active Users</span>
        </div>
      </div>

      <!-- Right -->
      <div class="flex-1">
        <div class="bg-white p-4 rounded-2xl shadow-lg">
          <img src="{{ asset('images/6-The-Starry-Night-Source-sanctuarymentalhealth.org_.webp') }}" alt="Artwork" class="rounded-xl object-cover w-full h-[350px]" />
          <div class="mt-4 flex justify-between items-center">
            <div>
              <p class="text-sm text-gray-500">Ending in:</p>
              <p class="font-bold text-gray-800">1h 20m 30s</p>
            </div>
            <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-full text-sm font-medium">
              Place a Bid
            </button>
          </div>
          <div class="mt-4 flex justify-between items-center">
            <div>
              <p class="text-sm text-gray-500">Highest Bid</p>
              <p class="font-bold text-gray-800">$10,000</p>
            </div>
            <button class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium">
              Purchase
            </button>
          </div>
          
        </div>
      </div>

    </div>
    
    
  </div>

<hr class="my-8 border-gray-00" />
  <section 
class="min-h-auto-full bg-cover bg-center bg-no-repeat text-gray-800 pt-10 py-10 px-6 pb-0">

    <div class="max-w-7xl mx-auto">

      <h2 class="text-center text-3xl md:text-4xl font-bold mb-12 text-indigo-700">Popular this week</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 justify-items-center">
        <!-- Card 1 -->
        <div class="bg-gray-100 rounded-xl overflow-hidden shadow w-[180px]">
          <img src="/images/art1.jpg" alt="Art 1" class="w-full h-48 object-cover" />
          <div class="p-4 text-sm space-y-1">
            <p class="font-semibold text-gray-800">Digital Decade</p>
            <p class="text-xs text-gray-500">by Anthony Gargasz</p>
            <div class="flex justify-between items-center text-xs mt-2">
              <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded-full">$100</span>
              <span class="text-gray-600">💜 50k</span>
            </div>
          </div>
        </div>

        <!-- Repeat Cards -->
        @foreach ([
          ['art2.jpg', 'Winter Jamz'],
          ['art2.jpg', 'Winter Jamz'],
          ['art3.jpg', 'Winter Jamz'],
          ['art4.jpg', 'Winter Jamz'],
        ] as [$image, $title])
          <div class="bg-gray-100 rounded-xl overflow-hidden shadow w-[180px]">
            <img src="/images/{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover" />
            <div class="p-4 text-sm space-y-1">
              <p class="font-semibold text-gray-800">{{ $title }}</p>
              <p class="text-xs text-gray-500">by Anton Tudisco</p>
              <div class="flex justify-between items-center text-xs mt-2">
                <span class="bg-indigo-100 text-indigo-600 px-2 py-1 rounded-full">$100</span>
                <span class="text-gray-600">💜 47k</span>
              </div>
            </div>
          </div>

          
        @endforeach


        
      </div>
    </div>
  </section>
  
<section class="py-10 px-6 bg-white/10 backdrop-blur-sm rounded-2xl max-w-7xl mx-auto mt-20 shadow-xl mb-20">
  <h2 class="text-3xl font-bold text-center text-indigo-700 mb-10">How It Works — With Kai</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Step 1 -->
    <div class="bg-white/30 backdrop-blur-md p-6 rounded-xl shadow text-center">
      <div class="text-4xl mb-4">📸</div>
      <h3 class="text-xl font-semibold text-indigo-600 mb-2">Capture Your Creativity</h3>
      <p class="text-gray-700 text-sm">Start by creating or uploading your art or photography. FrameUp welcomes all styles and visions.</p>
    </div>

    <!-- Step 2 -->
    <div class="bg-white/30 backdrop-blur-md p-6 rounded-xl shadow text-center">
      <div class="text-4xl mb-4">🛍️</div>
      <h3 class="text-xl font-semibold text-indigo-600 mb-2">Showcase & Sell</h3>
      <p class="text-gray-700 text-sm">Easily list your works for sale or auction and start gaining attention and earnings.</p>
    </div>

    <!-- Step 3 -->
    <div class="bg-white/30 backdrop-blur-md p-6 rounded-xl shadow text-center">
      <div class="text-4xl mb-4">🤝</div>
      <h3 class="text-xl font-semibold text-indigo-600 mb-2">Grow with Kai</h3>
      <p class="text-gray-700 text-sm">Work closely with Kai, your platform guide and developer, as you build your brand and community on FrameUp.</p>
    </div>
  </div>

  <!-- Kai Highlight -->
  <div class="mt-16 flex flex-col md:flex-row items-center justify-center gap-6">
    <img src="/images/kai.jpg" alt="Kai" class="w-32 h-32 rounded-full border-4 border-indigo-500 shadow-lg object-cover" />
    <div class="text-center md:text-left">
      <h4 class="text-xl font-bold text-indigo-700">Meet Kai</h4>
      <p class="text-sm text-gray-700 max-w-md mt-2">
        Founder & Lead Developer of FrameUp — Kai is dedicated to helping artists shine, providing creative tools and an inclusive space for digital expression.
      </p>
    </div>
  </div>
</section>


</x-layout>


  