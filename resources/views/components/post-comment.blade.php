@props(['comment'])

<article class="flex space-x-4 bg-gray-100 p-6 rounded-xl border border-gray-200">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/70?id={{ $comment->author->id }}" alt="" width="70" height="70" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold ">{{ $comment->author->username }}</h3>
            <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
        </header>

        <p>{{ $comment->body }}</p>
    </div>
</article>