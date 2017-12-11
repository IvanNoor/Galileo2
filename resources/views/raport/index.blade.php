@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<div class="panel-heading" style="background-color: azure">
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Sekolah Asal</th>
								<th>kelas</th>
								<th>Orang Tua</th>
								<th>Contact</th>
							</tr>
						</thead>
						<tbody>
							@foreach($siswa as $siswa)
							<tr>
								<td>
									{{$siswa->Nama}}
								</td>
								<td>
									{{$siswa->SekolahAsal}}
								</td>
								<td>
									{{$siswa->Kelas}}
								</td>
								<td>
									{{$siswa->OrangTua}}
								</td>
								<td>
									{{$siswa->Contact}}
								</td>
								<td>
									<a href="/raport/{{$siswa->id_siswa}}/check" class="btn btn-success btn-xs" style="padding: 1px 15px;" role="button">Check Raport</a>
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
