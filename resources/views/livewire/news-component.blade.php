<!-- New's section -->

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12 bt-5" id="news">

    <div class="text-center pb-12">
        <h2 class="text-base font-bold text-indigo-600">
            Une team actif est toujours mieux qu'une team inactive
        </h2>
        <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl font-heading text-gray-900 ">
            Nos dernières actualité
        </h3>

    <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-24 lg:py-32">
        <div class="grid justify-items-stretch md:mb-12 md:grid-cols-3 md:gap-4 lg:mb-16 lg:gap-6">
            @foreach( $news as $new)
                <a href="#" class="flex flex-col gap-4 rounded-md px-4 py-8 md:p-0">
                    <img src="{{ asset('storage/' .  $new->picture)  }}" alt="{{$new->title}} New's cover" title="{{$new->title}} New's cover" class="h-56 w-full object-cover"/>
                    <div class="flex flex-col items-start py-4">
                        <div class="mb-4 rounded-md bg-[#f2f2f7] px-2 py-1.5">
                            <p class="text-sm font-semibold text-[#6574f8]">{{App\Http\Livewire\NewsComponent::categoryName($new->category_id)}}</p>
                        </div>
                        <p class="mb-4 text-xl font-bold md:text-2xl">{{$new->title}}</p>
                        <div class="flex flex-col text-sm text-[#636262] lg:flex-row">
                            <p>By {{  App\Http\Livewire\NewsComponent::authorName($new->author) }}</p>
                            <p class="mx-2 hidden lg:block">-</p>
                            <p> {{ date("dS M Y", strtotime($new->date_publish)) }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    </div>
</section>
