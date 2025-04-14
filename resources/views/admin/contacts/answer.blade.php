@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Jawab Pesan #{{ $contact->id }}</h1>
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-2xl p-8">
        <div class="mb-6">
            <p class="mb-2"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="mb-2"><strong>Nama:</strong> {{ $contact->name }}</p>
            <p class="mb-2"><strong>Judul:</strong> {{ $contact->subject }}</p>
            <p class="mb-2"><strong>Pesan:</strong> {{ $contact->message }}</p>
        </div>
        <form action="{{ route('admin.contacts.sendAnswer', $contact->id) }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="answer" class="block text-lg font-medium text-gray-700">Jawaban Anda</label>
                <textarea name="answer" id="answer" rows="5" required
                          class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>
            <button type="submit" class="w-full px-6 py-3 bg-green-600 text-white rounded-md font-semibold transition duration-300 hover:bg-green-500">
                Kirim Jawaban
            </button>
        </form>
    </div>
</div>
@endsection