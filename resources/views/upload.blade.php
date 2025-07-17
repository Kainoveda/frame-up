<x-layout>
  <x-slot name="heading">Upload</x-slot>

  <div class="max-w-3xl mx-auto px-4 py-12">
    <h1 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Upload Your Artwork</h1>

    {{-- Success Message --}}
    @if(session('success'))
      <div class="mb-4 text-green-600 font-semibold">
        {{ session('success') }}
      </div>
    @endif

    {{-- Error Display --}}
    @if ($errors->any())
      <div class="mb-4 text-red-600">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded-lg p-6 space-y-6">
      @csrf

      {{-- Title --}}
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Enter artwork title" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

      {{-- Description --}}
      <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
        <textarea name="description" id="description" rows="4" placeholder="Write a short description..." class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
      </div>

      {{-- Image File --}}
      <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
        <input type="file" name="image" id="image" class="w-full text-gray-700">
      </div>

      {{-- Submit Button --}}
      <div class="text-center">
        <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700 transition">
          Upload
        </button>
      </div>
    </form>
  </div>
</x-layout>
