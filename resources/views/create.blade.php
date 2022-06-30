@extends('components.layout')

@section('main-section')

    <section class="px-6 py-8">
        <div class="flex justify-center">
            <form action="/admin/posts" method="post" class="w-50 border border-gray-200 p-8 rounded-xl">
                  @csrf

                  <!-- title -->
                  <div class="max-w-3xl mx-auto">
                      <div class="mb-6">
                            <label for="title" class="block mb-2 uppercase font-bold text-s">Title</label>
                            
                          <input type="text" value="" name="title" id="title" class="border border-gray-400 p-2 w-full">
                      </div>
                        @error('title')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>

                  <!-- slug -->
                  <div class="max-w-3xl mx-auto">
                      <div class="mb-6">
                            <label for="slug" class="block mb-2 uppercase font-bold text-s">Slug</label>
                            
                          <textarea name="slug" cols="30" rows="10" id="slug" class="border border-gray-400 p-2 w-full"></textarea>                      
                      </div>
                        @error('slug')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>

                  <!-- language -->
                  <div class="max-w-3xl mx-auto">
                      <div class="mb-6">
                            <label for="language" class="block mb-2 uppercase font-bold text-s">Language</label>
                            
                          <input type="text" value="" name="language" id="language" class="border border-gray-400 p-2 w-full">
                      </div>
                        @error('language')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>

                  <!-- body -->
                  <div class="max-w-3xl mx-auto">
                      <div class="mb-6">
                            <label for="body" class="block mb-2 uppercase font-bold text-s">body</label>
                            
                            <textarea name="body" cols="30" rows="10" id="body" class="border border-gray-400 p-2 w-full"></textarea>                      
                      </div>
                        @error('body')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>

                  <!-- catagory -->
                  <div class="max-w-3xl mx-auto">
                      <div class="mb-6">
                            <label for="catagories_id" class="block mb-2 uppercase font-bold text-s">Catagory</label>
                      </div>

                      @php
                        $catagories = App\Models\catagories::all();
                      @endphp

                      <select name="catagories_id" id="catagories_id">
                        @foreach($catagories as $catagory)
                          <option value="{{ $catagory->id}}">{{ ucwords($catagory->name)}}</option>
                        @endforeach
                      </select>

                        @error('catagories_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                  </div>

                  <div class="mb-6 flex justify-end">
                      <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                          Publish
                      </button>
                  </div>
      
            </form>
        </div>  
    
    </section>

@endsection