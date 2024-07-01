<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Timeline</title>
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto p-4 max-w-2xl">
        
        <nav class="bg-white p-4 rounded shadow mb-6 flex justify-between items-center">
            <div class="text-xl font-bold text-blue-500">Timeline</div>
            <div class="flex items-center space-x-2">
                <div class="bg-blue-500 text-white rounded-full h-10 w-10 flex items-center justify-center text-xl font-semibold">
                    {{ substr(Auth::user()->name, 0, 2) }}
                </div>
                <div class="font-semibold">{{ Auth::user()->name }}</div>
            </div>
        </nav>

        <div class="bg-white p-6 rounded shadow mb-6">
            <form action="{{ route('posts.store') }}" method="POST" class="mb-4">
                @csrf
                <textarea name="body" class="border p-4 w-full rounded mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="What's happening?" required></textarea>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-600">Tweet</button>
                </div>
            </form>
        </div>

        <!-- Posts -->
        <div class="bg-white p-6 rounded shadow">
            @foreach ($posts as $post)
                <div class="border-b mb-4 pb-4">
                    <div class="flex items-start space-x-3">
                        <div class="bg-blue-500 text-white rounded-full h-10 w-10 flex items-center justify-center text-xl font-semibold">
                            {{ substr($post->user->name, 0, 2) }}
                        </div>
                        <div>
                            <p class="font-bold">{{ $post->user->name }} 
                                <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                            </p>
                            <p class="mb-2">{{ $post->body }}</p>
                            <div class="flex items-center space-x-1 text-gray-600">
                                <form action="{{ route('posts.like', $post->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex items-center hover:text-blue-500">
                                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                                        </svg>
                                        <span>{{ $post->likes_count ?? 0 }}</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</body>
</html>
