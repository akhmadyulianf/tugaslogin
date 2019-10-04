@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Galeri</div>                
                <div class="card-body">
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambahkan Data</a>
                <table border="1">
                        
                    <tr>
                        <td><center>ID</center></td>
                        <td><center>Nama</center></td>
                        <td><center>Keterangan</center></td>
                        <td><center>Path</center></td>
                        <td><center>Users Id</center></td>
                        <td><center>Create</center></td>
                        <td><center>Aksi</center></td>
                    </tr>
                        

                    @foreach ($listGaleri as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->keterangan !!}</td>
                        <td>{!! $item->path !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at !!}</td>
                        <td>
                            <a href="{!! route('galeri.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-danger">Lihat</a>
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
