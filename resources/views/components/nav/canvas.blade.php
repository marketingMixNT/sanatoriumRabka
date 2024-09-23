<div id="hs-offcanvas-example"
class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e "
role="dialog" tabindex="-1" aria-labelledby="hs-offcanvas-example-label">
<div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
    <a href="{{route('home')}}" aria-label="strona główna"><img src="{{asset('assets/logo/logo.png')}}"
            alt="logo sanatorium rabka" class="w-28"></a>
    <button type="button"
        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-sm border border-transparent bg-primary-400 text-fontLight hover:bg-primary-500 focus:outline-none focus:bg-primary-500 disabled:opacity-50 disabled:pointer-events-none "
        aria-label="Close" data-hs-overlay="#hs-offcanvas-example">
        <span class="sr-only">Close</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
        </svg>
    </button>
</div>
<div class="p-4">
    <x-nav.list-links />
</div>
</div>