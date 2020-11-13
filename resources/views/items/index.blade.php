@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if ($status)
    <div class="row row-cols-3 mx-4">
        @foreach ($items as $item)
            <div class="d-flex">
                <div class="col card m-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nama_barang}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$item->brand}}</h6>
                        <p>Stok: {{$item->stok}}</p>
                        <p>Harga beli: {{$item->harga_beli}}</p>
                        <p>Harga jual: {{$item->harga_jual}}</p>
                        <a href="{{route('items.show', ['id'=> $item->id])}}" class="card-link">Lihat</a>
                        <a href="{{route('items.edit', ['id'=> $item->id])}}" class="card-link">Perbarui</a>
                        <a href="{{route('items.delete', ['id'=> $item->id])}}" class="card-link">Hapus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex">
        <div class="card m-3 mx-auto" style="width: 18rem;">
            <a href="{{route('items.create')}}" class="btn btn-primary">Tambahkan item baru</a>
        </div>
    </div>
    @endif
@endsection