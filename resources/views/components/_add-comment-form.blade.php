@auth
                <form action="/okay/{{ $okay->Slug }}/comments" method="post" class="border border-gray-300 p-6 rounded-xl">
                    @csrf
                    <header class="flex items-center">
                        <img src="/storage/{{ $okay->thumbnail }}" alt="" class="m-2 rounded-full" width="50" height="50">
 

                        <h4 class="ml-5"> Want to participate? </h4>
                    </header>

                    <div class="my-4">
                        <textarea name="body" class="w-full text-sm p-2" cols="30" rows="5" placeholder="Quick, think something to say..."></textarea>
                        @error('body')
                        <span class="text-xs text-red-500"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="flex justify-end border-t border-gray-300">
                        <button type="submit" class="bg-blue-500 border border-blue-300 rounded-2xl text-white px-12 py-2 mt-2 hover:bg-blue-600"> Post</button>
                    </div>
                </form>
                @else
                <div>
                    <p class="mb-10">
                        <a href="/register" class="bg-green-400 text-white px-4 py-2 rounded-2xl hover:bg-green-500 no-underline">Register</a>  or  <a class="bg-green-400 text-white px-4 py-2 rounded-2xl hover:bg-green-500 no-underline" href="/login">Log in</a> to leave a comment
                    </p>
                </div>
@endauth