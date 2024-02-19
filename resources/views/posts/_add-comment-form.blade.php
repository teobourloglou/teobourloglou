@auth
    <form action="/posts/{{ $post->slug }}/comments" method="post" class="p-6 rounded-xl border border-gray-200">
        @csrf

        <header class="flex items-center ">
            <img src="https://i.pravatar.cc/70?id={{ auth()->id() }}" alt="" width="70" height="70"
                class="rounded-full">
            <h2 class="ml-4">Want to participate?</h2>
        </header>

        <div class="mt-6">
            <textarea class="w-full text-sm focus:outline-none focus:ring" name="body" id="" cols="30"
                rows="5" placeholder="Quick, think of something to say!" required></textarea>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-6">
            <x-form.button>Submit</x-form.button>
        </div>
    </form>
@else
    <p>
        <a href="/login">Log in to leave a comment.</a>
    </p>
@endauth
