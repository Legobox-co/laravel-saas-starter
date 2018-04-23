@extends('layouts.app')
@section('content')
<div class="col-md-12">
	<manage-projects user="{{Auth::user()}}"></manage-projects>
</div>
@endsection