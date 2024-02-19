<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl bg-gray-100 border border-gray-200">
            <h1 class="text-center font-bold text-xl">Log in!</h1>

            <form action="/sessions" method="POST" class="mt-10">
                @csrf

                <x-form.input name="email" type="email" />
                <x-form.input name="password" type="password" />

                <div class="mb-6 mt-10">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-400">
                        Log in
                    </button>
                </div>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

            </form>

        </main>
    </section>
</x-layout>