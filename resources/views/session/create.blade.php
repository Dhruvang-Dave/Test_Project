@extends('components.layout')

@section('main-section')

    <section class="px-6 py-8">
        
        <main class="mt-10 max-w-2xl mx-auto bg-gray-100 border border-gray-200 rounded-xl p-10">

            <form action="/sessions" method="post">
              @csrf

            <h2 class="pb-5 text-center font-bold">
                LogIn
            </h2>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-s">Email</label>
                
              <input type="email" value=" {{old('email') }}" name="email" id="email" class="border border-gray-400 p-2 w-full">
            </div>
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="password" name="password" id="password" class="block mb-2 uppercase font-bold text-s">Password</label>
                
              <input type="password" name="password" id="email" class="border border-gray-400 p-2 w-full">
            </div>
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

             <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                    LogIn
                </button>
            </div>

            <!-- @foreach($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach -->
          </form>

        </main>
</section>

@endsection