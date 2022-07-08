

<x-post-featured-card :okay="$okay[0]" />

        @if ($okay -> count() > 1) 
            <div class="lg:grid lg:grid-cols-6">
            @foreach( $okay->skip(1) as $okay)
                <x-post-card 
                :okay="$okay"
                {{-- @dd($loop); --}}
                class="{{ $loop->iteration <3 ? 'col-span-3' : 'col-span-2'}}"/>
            @endforeach 
        @endif