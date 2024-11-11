@extends('user.layouts.app')

@section('title', 'Blog Page')

@php
$featuredPost = [
    'title' => 'Khám phá vẻ đẹp ẩn giấu của Hội An',
    'excerpt' => 'Hội An không chỉ có phố cổ, hãy cùng chúng tôi khám phá những điểm đến tuyệt vời ít người biết đến.',
    'featured_image' => 'https://media.istockphoto.com/id/1429367591/vi/anh/m%E1%BB%99t-gia-%C4%91%C3%ACnh-trong-k%E1%BB%B3-ngh%E1%BB%89-h%C3%A8-%C4%91%E1%BB%A9ng-b%C3%AAn-h%E1%BB%93-b%C6%A1i-v%C3%A0-t%E1%BA%ADn-h%C6%B0%E1%BB%9Fng-c%E1%BA%A3nh-ho%C3%A0ng-h%C3%B4n-tuy%E1%BB%87t-%C4%91%E1%BA%B9p.jpg?s=2048x2048&w=is&k=20&c=8nfsgkJNVCzOainEs-Jlq-mTpaqHKQXVAWEjcM3eXDs=',
    'category' => [
        'name' => 'Du lịch Việt Nam'
    ],
    'author' => [
        'name' => 'Nguyễn Văn A',
        'avatar' => 'https://example.com/images/nguyen-van-a-avatar.jpg'
    ],
    'published_at' => now(),
    'reading_time' => 8
];

$latestPosts = [
    [
        'title' => '10 món ăn đường phố phải thử ở Bangkok',
        'excerpt' => 'Khám phá ẩm thực đường phố đa dạng và hấp dẫn của thủ đô Thái Lan.',
        'featured_image' => 'https://example.com/images/bangkok-street-food.jpg',
        'category' => [
            'name' => 'Ẩm thực'
        ],
        'author' => [
            'name' => 'Trần Thị B',
            'avatar' => 'https://example.com/images/tran-thi-b-avatar.jpg'
        ],
        'published_at' => now()->subDays(2),
        'reading_time' => 6
    ],
    [
        'title' => 'Hướng dẫn chi tiết cho chuyến du lịch bụi Châu Âu',
        'excerpt' => 'Lên kế hoạch cho chuyến phiêu lưu qua các quốc gia Châu Âu với ngân sách hợp lý.',
        'featured_image' => 'https://example.com/images/europe-backpacking.jpg',
        'category' => [
            'name' => 'Du lịch bụi'
        ],
        'author' => [
            'name' => 'Lê Văn C',
            'avatar' => 'https://example.com/images/le-van-c-avatar.jpg'
        ],
        'published_at' => now()->subDays(5),
        'reading_time' => 10
    ],
    [
        'title' => 'Top 5 bãi biển đẹp nhất Phú Quốc',
        'excerpt' => 'Khám phá những bãi biển trong xanh và hoang sơ nhất tại đảo ngọc Phú Quốc.',
        'featured_image' => 'https://example.com/images/phu-quoc-beaches.jpg',
        'category' => [
            'name' => 'Du lịch biển'
        ],
        'author' => [
            'name' => 'Phạm Thị D',
            'avatar' => 'https://example.com/images/pham-thi-d-avatar.jpg'
        ],
        'published_at' => now()->subDays(7),
        'reading_time' => 7
    ]
];

$categories = [
    ['name' => 'Du lịch Việt Nam'],
    ['name' => 'Ẩm thực'],
    ['name' => 'Du lịch bụi'],
    ['name' => 'Du lịch biển'],
    ['name' => 'Văn hóa'],
    ['name' => 'Mẹo du lịch']
];
@endphp

@section('content')
    <div class="bg-gray-50">
        <!-- Hero Section -->
        <section class="relative h-[500px] mb-12">
            <div class="absolute inset-0">
                <img src="{{ $featuredPost['featured_image'] }}" 
                    class="w-full h-full object-cover" 
                    alt="Featured post">
                <div class="absolute inset-0 bg-black opacity-40"></div>
            </div>
            
            <div class="relative container mx-auto px-4 h-full flex items-end pb-16">
                <div class="text-white max-w-2xl">
                    <span class="bg-white/20 px-3 py-1 rounded-full text-sm">
                        {{ $featuredPost['category']['name'] }}
                    </span>
                    <h1 class="text-4xl font-bold mt-4 mb-2">
                        {{ $featuredPost['title'] }}
                    </h1>
                    <p class="text-gray-200 mb-4">
                        {{ $featuredPost['excerpt'] }}
                    </p>
                    <div class="flex items-center gap-4">
                        <img src="{{ $featuredPost['author']['avatar'] }}" 
                            class="w-10 h-10 rounded-full" 
                            alt="Author">
                        <div>
                            <p class="font-medium">{{ $featuredPost['author']['name'] }}</p>
                            <p class="text-sm">
                                {{ $featuredPost['published_at']->format('d M Y') }} • 
                                {{ $featuredPost['reading_time'] }} mins read
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section -->
        <main class="container mx-auto px-4 py-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Latest Posts</h2>
                    <p class="text-gray-600">
                        Discover travel tips, destination guides, and inspiring stories.
                    </p>
                </div>
                <div class="flex gap-4">
                    <button class="px-4 py-2 bg-gray-100 rounded-full hover:bg-gray-200">
                        Latest
                    </button>
                    <button class="px-4 py-2 bg-gray-100 rounded-full hover:bg-gray-200">
                        Popular
                    </button>
                </div>
            </div>

            <!-- Blog Posts Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ $post['featured_image'] }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-500">{{ $post['category']['name'] }}</span>
                        <h3 class="text-xl font-semibold mt-2 mb-3">{{ $post['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $post['excerpt'] }}</p>
                        <div class="flex items-center">
                            <img src="{{ $post['author']['avatar'] }}" alt="{{ $post['author']['name'] }}" class="w-10 h-10 rounded-full mr-4">
                            <div>
                                <p class="font-medium">{{ $post['author']['name'] }}</p>
                                <p class="text-sm text-gray-500">
                                    {{ $post['published_at']->format('d M Y') }} • {{ $post['reading_time'] }} mins read
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Categories -->
            <div class="mt-12">
                <h3 class="text-xl font-semibold mb-4">Categories</h3>
                <div class="flex flex-wrap gap-4">
                    @foreach($categories as $category)
                    <a href="#" class="px-4 py-2 bg-gray-100 rounded-full hover:bg-gray-200">
                        {{ $category['name'] }}
                    </a>
                    @endforeach
                </div>
            </div>
        </main>

        <footer class="bg-gray-800 text-white py-8 mt-12">
            <div class="container mx-auto px-4">
                <p>&copy; 2024 Travel Blog. All rights reserved.</p>
            </div>
        </footer>
    </div>
@endsection