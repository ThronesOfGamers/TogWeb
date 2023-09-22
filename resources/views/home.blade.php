@extends('layouts.app')

@section('content')

<!-- hero section -->
<section class="bg-gray-50 bt-5">
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
                    href="#about"
                >
                    En savoir plus
                </a>

                <a
                    class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                    href="/news"
                >
                    New's
                </a>
            </div>
        </div>
    </div>
</section>

<livewire:about-component />

<livewire:news-component />
<livewire:games-component />

<livewire:members-component :key="'members-component'" />
<livewire:members-modal :key="'members-modal'" />

@include('Components.contact')

@endsection
