@extends('layouts.main')

@section('data')
    <div class="container">
        <table class="table">
            <tr>
                <th>Kode Pelanggan</th>
                <td>: {{ $customer->code }}</td>
            </tr>
            <tr>
                <th>Nama Pelanggan</th>
                <td>: {{ $customer->name }}</td>
            </tr>
            <tr>
                <th>Telepon Pelanggan</th>
                <td>: {{ $customer->phone }}</td>
            </tr>
            <tr>
                <th>Alamat Pelanggan</th>
                <td>: {{ $customer->address }}</td>
            </tr>
        </table>
    </div>

@endsection
