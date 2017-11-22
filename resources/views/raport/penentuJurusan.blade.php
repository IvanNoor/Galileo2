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

								</tr>
								@endforeach	
							</tbody>
						</table>
					</div><br>
					<div class="col-md-6">
						<div class="col-md-6">
							<table >
								<tbody>
									<?php $n=0;$passing=0; ?>
									@foreach($detail_nilai as $detail_nilai)
									<tr>
										<?php $n+=1; ?>
										<td>{{$detail_nilai->Pelajaran}}</td>
									</tr>
									@endforeach					
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table>
								<tbody>
									@for($j=0; $j<$n ; $j++)
									<tr>
										<?php $passing+=$nilaiTotal[$j]; ?>
										<td>{{$nilaiTotal[$j]}}</td>
									</tr>
									@endfor
									<?php $passingGrade = $passing/$n;?>
								</tbody>
							</table>
						</div>

						<div class="col-md-6">
							<label>Passing Grade</label>
						</div>
						<div class="col-md-6">
							<label>	{{$passingGrade}}</label>
						</div> <br>
						<div class="col-md-6" align="center">
							<button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Check Universitas</button>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div><br><br>
<div class="container">
	<div class="col-md-10">
		<div class="panel-heading" style="background-color: azure">
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<tr>

							<th>Univeritas</th>
							<th>Fakultas</th>
							<th>Prodi</th>
							<th>Passing Grade</th>
						</tr>
					</thead>
					<tbody>
						@foreach($penjurusan as $penjurusan)
						<tr>
							<td>
								{{$penjurusan->Universitas}}
							</td>
							<td>
								{{$penjurusan->Fakultas}}
							</td>
							<td>
								{{$penjurusan->Prodi}}
							</td>
							<td>
								{{$penjurusan->PassingGrade}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection


