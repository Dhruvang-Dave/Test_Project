{{-- @props(['okay']) --}}

<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        This is for <span class="text-blue-500">Digital Advertisment</span>
    </h1>

    <h2 class="inline-flex mt-2">By Akhilesh - Harshad - Dhruvang <img src="/images/lary-head.svg"
                                                       alt="Head of Lary the mascot"></h2>

    <p class="text-sm mt-14">
        We are looking forward towards the Digital India perspective. By going for digital everywhere, we are trying to advertise digitally by digital banners.
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        
    
    <!--  Category -->

    <div class="dropdown relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
        <button class="btn dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
        {{request('catagories')?(request('catagories')):'Catagory'}}
        </button>
        <button name="catagories">
        <ul class="dropdown-menu" value="category" aria-labelledby="dropdown">
            <li><a name="catagories" class="dropdown-item" href="/">All</a></li><hr/>
        @foreach ($catagories as $catagories)
            <li><a name="catagories" class="dropdown-item" href="/?catagories={!! ($catagories->name)!!}">{!! ($catagories->name)!!}</a></li>
         @endforeach
        <button>
    </div>

        <!-- Other Filters -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <!-- <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select> -->

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <!-- <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path> -->
                </g>
            </svg>
        </div>

        <!-- Search --> 
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="#">
            <!-- @if(request('catagories'))
            <input type="hidden" name="catagories" value="{!! request('catagories')!!}"> 
            @endif -->
            
            <input type="hidden" name="catagories" value="{{request('catagories')?request('catagories'):'Catagory'}}">
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{!! request('search') !!}">
                       
            </form>
        </div>
    </div>
</header>