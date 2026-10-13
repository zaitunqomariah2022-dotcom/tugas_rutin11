<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Kategori') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-700">
                        Data Kategori
                    </h3>

                    <a href="{{ route('categories.create') }}"
                       class="px-4 py-2 bg-pink-500 text-white rounded-lg hover:bg-pink-600">
                        + Tambah Kategori
                    </a>
                </div>

                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-pink-100">
                            <th class="border p-3 text-left">No</th>
                            <th class="border p-3 text-left">Nama Kategori</th>
                            <th class="border p-3 text-left">Deskripsi</th>
                            <th class="border p-3 text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="border p-3">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border p-3">
                                    {{ $category->name }}
                                </td>

                                <td class="border p-3">
                                    {{ $category->description ?? '-' }}
                                </td>

                                <td class="border p-3 text-center">
                                    <a href="{{ route('categories.edit', $category) }}"
                                       class="text-blue-500 mr-3">
                                        Edit
                                    </a>

                                    <form action="{{ route('categories.destroy', $category) }}"
                                          method="POST"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                                                class="text-red-500">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="border p-6 text-center text-gray-500">
                                    Belum ada kategori.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>