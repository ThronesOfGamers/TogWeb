@extends('layouts.app')

@section('content')

<!-- hero section -->

<section>
    <div class=" items-center w-full px-5 py-24 mx-auto md:px-12 lg:px-16 max-w-7xl">
        <div class=" flex-col items-start m-auto align-middle">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 lg:gap-24">
                <div class=" items-center gap-12 m-auto lg:inline-flex md:order-first">
                    <div class="max-w-xl text-center lg:text-left">
                        <div><p class="text-2xl font-medium tracking-tight text-black sm:text-4xl">
                                Le jeux le plus populaire de la teams : {{ \App\Http\Controllers\GamesController::famousGames($famousGames->game_id)->name }}
                            </p>
                        </div>

                    </div>
                </div>
                <div class="order-first block w-full mt-12 aspect-square lg:mt-0">
                    <img class="object-cover object-center w-full mx-auto bg-gray-300 border lg:ml-auto" alt="logo {{ \App\Http\Controllers\GamesController::famousGames($famousGames->game_id)->name }}" title="logo {{ \App\Http\Controllers\GamesController::famousGames($famousGames->game_id)->name }}" src="{{ asset('storage/' . \App\Http\Controllers\GamesController::famousGames($famousGames->game_id)->picture) }}">
                </div>
            </div>
        </div>
        <div>
            <div class="pt-12 mx-auto lg:max-w-7xl">
                <dl class="grid grid-cols-1 gap-6 space-y-0 text-center lg:gap-24 lg:grid-cols-3 lg:text-left">
                    <div>
                        <div>
                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Developer experience
                            </p>
                        </div>
                        <div class="mt-2 text-base text-gray-500">
                            Plus, our platform is constantly evolving to meet the changing
                            needs of the tech industry, ensuring you'll always be ahead.
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Designers go-to app
                            </p>
                        </div>
                        <div class="mt-2 text-base text-gray-500">
                            Plus, our platform is constantly evolving to meet the changing
                            needs of the tech industry, ensuring you'll always be ahead.
                        </div>
                    </div>
                    <div>
                        <div>
                            <p class="mt-5 text-lg font-medium leading-6 text-black">
                                Easy onboarding
                            </p>
                        </div>
                        <div class="mt-2 text-base text-gray-500">
                            Plus, our platform is constantly evolving to meet the changing
                            needs of the tech industry, ensuring you'll always be ahead.
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>

<section>


@foreach($gamesActive as $game)

    <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16 mx-auto">
        <div
            class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16"
        >
            <div
                class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right"
            >
                <img src="{{asset('storage/' . $game->picture)}} " alt="{{asset('storage/' . $game->name)}}" title="{{asset('storage/' . $game->name)}}" class="rounded-full mx-auto object-center object-cover h-36 w-36">
                <h2 class="text-3xl font-bold sm:text-4xl">{{ $game->name }}</h2>

                <p class="mt-4 text-gray-600">
                    {{ $game->description }}
                </p>

            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 text-center">
                <div
                    class="block rounded-xl border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring"

                >
          <span class="inline-block rounded-lg bg-gray-50 p-3 ">
            <svg
                class="h-6 w-6"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
              <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
              <path
                  d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
              ></path>
              <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
              ></path>
            </svg>
          </span>

                    <h2 class="mt-2 font-bold">Accountant</h2>

                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Lorem ipsum dolor sit amet consectetur.
                    </p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</section>




@endsection
