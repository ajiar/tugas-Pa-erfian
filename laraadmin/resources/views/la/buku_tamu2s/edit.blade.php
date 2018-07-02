@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/buku_tamu2s') }}">Buku tamu2</a> :
@endsection
@section("contentheader_description", $buku_tamu2->$view_col)
@section("section", "Buku tamu2s")
@section("section_url", url(config('laraadmin.adminRoute') . '/buku_tamu2s'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Buku tamu2s Edit : ".$buku_tamu2->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($buku_tamu2, ['route' => [config('laraadmin.adminRoute') . '.buku_tamu2s.update', $buku_tamu2->id ], 'method'=>'PUT', 'id' => 'buku_tamu2-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nama')
					@la_input($module, 'alamat')
					@la_input($module, 'pesan')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/buku_tamu2s') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#buku_tamu2-edit-form").validate({
		
	});
});
</script>
@endpush
