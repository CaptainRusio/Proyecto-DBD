
@extends('layouts.app')
@section('scripts')

<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>


@endsection
@section('content')


  <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" >
</input>
@endsection
