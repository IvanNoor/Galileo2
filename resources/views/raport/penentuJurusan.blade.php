@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<script type="text/javascript">


</script>
<div class="alert alert-success">
	<strong>Success!</strong> You ss <a href="#" class="alert-link">read this message</a>.
</div>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel-heading" style="background-color: azure">
				<div class="panel-body">
					<div class="col-md-4">
						<table class="table">
							<tbody>
								<tr>
									<td><b>Id Siswa</b></td>
									<td>{{$siswa->id_siswa}}</td>
								</tr>
								<tr>
									<td><b>Nama</b></td>
									<td>{{$siswa->Nama}}</td>
								</tr>
							</tbody>
						</table>
						
					</div>
					<div class="col-md-8">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Id Pelajaran</th>
									<th>Nilai 1</th>
									<th>Nilai 2</th>
									<th>Nilai 3</th>
									<th>Nilai 4</th>
									<th>Skor Akhir</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=0;?>
								@foreach($detail_nilai2 as $detail_nilai2)
								<tr>
									<td>
										{{$detail_nilai2->Pelajaran}}
									</td>
									<td>
										{{$detail_nilai2->nilai1}}
									</td>
									<td>
										{{$detail_nilai2->nilai2}}
									</td>
									<td>
										{{$detail_nilai2->nilai3}}
									</td>
									<td>
										{{$detail_nilai2->nilai4}}
									</td>
									<td>
										{{$nilaiTotal[$i]}}	
										<?php $i+=1;?>
									</td>

								</trx>
								@endforeach	
							</tbody>
						</table>
					</div><br>
					@endsection


