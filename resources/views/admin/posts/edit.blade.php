@extends('components.layout')

@section('main-section')

<x-settings :heading="'Edit Post : ' . $okay->title">
    <form action="/admin/posts/{{ $okay->id }}" method="POST" class="w-75 border border-gray-200 p-8 rounded-xl m-10" enctype="multipart/form-data">
                      @csrf
                      @method('PATCH')

                      <!-- title -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="title" class="block mb-2 uppercase font-bold text-s">Title</label>
                                
                              <input value="{{ old('title' , $okay->title) }}" type="text" name="title" id="title" class="border border-gray-400 p-2 w-full rounded">
                          </div>
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <!-- slug -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="slug" class="block mb-2 uppercase font-bold text-s">Slug</label>
                                
                              <textarea name="slug" cols="30" rows="3" id="slug" class="border border-gray-400 p-2 w-full rounded">{{  old('Slug' , $okay->Slug) }}</textarea>                      
                          </div>
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <!-- thumbnail -->
                      <div class="max-w-3xl mx-auto flex">
                          <div class="mb-6 w-full">
                                <label for="thumbnail" class="block mb-2 uppercase font-bold text-s">Thumbnail</label>
                                
                                <input value="{{  old('thumbnail' , $okay->thumbnail) }}" type="file" name="thumbnail" id="thumbnail" class="border border-gray-400 p-2 w-full rounded">
                              </div>
                              <img src="/storage/{{ $okay->thumbnail }}" alt="" class="rounded-xl ml-10" width="120" height="100">
                      </div>

                      <!-- language -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="language" class="block mb-2 uppercase font-bold text-s">Language</label>
                                
                              <input value="{{  old('language' , $okay->language) }}" type="text" value="" name="language" id="language" class="border border-gray-400 p-2 w-full rounded">
                          </div>
                            @error('language')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <!-- body -->
                      <div class="max-w-3xl mx-auto">
                          <div class="mb-6">
                                <label for="body" class="block mb-2 uppercase font-bold text-s">body</label>
                                
                                <textarea name="body" cols="30" rows="3" id="body" class="border border-gray-400 p-2 w-full rounded">{{  old('body' , $okay->body) }}</textarea>                      
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
                              <option {{ old('catagories_id' , $okay->catagories_id) == $catagory->id ? 'selected' : ''}}
                                value="{{ $catagory->id }}">{{ ucwords($catagory->name)}}</option>
                            @endforeach
                          </select>

                            @error('catagories_id')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                      </div>

                      <div class="mb-6 flex justify-end">
                          <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                              Update
                          </button>
                      </div>
          
    </form>
</x-settings>
    
@endsection