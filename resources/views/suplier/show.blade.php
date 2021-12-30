@extends('layouts.admin')

@section('content')

   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Suplier</label>
                        <input type="text" name="nama" value="{{$suplier->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Alamat Suplier</label>
                        <input type="text" name="alamat" value="{{$suplier->alamat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{route('suplier.index')}}" class="btn btn-block btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@stop

@section('css')

@stop

@section('js')

@stop
