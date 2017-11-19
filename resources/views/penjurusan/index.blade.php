@extends('layouts.master')

@section('title','blog lalala')

@section('content')
<script type="text/javascript">


</script>
<div class="alert alert-success">
	<strong>Success!</strong> You should <a href="#" class="alert-link">read this message</a>.
</div>
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

              <a href="/penjurusan/{{$penjurusan->id_siswa}}/edit" class="btn btn-success btn-xs" style="padding: 0px 15px;" role="button">EDIT</a>

              <form action="/penjurusan/{{$penjurusan->id_siswa}}" method="post">
                <input type="submit" name="submit" value="DELETE" class="btn btn-danger btn-xs">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
              </form> 
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
