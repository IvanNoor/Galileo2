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
                <th>Id</th>
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
                {{$penjurusan->id}}
              </td>
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
              <td>

              <a href="/penjurusan/{{$penjurusan->id}}/edit" class="btn btn-success btn-xs" style="padding: 0px 15px;" role="button">EDIT</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/penjurusan/create" class="btn btn-success"  role="button">TAMBAH BARU</a>
    </div>    
  </div>

</div>
</div>
</div>
@endsection
