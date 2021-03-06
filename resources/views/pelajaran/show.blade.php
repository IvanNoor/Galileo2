@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Pelajaran {{ $pelajaran->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/pelajaran') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/pelajaran/' . $pelajaran->id . '/edit') }}" title="Edit Pelajaran"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['pelajaran', $pelajaran->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Pelajaran',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $pelajaran->id }}</td>
                                    </tr>
                                    <tr><th> Pelajaran </th><td> {{ $pelajaran->Pelajaran }} </td></tr><tr><th> Kelas </th><td> {{ $pelajaran->Kelas }} </td></tr><tr><th> Jurusan </th><td> {{ $pelajaran->Jurusan }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
