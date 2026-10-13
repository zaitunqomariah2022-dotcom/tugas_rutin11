
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kategori') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <h3 class="text-lg font-bold text-gray-700 mb-6">
                    Tambah Kategori Baru
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

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name"
                               class="block font-medium text-gray-700 mb-2">
                            Nama Kategori
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            class="w-full border-gray-300 rounded-lg focus:border-pink-500 focus:ring-pink-500"
                            placeholder="Contoh: Elektronik"
                            required
                        >
                    </div>

                    <div class="mb-6">
                        <label for="description"
                               class="block font-medium text-gray-700 mb-2">
                            Deskripsi
                        </label>

                        <textarea
                            id="description"
                            name="description"
                            rows="4"
                            class="w-full border-gray-300 rounded-lg focus:border-pink-500 focus:ring-pink-500"
                            placeholder="Masukkan deskripsi kategori"
                        >{{ old('description') }}</textarea>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <a
                            href="{{ route('categories.index') }}"
                            class="inline-block px-5 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300"
                        >
                            Kembali
                        </a>

                        <button
                            type="submit"
                            class="inline-block px-5 py-3 bg-pink-500 text-white font-semibold rounded-lg hover:bg-pink-600"
                        >
                            Simpan Kategori
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
