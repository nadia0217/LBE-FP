@extends('layouts.app')

@section('content')
    <div class="row row-cols-4 mx-4">
        @foreach ($items as $item)
            <div class="d-flex">
                <div class="col card m-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nama_barang}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$item->brand}}</h6>
                        <p>Stok: {{$item->stok}}</p>
                        <p>Harga: {{$item->harga_jual}}</p>
                        <a href="{{route('user.show', ['id'=> $item->id])}}" class="card-link">Lihat</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection