@extends('layouts.master')

@section('title','blog lalala')

@section('content')

<div class="container">


    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Penjurusan</div>
                <div class="panel-body">
                  <form method="post" class="form-tambah " action="{{ url ('penjurusan')}}">

                    <div class="row">
                        <div class="col-md-6">
                            <label for="universitas">Universitas :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12">
                                <input type="text" class="form-control col-md-12"  id="universitas" name="universitas">
                            </div>
                        </div>
                    </div><br>


                    <div class="row">
                        <div class="col-md-6">
                            <label for="fakultas">Fakultas :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12    ">
                                <input type="text" class="form-control col-md-6" id="fakultas" name="fakultas">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="prodi">Prodi :</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12    ">
                                <input type="text" class="form-control col-md-6" id="prodi" name="prodi">
                            </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="pasingGrade">Pasing Grade</label>
                        </div>
                        <div class="col-md-4">
                            <div class="input-field col-md-12    ">
                                <input type="number" class="form-control col-md-6" id="pasingGrade" name="pasingGrade">
                            </div>
                        </div>
                    </div><br>


                    <input type="submit" class="btn btn-primary btn-md" value="simpan" ></input> 
                    {{ csrf_field() }} 
                </form>

            </div>
        </div>
    </div>
</div>
</div>

@endsection



