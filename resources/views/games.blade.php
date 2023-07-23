@extends('layouts.app')

@section('content')




    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">


        @foreach($gamesActive as $game)
            <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
            <div
                class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16"
            >
                <div
                    class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right"
                >

                    <img class="object-center object-cover rounded-full h-36 w-36 mb-8 -mt-20 mx-auto" src="{{ asset('storage/' . $game->picture) }}" alt="logo {{$game->name}}"/>

                    <h2 class="text-3xl font-bold sm:text-4xl">{{$game->name}}</h2>

                    <p class="mt-4 text-gray-600">
                        {{$game->description}}
                    </p>

                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 text-center">






                    <div
                        class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"
                        href="/accountant"
                    >
          <div class="inline-block rounded-full bg-gray-50 p-3">
            <img class="rounded-full h-20 w-20" />
          </div>
                        <h2 class="mt-2 font-bold">Accountant</h2>
                        <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                            Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

@endsection
