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
					
					<div class="row">
						<div class="input-field col-sm-2">
							<label for="pelajaran">pelajaran</label>
						</div>
						<div class="select col-sm-2">
							<select id="kodeSoal" name="kodeSoal" class="required" required="" onchange="location = this.value;">
								<option>- Pilih Kode Soal -</option>
								@foreach($penilaian2 as $penilaian2) 
								<option value="/bobot_soal/{{$penilaian2->kode}}/search">{{$penilaian2->kode}} {{$penilaian2->Pelajaran}}</option>
								@endforeach
							</select>
						</div>
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
										@if($penilaian->jawaban_benar+$penilaian->jawaban_salah==0)
										<b>0%</b>
										@else
										<?php $bobot = $penilaian->jawaban_benar/($penilaian->jawaban_benar+$penilaian->jawaban_salah)*100 ?>
										<b> <?php echo number_format((float)$bobot, 1, '.', ''); ?> %</b>
										@endif
									</td>

								</tr>
								@endforeach
							</tbody>
						</table>
					</div>    
					<div class="col-md-12">
						<div class="col-md-6"></div>
						<div class="col-md-6">*semakin besar % bobot soal = semakin mudah soal</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
