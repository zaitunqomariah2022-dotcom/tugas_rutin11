<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kategori') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-bold text-gray-700 mb-6">
                    Edit Kategori
                </h3>

                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block font-medium text-gray-700 mb-2">
                            Nama Kategori
                        </label>

                        <input type="text"
                               name="name"
                               value="{{ old('name', $category->name) }}"
                               class="w-full border-gray-300 rounded-lg">
                    </div>

                    <div class="mb-6">
                        <label class="block font-medium text-gray-700 mb-2">
                            Deskripsi
                        </label>

                        <textarea name="description"
                                  rows="4"
                                  class="w-full border-gray-300 rounded-lg">{{ old('description', $category->description) }}</textarea>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('categories.index') }}"
                           class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">
                            Kembali
                        </a>

                        <button type="submit"
                                class="px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                            Update Kategori
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>