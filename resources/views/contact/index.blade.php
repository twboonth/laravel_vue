@extends('layouts.app')
@section('content')
<div class="container">
    <h2 class="text-center">ลูกค้า</h2>
    <a href="/contact/create" class="btn btn-info  my-2">เพิ่มลูกค้า</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $row)
    <tr>
      <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->phone}}</td>
      <td><a href="{{route('contact.edit',$row->id)}}" class="btn btn-sm btn-warning">Edit</a></td>

      <td>
          <form action="{{route('contact.destroy',$row->id)}}" method="post">
              @csrf @method('DELETE')
      <input type="submit" class="btn btn-sm btn-danger deleteForm" data-name="{{$row->name}}" value="Delete" >
      </form>
          
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection