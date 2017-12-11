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
							<?php $i=0;$passing=0;?>
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
									<?php $passing= $passing + $nilaiTotal[$i]; ?>

									<?php $i+=1;?>
								</td>
							</tr>
							@endforeach	
							<?php $passing = $passing/$i; ?>
						</tbody>
					</table><hr>
					<div>

						<label>Passing Grade = <?php echo number_format((float)$passing, 1, '.', ''); ?> </label>
					</div>
				</div>    
			</div>

		</div>
	</div>
	<div>
		
	</div>
</div><br><br>


<button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Check Universitas</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Penjurusan</h4>
			</div>
			<div class="modal-body">
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
@endsection
