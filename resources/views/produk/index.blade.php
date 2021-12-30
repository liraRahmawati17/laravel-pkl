@extends('layouts.bagian.navbar')

@section('title', 'Dashboard')

@section('content_header')

    Dashboard

@stop

@section('content')

    <div class ="content">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        data barang masuk
                        <a href="{{route('barang.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah barang</a>
                    </div>
                    <div class="card-body">
                        <div class="table responsive">
                            <table class="table">
                                <tr>
                                    <th>no</th>
                                    <th>nama barang</th>
                                    <th>harga</th>
                                    <th>qty</th>
                                    <th>aksi</th>
                                </tr>
                                @php
                                $no=1;
                                @endphp

                                @foreach ($barang as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_barang</td>
                                    <td>{{$data->harga</td>
                                    <td>{{data->qty}}</td>
                                    <td>
                                        <form action="{{route('barang.destory',$data->id)}}" method="post">
                                            @method ('delete')
                                            @csrf
                                            <a href="{{route('barang.edit',$data->id)}}" class="btn btn-outline-info" >edit</a>
                                            <a href="{{route('barang.show',$data->id)}}" class="btn btn-outline-warning">show</a>
                                            <button type => "submit" class ="btn btn-outline-danger" onclick="return confirm('apakah anda yakin menghapus ini');">Delete</button>
                                            </form>
                                            </td>
                                </tr>
                                @endforeach

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@stop

@section('css')

@stop

@section('js')

@stop
