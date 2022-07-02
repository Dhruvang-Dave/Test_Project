@extends('components.layout')

@section('main-section')

<x-settings heading="Publish New Post">
    <form action="/admin/posts" method="POST" class="w-75 border border-gray-200 p-8 rounded-xl m-10" enctype="multipart/form-data">
                      @csrf

                      <!-- title -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="title" class="block mb-2 uppercase font-bold text-s">Title</label>
                                
                              <input value="{{ old('title') }}" type="text" value="" name="title" id="title" class="border border-gray-400 p-2 w-full rounded">
                          </div>
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <!-- slug -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="slug" class="block mb-2 uppercase font-bold text-s">Slug</label>
                                
                              <textarea value="{{ old('slug') }}" name="slug" cols="30" rows="5" id="slug" class="border border-gray-400 p-2 w-full rounded"></textarea>                      
                          </div>
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <!-- thumbnail -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="thumbnail" class="block mb-2 uppercase font-bold text-s">Thumbnail</label>
                                
                                <input type="file" name="thumbnail" id="thumbnail" class="border border-gray-400 p-2 w-full rounded">
                              </div>
                      </div>

                      <!-- language -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="language" class="block mb-2 uppercase font-bold text-s">Language</label>
                                
                              <input value="{{ old('language') }}" type="text" value="" name="language" id="language" class="border border-gray-400 p-2 w-full rounded">
                          </div>
                            @error('language')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <!-- body -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="body" class="block mb-2 uppercase font-bold text-s">body</label>
                                
                                <textarea value="{{ old('body') }}" name="body" cols="30" rows="5" id="body" class="border border-gray-400 p-2 w-full rounded"></textarea>                      
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

                          <select class="border border-gray-400 p-2 rounded" name="catagories_id" id="catagories_id">
                            @foreach($catagories as $catagory)
                              <option {{ old('catagories_id') == $catagory->id ? 'selected' : ''}}
                                value="{{ $catagory->id}}">{{ ucwords($catagory->name)}}</option>
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
</x-settings>
    
@endsection