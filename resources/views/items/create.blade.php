@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambahkan item</div>
                    <div class="card-body">   
                        <form action="{{ route('items.createpost')}}" method="post">
                            @csrf
                    
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="nama_barang">Nama barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" class="form-control" id="stok" name="stok">
                            </div>
                            <div class="form-group">
                                <label for="harga_beli">Harga beli</label>
                                <input type="text" class="form-control" id="harga_beli" name="harga_beli">
                            </div>
                            <div class="form-group">
                                <label for="harga_jual">Harga jual</label>
                                <input type="text" class="form-control" id="harga_jual" name="harga_jual">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection