@props(['treatment'])
<div class="flex flex-col lg:flex-row justify-between items-center gap-12  xl:gap-24">

    <div class="lg:w-1/2">
        <img src="{{asset('storage/' .$treatment->thumbnail)}}" alt="{{$treatment->name}}" class="aspect-[4/3] object-cover shadow-md" loading="lazy">
    </div>

    <div class="lg:w-1/2 space-y-4">
        <div class="flex flex-col gap-4">

            <h2 class="text-secondary-400 text-3xl  font-medium">{{$treatment->name}}</h2>
            <p>{{$treatment->description}}</p>
        </div>

        <div>
            <h3 class="font-medium text-lg">Wskazania:</h3>
            <div class="prose">

                {!!$treatment->indications!!}
            </div>
        </div>
        
    </div>

</div>