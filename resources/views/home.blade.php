@extends('layouts.app')

@section('content')

<!-- hero section -->
<section class="bg-gray-50">
    <div
        class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
    >
        <div class="mx-auto max-w-xl text-center">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
               ThronesOfGamers
                <strong class="font-extrabold text-red-700 sm:block">
                    Team Gaming
                </strong>
            </h1>

            <p class="mt-4 sm:text-xl/relaxed">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
                tenetur fuga ducimus numquam ea!
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a
                    class="block w-full rounded bg-red-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                    href="/get-started"
                >
                    En savoir plus
                </a>

                <a
                    class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                    href="/about"
                >
                    New's
                </a>
            </div>
        </div>
    </div>
</section>



<!-- New's section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">

            @foreach( $news as $new  )
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('storage/' . $new->picture) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 dark:from-gray-800/50">
                    {{ $new->title }}
                </div>
            </div>
            @endforeach
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
</section>


<!-- Games section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
<div class="text-center pb-12">
    <h2 class="text-base font-bold text-indigo-600">
        We have the best equipment
    </h2>
    <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
        Nos Jeux du moment
    </h1>
</div>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:gap-8">
        @foreach ($games as $game)
            <div class="flex justify-center">
        <div class="h-32 rounded-lg bg-gray-100"> <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/' . $game->picture) }}" alt="photo">
        <h3 class="text-center font-bold text-2xl "> {{ $game->name }}</h3>
        </div>
            </div>


        @endforeach
    </div>

</section>
    <!--Members section-->
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                We have the best equipment
            </h2>
            <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
                Nos membres
            </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 justify-items-center">
            @foreach ($members as $member)
                <div class="w-full rounded-lg p-12 flex flex-col justify-center items-center">

                    <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/' . $member->picture) }}" wire:click="openModal({{ $member->id }})" alt="photo">

                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">{{ $member->pseudo }}</p>
                        <p class="text-base text-gray-400 font-normal">{{ $member->grade }}</p>
                    </div>
                    <div class="mt-6 flex space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600">github<i class="fab fa-youtube"></i></a>

                        <a href="#" class="text-gray-600 hover:text-blue-600">twitch<i class="fab fa-twitch"></i></a>
                    </div>
                </div>

                <livewire:members-modal/>
            @endforeach

        </div>
    </section>



@endsection
