@extends('layouts.main')

@section('data')

<div class="card">
    @if (count($errors) >0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $item)
            <li>{ {$item}}</li>
        @endforeach
    </div>
    @endif

    <div class="card-header">
        From Pendaftaran
    </div>
    <div class="card-body">
        <form action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" name="code" placeholder="Kode Pelanggan" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="name" placeholder="Nama Pelanggan" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="phone" placeholder="08xxxxx" class="form-control">
            </div>
            <div class="mb-3">
                <textarea name="address" cols="30" rows="3" placeholder="Alamat Pelanggan" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-success">
            </div>
        </form>
    </div>



</div>

@endsection
