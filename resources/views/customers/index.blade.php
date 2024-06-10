@extends('layouts.main')

@section('data')

@if ($message = Session::get('success'))
    <div class="alert alert-success mb-1">
        <p>{{ $message }}</p>
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{ route('customer.create')}}" class="btn btn-primary float-end">Pendaftaran</a>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$customer->code}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->phone}}</td>
                            <td class="d-flex">
                                <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-info btn-sm mx-1">Lihat</a>
                                <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                <form action="{{ route('customer.destroy', $customer->id) }}" method=POST >
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm mx-1">
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
