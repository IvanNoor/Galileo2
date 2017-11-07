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
							@foreach($detail_nilai as $detail_nilai)
							<tr>
								<td>
									{{$detail_nilai->id_siswa}}
								</td>
								<td>
									{{$detail_nilai->id_pelajaran}}
								</td>
								<td>
									{{$detail_nilai->nilai1}}
								</td>
								<td>
									{{$detail_nilai->nilai2}}
								</td>
								<td>
									{{$detail_nilai->nilai3}}
								</td>
								<td>
									{{$detail_nilai->nilai4}}
								</td>
								<td>
									
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<a href="/siswa/create" class="btn btn-success"  role="button">TAMBAH BARU</a>
				</div>    
			</div>

		</div>
	</div>
</div>
@endsection
