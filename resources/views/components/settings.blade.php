@props(['heading'])

<section class="px-6 py-8">

      <h1 class="text-3xl font-bold mb-4 text-center pb-4 border-b">
        {{ $heading }}
      </h1>
      

    <div class="flex">
        <aside class="mt-5 text-right w-60">
            <h4 class="font-semibold m-6">
                Links
            </h4>
            <ul class="flex-1 m-2">
                <li class="m-2">
                    <a href="/admin/posts/create" class="no-underline">New Post</a>
                </li>
                <li class="m-2">
                    <a href="/admin/posts" class="no-underline">All Posts</a>
                </li>
                <li class="m-2">
                    <a href="/logout" class="no-underline">Logout</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <div class="flex ml-20">
                {{ $slot }}
            </div>  
        </main>
    </div>


    </section>