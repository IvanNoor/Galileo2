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
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Id Siswa</th>
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
									{{$detail_nilai2->Nama}}
								</td>
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
								
							</tr>
							@endforeach	
						</tbody>
					</table>
				</div>    
			</div>

		</div>
	</div>
</div><br><br>
<div class="container" >
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-4" style="background-color: skyblue">
			<table>
				<thead>
					<tr>
						<?php $n=0;$passing=0; ?>
					@foreach($detail_nilai as $detail_nilai)
						<?php $n+=1; ?>
						<td>{{$detail_nilai->Pelajaran}}</td>
					@endforeach
					<td>Passing Grade </td>
					</tr>
				</thead>
				<tbody>
					<tr>
						@for($j=0; $j<$n ; $j++)
						<td>{{$nilaiTotal[$j]}}</td>
						<?php $passing+=$nilaiTotal[$j]; ?>
						@endfor
						<?php $passingGrade = $passing/$n;?>
						<td>{{$passingGrade}}</td>
					</tr>
				</tbody>
			</table>
		</div>
<a href="/raport/{{$detail_nilai2->id_siswa}}/penjurusan" class="btn btn-success " style="padding: 1px 15px;" role="button">Penjurusan</a>
		<div class="col-md-2"></div>

	</div>
	
</div>
@endsection
