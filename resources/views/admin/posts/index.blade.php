@extends('components.layout')

@section('main-section')

<x-settings heading="Publish New Post">
<form action="/admin/posts" method="POST" class="w-75 border border-gray-200 p-8 rounded-xl m-10" enctype="multipart/form-data">    
Starting

<table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">The Post Title</th>
      <th scope="col">Published</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $okay as $ok )
        <tr>
          <th scope="row">1</th>
          <td></td>
          <td>Otto</td>
          <td><a href=""></a>Edit</td>
        </tr>
    @endforeach
  </tbody>
</table>
</form>
</x-settings>
    
@endsection