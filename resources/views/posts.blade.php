<link rel="stylesheet" href="app.css">

<body>
    @php
            foreach ($okay as $ok):
    @endphp
                <center>
                    <article>
                        <h2>
                            <a href="/okay/<?= $ok->Slug ?>"><?= $ok->title; ?></a>
                            
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
            

</body>
{{-- <?= $ok->slug ?> --}}