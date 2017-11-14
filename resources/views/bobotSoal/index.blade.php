@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<script type="text/javascript">


</script>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel-heading" style="background-color: azure">
				<div class="panel-body">
					<form method="post" class="form-tambah " action="{{ url ('bobot_soal/search')}}">
						<div class="input-group col-md-4">
							<input type="text" class="form-control inline" name="search" placeholder="Cari Kode...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit" >
									<input type="submit" value="simpan" class="hidden" >
									<i class="fa fa-search"></i> 	
								</input> 
							</button>
						</span>
					</div>
				</form>

				<table class="table table-striped">
					<thead>
						<tr>
							<th>Kode Soal</th>
							<th>No Soal</th>
							<th>Penjawab Benar</th>
							<th>Penjawab Salah</th>
							<th>Bobot Soal</th>
						</tr>
					</thead>
					<tbody>
						@foreach($penilaian as $penilaian)
						<tr>
							<td>
								{{$penilaian->kode}}
							</td>
							<td>
								{{$penilaian->No}}
							</td>
							<td>
								{{$penilaian->jawaban_benar}}
							</td>
							<td>
								{{$penilaian->jawaban_salah}}
							</td>
							<td>
								<b>{{
									$penilaian->jawaban_benar/($penilaian->jawaban_benar+$penilaian->jawaban_salah)*100
								}}%</b>
							</td>

						</tr>
						@endforeach
					</tbody>
				</table>
			</div>    
		</div>

	</div>
</div>
</div>
@endsection
