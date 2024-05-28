@extends('pemasoks.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Show Pemasok</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('pemasoks.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nama_pemasok:</strong>
{{ $pemasok->nama_pemasok }}
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>no_tlp:</strong>
{{ $pemasok->no_tlp }}
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>jenis:</strong>
{{ $pemasok->jenis }}
</div>
</div>
@endsection