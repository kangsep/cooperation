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
        Ubah Data Nasabah Kode #{{ $customer->code }}
    </div>
    <div class="card-body">
        <form action="{{route('customer.update')}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $customer->id }}">

            <div class="mb-3">
                <input type="text" name="name" placeholder="Nama Pelanggan" class="form-control" 
                    value="{{ $customer->name }}">
            </div>
            <div class="mb-3">
                <input type="text" name="phone" placeholder="08xxxxx" class="form-control"
                    value="{{ $customer->phone }}">
            </div>
            <div class="mb-3">
                <textarea name="address" cols="30" rows="3" placeholder="Alamat Pelanggan" class="form-control">{{ $customer->address }}</textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="Ubah" class="btn btn-success">
            </div>
        </form>
    </div>



</div>

@endsection
