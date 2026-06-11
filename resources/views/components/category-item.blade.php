<div class="py-4">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xs sm:rounded-lg">
            <div class="p-4 text-gray-900 dark:text-gray-100">

                <ul class="flex flex-wrap text-sm font-medium text-center justify-center">

                    <li class="me-2">
                        <a href="#" class="inline-block px-4 py-2 text-white bg-brand rounded-base active"
                            aria-current="page">All</a>
                    </li>

                    @forelse ($categories as $category)
                        <li class="me-2">
                            <a href="#"
                                class="inline-block px-4 py-2 rounded-base hover:text-heading hover:bg-neutral-secondary-soft">{{ $category->name }}</a>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
