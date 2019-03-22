@extends('backend.layouts.app')

@section('title','Dashboard')

@section('content')
	<div class="card-deck">
		<div class="card custom-bg-dark border-0 shadow-sm">
			<div class="card-body">Users</div>
		</div>
		<div class="card custom-bg-dark border-0 shadow-sm">
			<div class="card-body">Articles</div>
		</div>
		<div class="card custom-bg-dark border-0 shadow-sm">
			<div class="card-body">Tasks</div>
		</div>
		<div class="card custom-bg-dark border-0 shadow-sm">
			<div class="card-body">Comments</div>
		</div>
		<div class="card custom-bg-dark border-0 shadow-sm">
			<div class="card-body">Hotels</div>
		</div>
	</div>
@endsection