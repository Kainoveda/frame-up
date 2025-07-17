<!-- resources/views/auth/register.blade.php -->
<x-layout>
  <div class="min-h-screen flex flex-col items-center justify-center bg-none-to-r from-indigo-100 via-purple-100 to-pink-100 px-4 py-12 relative">

    <!-- Logo -->
    <div class="mb-6">
      <a href="/">
        <img src="/images/logo.png" alt="Logo" class="w-24 md:w-64 mx-auto" />
      </a>
    </div>

    <!-- Transparent Register Card -->
    <div class="max-w-md w-full bg-white/10 backdrop-blur-sm border border-white/20 p-6 rounded-2xl shadow-xl">
      <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Create an Account</h2>

    <form method="POST" action="{{ route('register.store') }}">

        @csrf
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700">Full Name</label>
          <input type="text" name="full_name" class="mt-2 block w-full h-8 pl-4 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" class="mt-2 block w-full h-8 pl-4 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700">Username</label>
          <input type="text" name="username" class="mt-2 block w-full h-8 pl-4 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" class="mt-2 block w-full h-8 pl-4 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <div class="mb-6">
          <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input type="password" name="password_confirmation" class="mt-2 block w-full h-8 pl-4 rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
        </div>

        <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-2 rounded-md font-semibold hover:from-indigo-600 hover:to-purple-700 transition">
          Register
        </button>
      </form>
    </div>
  </div>
</x-layout>
