@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Notifikasi QnA</h1>
    
    <!-- Search Form -->
    <form method="GET" action="{{ route('admin.contacts.index') }}" class="mb-6 flex flex-col sm:flex-row sm:items-center gap-4">
        <input type="text" name="search" placeholder="Cari pesan, email, nama, atau judul..." value="{{ request('search') }}"
               class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" />
        <button type="submit"
                class="px-6 py-2 bg-blue-600 text-white rounded-md font-semibold transition duration-300 hover:bg-blue-700">
            Search
        </button>
    </form>

    @if(session('success'))
    <div class="mb-6">
        <div class="bg-green-500 text-white px-6 py-4 rounded-lg shadow-2xl animate__animated animate__fadeInDown">
            <p class="font-bold text-2xl">Sukses!</p>
            <p class="mt-2">Pesan telah dihapus/dijawab dan email konfirmasi telah terkirim.</p>
        </div>
    </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Nama</th>
                    <th class="py-3 px-4 text-left">Judul</th>
                    <th class="py-3 px-4 text-left">Pesan</th>
                    <th class="py-3 px-4 text-left">Tanggal</th>
                    <th class="py-3 px-4 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @forelse($contacts as $contact)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-4">{{ $contact->id }}</td>
                    <td class="py-3 px-4">{{ $contact->email }}</td>
                    <td class="py-3 px-4">{{ $contact->name }}</td>
                    <td class="py-3 px-4">{{ $contact->subject }}</td>
                    <td class="py-3 px-4">{{ Str::limit($contact->message, 50) }}</td>
                    <td class="py-3 px-4">{{ $contact->created_at->format('d M Y') }}</td>
                    <td class="py-3 px-4 space-x-2">
                        <a href="{{ route('admin.contacts.answerForm', $contact->id) }}" class="text-blue-600 hover:underline">Answer</a>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="py-4 px-4 text-center text-gray-600">Tidak ada data pesan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $contacts->withQueryString()->links() }}
    </div>
</div>
@endsection