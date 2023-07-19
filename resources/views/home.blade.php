@extends('layouts.app')

@section('content')


    <section class="bg-gray-50">
        <div
            class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
        >
            <div class="mx-auto max-w-xl text-center">
                <h1 class="text-3xl font-extrabold sm:text-5xl">
                    Understand User Flow.
                    <strong class="font-extrabold text-red-700 sm:block">
                        Increase Conversion.
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
                        Get Started
                    </a>

                    <a
                        class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                        href="/about"
                    >
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>













    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-indigo-600">
                We have the best equipment
            </h2>
            <h1 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
                Nos membres
            </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 ">
            @foreach ($members as $member)
                <div class="w-full rounded-lg p-12 flex flex-col justify-center items-center">
                    <div class="mb-8 -mt-20">
                        <img class="object-center object-cover rounded-full h-36 w-36" src="{{ asset('storage/' . $member->picture) }}" alt="photo">
                    </div>
                    <div class="text-center">
                        <p class="text-xl text-gray-700 font-bold mb-2">{{ $member->pseudo }}</p>
                        <p class="text-base text-gray-400 font-normal">{{ $member->grade }}</p>
                    </div>
                </div>

            @endforeach
        </div>
    </section>
@endsection
