@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        
        <div class="card-body">
          <h5 class="card-title">{{ $item->nama_barang }}</h5>
          <p class="card-text">Brand: {{ $item->brand }}</p>
          <p class="card-text">Stok: {{ $item->stok }}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Harga beli: {{ $item->harga_beli }}</li>
          <li class="list-group-item">Harga jual: {{ $item->harga_jual }}</li>
        </ul>    
      </div>
</div>
@endsection