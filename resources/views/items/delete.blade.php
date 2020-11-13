@extends('layouts.app')

@section('content')
    <form action="{{ route('items.delete', ['id' => $item->id])}}" method="post">
        @csrf
        @method('DELETE')
        <p>Apakah anda yakin akan menghapus item berikut?<br>{{ $items->name }}</p>
        <button type="submit" class="btn btn-primary">Ya</button>
    </form>
@endsection