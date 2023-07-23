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

    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            Nos dernières actualité
        </h2>

    </div>

    <div class="grid grid-cols-2 gap-4">
        @foreach( $news as $new)
<a href="">
            <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                <img src="{{ asset('storage/' .  $new->picture)  }}" alt="{{$new->title}} New's cover" title="{{$new->title}} New's cover" class="h-56 w-full object-cover"/>

                <div class="bg-white p-4 sm:p-6">
                    <div class="flex justify-between">
                    <time datetime="2022-10-10" class="block text-xs text-gray-700">
                        {{ date("dS M Y", strtotime($new->date_publish)) }}
                    </time>
                        <p class="text-xs text-gray-700"> By {{ \App\Http\Controllers\HomeController::authorName($new->author) }}</p>
                        <span
                            class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600"
                        >
        {{\App\Http\Controllers\HomeController::categoryName($new->category_id)}}
      </span>
                    </div>


                    <h3 class="mt-0.5 text-lg text-gray-900 text-center">
                            {{$new->title}}
                    </h3>

                    <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                        {{$new->meta_description}}
                    </p>


                </div>
            </article>
</a>

        @endforeach
    </div>



</section>

















<!-- Games section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">


<div class="text-center pb-12">
    <h2 class="text-base font-bold text-indigo-600">
        Le gaming est tout un art
    </h2>
    <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
        Nos Jeux du moment
    </h3>
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

    <livewire:members-component />



@endsection
