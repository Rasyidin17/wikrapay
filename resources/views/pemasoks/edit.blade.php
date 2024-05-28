@extends('pemasoks.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Pemasok</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('pemasoks.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('pemasoks.update',$pemasok->id) }}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_pemasok:</strong>
<input type="text" name="nama_pemasok" value="{{ $pemasok->nama_pemasok }}" class="form-control" placeholder="nama_pemasok">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>no_tlp:</strong>
<input type="text" name="no_tlp" value="{{ $pemasok->no_tlp }}" class="form-control" placeholder="no_tlp">
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>jenis:</strong>
<input type="text" name="jenis" value="{{ $pemasok->jenis }}" class="form-control" placeholder="jenis">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection
