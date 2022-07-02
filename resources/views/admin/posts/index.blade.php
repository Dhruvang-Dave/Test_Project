@extends('components.layout')

@section('main-section')

<x-settings heading="Publish New Post">
<form action="/admin/posts" method="POST" class="w-75 border border-gray-200 p-8 rounded-xl m-10" enctype="multipart/form-data">    

<table class="table table-striped table-hover">
<thead> <span class="bg-yellow-200 p-2 rounded-xl"> All Posts</span>
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
          <td>{!! $ok->title !!}</td>
          <td>Published</td>
          <td><a href="/admin/posts/{{ $ok->id}}/edit">Edit</a></td>
        </tr>
    @endforeach
  </tbody>
</table>
{!! $okay->links() !!}
</form>
</x-settings>
    
@endsection