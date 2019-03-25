@extends('backend.layouts.app')

@section('title', __('Users'))

@section('content')
	<h4 class="mb-5"><span>{{ __('Users Management') }}</span></h4>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="bg-dark">
				<tr>
					<th>
						<div class="custom-control custom-checkbox">
						    <input type="checkbox" class="custom-control-input" id="checkall">
						    <label class="custom-control-label" for="checkall"></label>
						</div>
					</th>
					<th>{{ __('Imagen') }}</th>
					<th>{{ __('Name') }}</th>
					<th>{{ __('Status') }}</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td class="align-middle">
							<div class="custom-control custom-checkbox">
							    <input type="checkbox" value="{{ $user->id }}" class="custom-control-input" id="{{ $user->id }}">
							    <label class="custom-control-label" for="{{ $user->id }}"></label>
							</div>
						</td>
						<td class="align-middle">Image</td>
						<td class="align-middle">{{ $user->name }}</td>
						<td class="align-middle">{{ $user->status }}</td>
						<td class="align-middle">
							<a href="" class="btn bg-dark btn-sm shadow-sm"><i class="fas fa-eye"></i></a>
							<a href="" class="btn bg-dark btn-sm shadow-sm"><i class="fas fa-pen"></i></a>
							<a href="" class="btn bg-dark btn-sm shadow-sm"><i class="fas fa-trash"></i></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection