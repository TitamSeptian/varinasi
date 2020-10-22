<form id="form-store" action="{{ route('tipe.store') }}">
	@csrf
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="name" id="name" class="form-control" autocomplete="off" >
	</div>
	<button type="submit" class="btn btn-primary btn-sm float-right">Tambah</button>
</form>