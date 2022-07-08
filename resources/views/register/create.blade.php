@extends('components.layout')

@section('main-section')

    <section class="px-6 py-8">
        
        <main class="mt-10 max-w-2xl mx-auto bg-gray-100 border border-gray-200 rounded-xl p-10">
              
          <form action="/register" method="POST" enctype="multipart/form-data">
              @csrf

              <h2 class="pb-5 text-center font-bold">
                Register
              </h2>
            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-s">Name</label>
                
              <input type="text" value=" {{old('name') }}" name="name" id="name" class="border border-gray-400 p-2 w-full rounded">
            </div>
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror


            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-s">Username</label>
                
              <input type="text" value=" {{old('username') }}" name="username" id="username" class="border border-gray-400 p-2 w-full rounded">
            </div>
            @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-s">Email</label>
                
              <input type="email" value=" {{old('email') }}" name="email" id="email" class="border border-gray-400 p-2 w-full rounded">
            </div>
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="password" name="password" id="password" class="block mb-2 uppercase font-bold text-s">Password</label>
                
              <input type="password" name="password" id="email" class="border border-gray-400 p-2 w-full rounded">
            </div>
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

            
            <!-- profilePic -->
            <div class="max-w-3xl mx-auto">
                  <div class="mb-6">
                  <label for="profilePic" name="profilePic" id="profilePic" class="block mb-2 uppercase font-bold text-s">Profile picture</label>
                    
                    <input type="file" name="profilePic" id="profilePic" class="border border-gray-400 p-2 w-full bg-white rounded">
                  </div>
              </div>
              @error('profilePic')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
              @enderror
            

                <div class="mb-6">
                   <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                       Submit
                   </button>
                </div>
                <!-- @foreach($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach -->
          </form>
        </main>
</section>

@endsection