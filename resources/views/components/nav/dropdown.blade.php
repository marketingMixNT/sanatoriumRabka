@props(['title'])

<li>

    <div class="group relative cursor-pointer py-2">

        <div class="flex items-center justify-between menu-hover ">

            <span>

                {{$title}}
            </span>

            <span>
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="m1 1 4 4 4-4" />
            </span>
        </div>

        <ul
            class="mt-2 invisible absolute z-50 flex  flex-col bg-gray-100 py-1 px-4  shadow-xl group-hover:visible w-44">

            {{$slot}}

        </ul>
    </div>
</li>