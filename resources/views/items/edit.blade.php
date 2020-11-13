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
                    <div class="card-header">Perbarui item</div>
                    <div class="card-body">
                        <form action="{{ route('items.editput', ['id' => $item->id])}}" method="post">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="nama_barang">Nama barang</label>
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{$item->nama_barang}}">
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" class="form-control" id="brand" name="brand" value="{{$item->brand}}">
                            </div>
                            <div class="form-group">
                                {{-- <label for="stok">Stok</label>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="minus" data-field="quant[1]">
                                                        <span class="fa fa-minus"></span>
                                                    </button>
                                                </span>
                                                <input type="text" name="quant[1]" class="form-control input-number" id="stok" name="stok" value="{{$item->stok}}" min="0" max="1000">
                                                <span class="input-group-append">
                                                    <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">
                                                        <span class="fa fa-plus"></span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <label for="stok">Stok</label>
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <button type="button" class="btn btn-outline-secondary btn-number" data-type="minus" data-field="quant[1]">
                                            <span class="fa fa-minus"></span>
                                        </button>
                                    </span>
                                    <input type="text" class="form-control input-number" id="stok" name="stok" value="{{$item->stok}}" min="0" max="1000">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus" data-field="quant[1]">
                                            <span class="fa fa-plus"></span>
                                        </button>
                                    </span>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="harga_beli">Harga beli</label>
                                <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="{{$item->harga_beli}}">
                            </div>
                            <div class="form-group">
                                <label for="harga_jual">Harga jual</label>
                                <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="{{$item->harga_jual}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection