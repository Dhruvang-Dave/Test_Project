{{-- <link rel="stylesheet" href="app.css">

<body>
    @php
            foreach ($okay as $ok):
    @endphp
                <center>
                    <article>
                        <h2>
                            <a href="/okay/ $ok->Slug ?>"> $ok->title </a>
                            
                        </h2>
                    
                        <body>

                            <p>
                                <a href="/catagories/{!! $ok->catagories->slug; !!}">{!! $ok->catagories->name; !!}</a>
                            </p>
                            By <a href="/authors/{!! $ok->author->username !!}">{!! $ok->author->name !!}</a><br>
                            {!! $ok->body; !!}
                            <div class="float-left">
                                {{$ok->language;}}
                            </div>
                            <div class="float-right">
                                {{ $ok->date;}}
                            </div>
                        </body>
                        <hr>
                    </article>
                    
                </center>
                
    @php
            endforeach;
    @endphp
            

</body> --}}



@extends('components.layout')


@section('main-section')


    @include('components._post-header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    
    @if ( $okay->count())
        <x-post-grid :okay="$okay"/>

    @else
     <p style="text-align:center">Nothing to show yet.</p>   
    @endif

   
    </div>
    {!! $okay->links() !!}  
</main>    
@endsection