<form id="form-edit" action="{{ route('bahan.update', $data->id) }}">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{ $data->name }}">
	</div>
	<div class="form-group">
		<label>Kalori(kkal)</label>
		<input type="number" min="0" name="calorie" id="calorie" class="form-control" autocomplete="off" value="{{ $data->calorie }}">
	</div>
	<div class="form-group">
		<label>Tipe</label>
		<select name="type" id="type" class="form-control">
			@foreach($tipe as $q)
			<option value="{{ $q->id }}" {{ $q->id == $data->type_id ? 'selected' : '' }}>{{ $q->name }}</option>
			@endforeach
		</select>
	</div>
	<button type="submit" class="btn btn-primary btn-sm float-right">Tambah</button>
</form>