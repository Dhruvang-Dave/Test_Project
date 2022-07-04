@extends('components.layout')

@section('main-section')

<x-settings heading="Manage Posts">
<form action="/admin/posts" method="POST" class="w-75 border border-gray-200 p-8 rounded-xl m-10" enctype="multipart/form-data">    

<table class="table table-striped table-hover">
<thead><center><span class="bg-black text-white p-2 rounded-xl"> All Posts</span></center>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    @foreach ( $okay as $ok )
        <tr>
          <th scope="row">1</th>
          <td><a class="no-underline text-black" href="/okay/{{ $ok->Slug }}">{!! $ok->title !!}</a></td>
          <td><span class="bg-green-200 rounded-xl px-3">Published</span></td>
          <td><a class="no-underline" href="/admin/posts/{{ $ok->id }}/edit">Edit</a></td>
          <td><form action="/admin/posts/{{ $ok->id }}" method="post">
            @csrf
            @method('delete')
            <button class="text-red-500">Delete</button>
          </form></td>
        </tr>
    @endforeach
  </tbody>
</table>
{!! $okay->links() !!}
</form>
</x-settings>
    
@endsection