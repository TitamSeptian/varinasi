<form id="form-edit" action="{{ route('makanan.update', $data->id) }}">
	@csrf
	@method('PUT')
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="name" id="name" class="form-control" autocomplete="off" value="{{ $data->name }}">
	</div>
	<div class="form-group">
		<label>Kalori (kkal)</label>
		<input type="text" name="calorie" id="calorie" class="form-control" autocomplete="off" value="{{ $data->calorie }}">
	</div>
	<div class="form-group">
		<label>Bahan Bahan</label>
		<select class="form-control" data-toggle="select" multiple data-placeholder="Bahan Bahan" name="ingredient[]" id="ingredient">
			@foreach(\App\FoodDetail::where('food_id', $data->id)->get() as $f)
			<option value="{{ $f->id }}" {{ $data->id == $f->id ? "selecetd" : "" }}>{{ $f->name }}</option>
			@endforeach
		</select>
	</div>
	
	<button type="submit" class="btn btn-primary btn-sm float-right">Tambah</button>
</form>
<script>
	$(document).ready(function () {
		let bahanSelected = [];
		@foreach(\App\FoodDetail::where('food_id', $data->id)->get() as $f)
		bahanSelected.push("{{ $f->id }}");
		@endforeach
		$('#ingredient').select2({
			ajax: {
	            url: "{{ route('bahan.sel2') }}",
	            dataType: "json",
	            delay: 250,
	            // placeholder: "Bahan Bahan",
	            allowClear: true,
	            data: function(params) {
	                return {
	                    q: params.term,
	                };
	            },
	            processResults: function(data) {
	                // Transforms the top-level key of the response object from 'items' to 'results'
	                return {
	                    results: data.items
	                };
	            },
	            cache: true
	        },
	        placeholder: 'Cari Bahan',
	        templateResult: function(repo) {
	        	// console.log(repo);
	            if (repo.loading) {
	                return repo.text;
	            }
	            var $container = $(
	                "<div class='select2-result-repository clearfix'>" +
		                '<div class="select2-result-name__title"></div>' +
	                '</div>'
	            );

	            $container.find(".select2-result-name__title").text(repo.name);

	            return $container;
	            // // return repo.name+"<br>"+"<span>Qyt : "+repo.quantity+"</span>";
	        },
	        templateSelection: function(repo) {
	        	console.log(repo)
	            $container = $(
	            	`<div class="selectionResult">
						<div class="selectionResult__general"></div>
	        		</div>`
	        		)
	            $container.find('.selectionResult__general').html(repo.name)
	            if (repo.name == undefined) {
	                return repo.text
	            }
	            // return repo.name+'&nbsp&nbsp<i class="fa fa-archive"></i> '+repo.quantity || repo.text;
	            return $container || repo.text
	        },

		});
		// $('#ingredient').val(bahanSelected).trigger("change");
	});
</script>