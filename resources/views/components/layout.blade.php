<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="background-image: url('{{ asset('images/Bghome.jpg') }}');" class="bg-cover">


  <!-- Transparent & Centered Navbar -->
<nav id="main-navbar" class="bg-transparent fixed top-0 left-0 right-0 z-50 transition-all duration-300">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">


<div class="flex items-center">
  <a href="/">
    <img src="/images/logo.png" alt="Logo" class="w-32 h-auto" />
  </a>
</div>

      <!-- Center: Navigation Links -->
      <div class="hidden md:flex space-x-6 justify-center flex-1">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/explore" :active="request()->is('explore')">Explore</x-nav-link>
        <x-nav-link href="/artists" :active="request()->is('artists')">Artists</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About us</x-nav-link>
      </div>

      <!-- Right: Register Button -->
      <!-- Right: Register & Login Buttons -->
<div class="hidden md:flex items-center gap-4">
  <!-- Login Button -->
  <a href="/login" class="border border-gray-800 text-gray-800 px-4 py-2 rounded-lg font-medium hover:bg-violet-100 hover:text-indigo-600 transition">
    Login
  </a>

  <!-- Register Button -->
  <a href="/register" class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white px-4 py-2 rounded-lg font-medium shadow hover:from-indigo-600 hover:to-purple-600 transition">
    Register
  </a>
</div>


    </div>
  </div>
</nav>

  <!-- Offset content to avoid overlap with fixed nav -->
  <div class="pt-20">
    <!-- Page Header -->
    

    <!-- Page Content -->
    
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>
  <!-- Footer -->
<footer class="bg-gray-900 text-gray-300 py-12">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
    
    <div>
      <img src="/images/logo2.png" class="w-32 mb-4" alt="Logo">
      <p class="text-sm text-gray-400">FrameUp is your gateway to showcase and discover stunning art and photography from creators around the world.</p>
    </div>

    <div>
      <h4 class="text-white font-semibold mb-3">Quick Links</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="/" class="hover:text-white">Home</a></li>
        <li><a href="/explore" class="hover:text-white">Explore</a></li>
        <li><a href="/artists" class="hover:text-white">Artists</a></li>
        <li><a href="/about" class="hover:text-white">About Us</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-white font-semibold mb-3">Legal</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-white">Terms & Conditions</a></li>
      </ul>
    </div>

    <div>
      <h4 class="text-white font-semibold mb-3">Follow Us</h4>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-white">🌐</a>
        <a href="#" class="hover:text-white">📸</a>
        <a href="#" class="hover:text-white">🐦</a>
        <a href="#" class="hover:text-white">🎨</a>
      </div>
    </div>

  </div>

  <div class="text-center mt-8 text-sm text-gray-500">
    © {{ date('Y') }} FrameUp. All rights reserved.
  </div>
</footer>

  <script>
  window.addEventListener('scroll', function () {
    const navbar = document.getElementById('main-navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('bg-white', 'backdrop-blur-md', 'shadow', 'border-b', 'border-gray-200');
      navbar.classList.remove('bg-transparent');
    } else {
      navbar.classList.remove('bg-white', 'backdrop-blur-md', 'shadow', 'border-b', 'border-gray-200');
      navbar.classList.add('bg-transparent');
    }
  });
</script>

</body>
</html>
