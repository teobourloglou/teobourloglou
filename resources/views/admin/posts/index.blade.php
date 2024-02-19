<x-layout>
    <x-setting heading="Manage Posts">
        <table class="min-w-full divide-y divide-gray-300">
        <tbody class="divide-y divide-gray-200">
            @foreach ($posts as $post)
                <tr class="items-center">
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </td>
                    <td class="">
                        <span class="inline-flex px-2 text-xs rounded-full bg-green-100 text-green-800">
                            Published
                        </span>
                    </td>
                    <td>
                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="admin/posts/{{ $post->id }}">
                            @csrf
                            @method('DELETE')

                            <button class="text-xs text-gray-400">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            <!-- More people... -->
        </tbody>
        </table>
    
    </x-setting>
</x-layout>