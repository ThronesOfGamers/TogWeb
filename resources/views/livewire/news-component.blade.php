<!-- New's section -->

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 bt-5" id="news">

    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            Nos dernières actualité
        </h2>
        <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 mb-5">
            Actualité
        </h3>

    </div>

    <div class="grid grid-cols-2 gap-4">
        @foreach( $news as $new)

            <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
                <img src="{{ asset('storage/' .  $new->picture)  }}" alt="{{$new->title}} New's cover" title="{{$new->title}} New's cover" class="h-56 w-full object-cover"/>

                <div class="bg-white p-4 sm:p-6">
                    <div class="flex justify-between">
                        <time datetime="2022-10-10" class="block text-xs text-gray-700">
                            {{ date("dS M Y", strtotime($new->date_publish)) }}
                        </time>
                        <p class="text-xs text-gray-700" > By {{  App\Http\Livewire\NewsComponent::authorName($new->author) }}</p>
                        <span class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-0.5 text-xs text-purple-600">
        {{App\Http\Livewire\NewsComponent::categoryName($new->category_id)}}
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


        @endforeach
    </div>



</section>
