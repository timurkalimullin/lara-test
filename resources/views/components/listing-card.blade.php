@props(['listing'])

<x-card class="mb-4">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{asset('images/no-image.png')}}"
            alt=""
        />
        <div>
            <h3 class="text-2xl text-rose-600 hover:text-rose-900">
                <a href="/listings/{{$listing->id}}">{{ $listing->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company}}</div>
            <ul class="flex">
            <x-listing-tags :tagsCsv="$listing->tags" />
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot mr-4"></i>{{$listing->location}}</div>
        </div>
    </div>
</x-card>
