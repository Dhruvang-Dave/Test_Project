@props(['comment'])

<article class="flex bg-gray-200 border border-gray-300 p-3 space-x-3 rounded-xl">
    <div class="flex-shrink-0">
        <img src="/storage/{{ $okay->thumbnail }}" alt="" class="m-2 rounded-xl" width="60" height="60">
    </div>
    <div class="p-1">
        <header class="mb-2">
            <h3 class="font-bold"> {!! $comment->author->username !!}</h3>
            <p class="text-xs">
                <time> {!! $comment->created_at->format('F j, Y, g:i a'); !!}</time>
            </p>
        </header>

        <p>
            {!! $comment->body !!}
        </p>
    </div>
</article>
