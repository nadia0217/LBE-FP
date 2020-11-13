@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hapus item</div>
                <div class="card-body">
                    <form action="{{ route('items.delete', ['id' => $item->id])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <p>Apakah anda yakin akan menghapus item berikut?</p>
                        <h5>{{ $item->nama_barang }}</h5>
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection