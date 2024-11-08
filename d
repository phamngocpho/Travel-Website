@foreach($ratingDistribution as $rating => $count)
<div class="flex items-center gap-2">
    <span class="w-3">{{ $rating }}</span>
    <div class="flex-1 h-2 bg-gray-200 rounded-full">
        <div
            class="h-2 bg-yellow-400 rounded-full"
            style="width: {{ $villa['reviews_count'] > 0 ? number_format(($count / $villa['reviews_count']) * 100, 2) . '%' : '0%' }}"
        ></div>
    </div>
    <span class="text-sm text-gray-600 w-8">({{ $count }})</span>
</div>
@endforeach