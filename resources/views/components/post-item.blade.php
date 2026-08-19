<div x-data="{ loading: true }" class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
    <div x-show="loading" role="status" class="space-y-8 animate-pulse md:space-y-0 rtl:space-x-reverse md:flex md:items-center">
        <div class="flex items-center justify-center w-full h-48 bg-neutral-quaternary rounded-base sm:w-96">
            <svg class="w-11 h-11 text-fg-disabled" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m3 16 5-7 6 6.5m6.5 2.5L16 13l-4.286 6M14 10h.01M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
            </svg>
        </div>
        <span class="sr-only">Loading...</span>
    </div>
    <div x-show="!loading" x-cloak class="">

        <a href="#">
            <!-- comment for not repetedly hitting image server -->
            <!-- <img class="rounded-base" src="{{ $post->image }}" alt="" width="600" height="400" loading="lazy" fetchpriority="low" @load="loading = false" /> -->
        </a>
    </div>
    <a href="#">
        <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading line-clamp-2">
            {{ $post->title }}
        </h5>
    </a>
    <p class="mb-6 text-body line-clamp-2">{{ Str::words($post->content, 10) }}</p>
    <a href="#"
        class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
        Read more
        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 12H5m14 0-4 4m4-4-4-4" />
        </svg>
    </a>
</div>