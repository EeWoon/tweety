<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4 text-center">No Tweets Yet</p>
    @endforelse

    {{ $tweets->links() }}
</div>