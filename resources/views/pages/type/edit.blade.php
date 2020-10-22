<form id="form-edit" action="{{ route('tipe.update', $data->id) }}">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{ $data->name }}">
	</div>

	<button type="submit" class="btn btn-primary btn-sm float-right">Ubah</button>
</form>