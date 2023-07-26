@extends('layouts.app')

@section('content')


    <section>
        <div class="items-center px-8 py-12 mx-auto max-w-7xl lg:px-16 md:px-12 lg:py-24">
            <div class="justify-center w-full text-center lg:p-10 max-auto">
                <div class="justify-center w-full mx-auto">

                    <p class="mt-8 text-5xl font-medium tracking-tighter text-black">
                        Nos Membres
                    </p>
                    <p class="max-w-xl mx-auto mt-4 text-lg tracking-tight text-gray-600">
                        If you could kick the person in the pants responsible for most of your
                        trouble, you wouldn't sit for a month
                    </p>
                </div>
            </div>
            <div class="flex justify-center gap-6 mt-6">
                <a class="p-1 -m-1 group" aria-label="Follow on Twitter" href="#">
                    <ion-icon class="w-6 h-6 transition fill-black hover:text-blue-500 md hydrated" name="logo-twitter" role="img" aria-label="logo twitter"></ion-icon>
                </a><a class="p-1 -m-1 group" aria-label="Follow on Instagram" href="#">
                    <ion-icon class="w-6 h-6 transition fill-black hover:text-blue-500 md hydrated" name="logo-instagram" role="img" aria-label="logo instagram"></ion-icon></a><a class="p-1 -m-1 group" aria-label="Follow on GitHub" href="#">
                    <ion-icon class="w-6 h-6 transition fill-black hover:text-blue-500 md hydrated" name="logo-github" role="img" aria-label="logo github"></ion-icon></a><a class="p-1 -m-1 group" aria-label="Follow on LinkedIn" href="#">
                    <ion-icon class="w-6 h-6 transition fill-black hover:text-blue-500 md hydrated" name="logo-linkedin" role="img" aria-label="logo linkedin"></ion-icon>
                </a>
            </div>
        </div>
    </section>


    <!--
      Heads up! 👋

      This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
    -->

    <section class=" ">

        <div class="max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16 mx-auto">
            <div
                class="grid grid-cols-1 gap-y-8 lg:grid-cols-2 lg:items-center lg:gap-x-16"
            >
                <div
                    class="mx-auto max-w-lg text-center lg:mx-0 ltr:lg:text-left rtl:lg:text-right"
                >
                    <img src="" alt="" title="" class="rounded-full mx-auto">
                    <h2 class="text-3xl font-bold sm:text-4xl">Find your career path</h2>

                    <p class="mt-4 text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero
                        aliquid sint distinctio iure ipsum cupiditate? Quis, odit assumenda?
                        Deleniti quasi inventore, libero reiciendis minima aliquid tempora.
                        Obcaecati, autem.
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

    </section>


@endsection
