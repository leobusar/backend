
@extends("layout")

@section("title")
  My first app
@endsection

@section("sidebar")
	@parent
 <h1>  My sidebar</h1>
@endsection

@section("content")
	@include("shared.errors")
	User {{{ $id }}} Name {{{ $name }}}
@endsection