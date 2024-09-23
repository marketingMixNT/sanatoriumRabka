<div class="m-1 hs-dropdown [--trigger:hover] relative inline-flex">
    <button id="hs-dropdown-hover-event" type="button" class="flex justify-center items-center gap-1"
        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
        {{$title}}
        <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
        </svg>
    </button>

    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-sm p-1 space-y-0.5 mt-2  after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">
        {{$slot}}




    </div>

</div>