@props(['okay']) {{--just to show which varible i being passed. --}}

<article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="py-6 px-5 lg:flex">
            <div class="flex-1 lg:mr-8">
                <img src="/storage/{{ $okay->thumbnail }}" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="flex-1 flex flex-col justify-between">
                <header class="mt-8 lg:mt-0">
                    <div class="space-x-2">
                        <a href="/catagories/{!! $okay->catagories->slug !!}"
                           class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                           style="font-size: 10px">{!! $okay->catagories->name!!}</a>
                    </div>

                    <div class="mt-4">
                        <h1 class="text-3xl">
                            <a href="/okay/{!! $okay->Slug !!}">
                            {!! $okay->title !!}
                            </a>
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                        {{-- @dd( $okay->date); --}}
                                Published <time>{{ $okay->created_at->diffForHumans() }}</time>
                            </span>
                    </div>
                </header>

                <div class="text-sm mt-2">
                    <p>
                        {!! $okay->Slug!!}
                    </p>

                    
                </div>

                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                    <img src="https://i.pravatar.cc/150?u={{$okay->catagories}}" alt="Lary avatar" height="60px" width="60px">
                        <div class="ml-3">
                            <a href="/?authors={!! $okay->author->username !!}">
                            <h5 class="font-bold">
                            {!! $okay->author->name !!}</h5></a>
                            <h6>language :- {{$okay->language}}</h6>
                        </div>
                    </div>

                    <div class="hidden lg:block">
                        <a href="/okay/{!! $okay->Slug !!}"
                           class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                        >Read More</a>
                    </div>
                </footer>
            </div>
        </div>
    </article>