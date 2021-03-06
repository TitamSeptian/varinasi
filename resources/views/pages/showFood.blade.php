<div class="container">
	<table class="mb-3">
		<tr>
			<td width="200">Nama Makanan</td>
			<td width="10">:</td>
			<td><b>{{ $data->name }}</b></td>
		</tr>
		<tr>
			<td>Kalori</td>
			<td>:</td>
			<td>{{ $data->calorie }}</td>
		</tr>
		<tr>
			<td>Bahan</td>
			<td>:</td>
			<td>
				@php
					$bahan = '';
					foreach (\App\FoodDetail::where('food_id', $data->id)->get() as $f) {
						$bahan .= $f->ingredient->name.",";
					}
					$bahan = substr($bahan, 0, strlen($bahan)-1);
					echo $bahan; 
				@endphp
			</td>
		</tr>
	</table>
	<hr class="bg-primary">
	<form id="form-eat" action="{{ route("makan.eat", $data->id) }}">
		@csrf
		<div class="form-group">
			<label for="qty"></label>
			<input type="number" value="1" name="qty" class="form-control form-success" id="qty" min="1">
		</div>
		<button type="submit" class="btn btn-block btn-primary">Makan</button>
	</form>
</div>