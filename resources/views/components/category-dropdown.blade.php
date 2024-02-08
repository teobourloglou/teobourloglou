<x-dropdown>

    <x-slot name="trigger">
        <button class="text-sm font-semibold px-3 py-2 lg:w-32 text-left flex lg:inline-flex w-full">

            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
    
            <x-down-arrow />
        </button>

    </x-slot>

    <x-dropdown-link href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="request()->routeIs('home')">All</x-dropdown-link>

    @foreach ($categories as $category)
        <x-dropdown-link
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='request()->is("categories/{$category->slug}")'
        >{{ ucwords($category->name) }}</x-dropdown-link>
    @endforeach    
</x-dropdown>