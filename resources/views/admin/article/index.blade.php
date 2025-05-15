@extends('layouts.app')

@section('title', 'Manage Articles')

@section('content')
<div class="container mx-auto px-4 py-8">
  <div class="flex justify-between items-center mb-6" data-aos="fade-up">
    <h1 class="text-3xl font-bold">Articles</h1>
    <a href="{{ route('admin.article.create') }}" class="bg-masjid-blue text-white px-4 py-2 rounded hover:bg-masjid-green transition">
      Create Article
    </a>
  </div>

  {{-- Search & Filter --}}
  <form method="GET" action="{{ route('admin.article.index') }}" class="flex flex-wrap items-center gap-4 mb-6" data-aos="fade-up" data-aos-delay="100">
    {{-- Search Box with Icon --}}
    <div class="relative w-full sm:w-64">
      <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="11" cy="11" r="8" />
          <line x1="21" y1="21" x2="16.65" y2="16.65" />
        </svg>
      </span>
      <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Search title..."
        class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-masjid-blue focus:border-transparent transition duration-200"
      />
    </div>
  
    {{-- Category Dropdown --}}
    <div class="w-full sm:w-48">
      <select name="category"
        class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-masjid-blue focus:border-transparent transition duration-200">
        <option value="">-- All Categories --</option>
        @foreach($categories as $cat)
          <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
            {{ $cat }}
          </option>
        @endforeach
      </select>
    </div>
  
    {{-- Filter Button --}}
    <button type="submit"
      class="bg-masjid-blue text-white px-4 py-2 rounded hover:bg-masjid-green transition duration-200">
      Filter
    </button>
  </form>  

  {{-- Success message --}}
  @if(session('success'))
    <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4" data-aos="fade-up" data-aos-delay="100">
      {{ session('success') }}
    </div>
  @endif

  {{-- Data Summary --}}
  <div class="text-sm text-gray-600 mb-2" data-aos="fade-up" data-aos-delay="150">
    Showing {{ $articles->count() }} of {{ $articles->total() }} articles
  </div>

  {{-- Articles Table --}}
  <div class="bg-white shadow rounded-lg overflow-auto" data-aos="fade-up" data-aos-delay="200">
    <div class="min-w-[600px]"> <!-- ensure horizontal scroll for narrow screens -->
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          @forelse($articles as $article)
            <tr data-aos="fade-up" data-aos-delay="300">
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900 truncate max-w-xs">{{ $article->title }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $article->category }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ \Carbon\Carbon::parse($article->date)->format('d M Y') }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                <a href="{{ route('admin.article.show', $article->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                <a href="{{ route('admin.article.edit', $article->id) }}" class="text-green-600 hover:text-green-900">Edit</a>
                <form action="{{ route('admin.article.destroy', $article->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this article?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="4" class="px-6 py-4 text-center text-gray-500">No articles found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="p-4">
      {{ $articles->links() }}
    </div>
  </div>
</div>
@endsection