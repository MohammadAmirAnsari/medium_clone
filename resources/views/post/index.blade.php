<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
    </h2>
    </x-slot> --}}

    <x-category-item></x-category-item>

    <x-pagination :count="$posts->count()" :links="$posts->links()"></x-pagination>

    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xs sm:rounded-lg">
                <div
                    class="p-4 text-gray-900 dark:text-gray-100 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 place-self-center">
                    @forelse ($posts as $post)
                        <x-post-item :post="$post"></x-post-item>
                    @empty
                        <div
                            class="w-full text-center bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs">
                            <h5 class="mb-3 text-2xl tracking-tight font-semibold text-heading">No Post Available</h5>
                            <p class="text-base text-body sm:text-lg">Stay tuned. We'll be back.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <x-pagination :count="$posts->count()" :links="$posts->links()"></x-pagination>

    <div class="py-4">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xs sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
