@extends('layouts.master')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('pemasok.create') }}"> Create New Product</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>nama_pemasok</th>
<th>no_tlp</th>
<th>jenis</th>
<th width="280px">Action</th>
</tr>
@foreach ($pemasoks as $pemasok)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $pemasok->nama_pemasok }}</td>
<td>{{ $pemasok->no_tlp }}</td>
<td>{{ $pemasok->jenis }}</td>
<td>
<form action="{{ route('pemasoks.destroy',$pemasok->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('pemasoks.show',$pemasok->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('pemasoks.edit',$pemasok->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $pemasoks->links() !!}
@endsection
