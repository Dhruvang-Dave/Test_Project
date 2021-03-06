@extends('components.layout')

@section('main-section')

    <section class="px-6 py-8">
        
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-2">
            <article class="max-w-4xl mx-auto p-5 lg:grid lg:grid-cols-12 gap-x-10 hover:bg-gray-50 hover:border rounded-xl hover:border-gray-300">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/storage/{{ $okay->thumbnail }}" alt="" class="rounded-xl" height="250px" width="400px">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{!! $okay->created_at->diffForHumans() !!}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left"><a href="?authors={!! $okay->author->username !!}">
                            <h5 class="font-bold">
                            {!! $okay->author->name !!}</h5></a>
                            <h6>language :- {{$okay->language}}</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <a href="/catagories/{!! $okay->catagories->slug !!}"
                                class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                                style="font-size: 10px">{!! $okay->catagories->name!!}</a>
                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {!! $okay->title !!}
                    </h1>

                    <p class="space-y-4 lg:text-lg leading-loose pb-2">
                       Slug:-{!! $okay->Slug !!}
                    </p>

                    <div class="space-y-4 lg:text-lg leading-loose pb-5">
                        Body:- {!! $okay-> body!!}
                    </div>
                </div>

                <section class="col-span-8 col-start-5 space-y-6">

                @include('components._add-comment-form')

                   @foreach ( $okay->comments as $comment)
                        <x-post-comment :comment="$comment" :okay="$okay"/>
                   @endforeach
                </section>

            </article>
        </main>
    </section>
</body>

@endsection