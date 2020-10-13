@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Transaksi</strong>
            <small>{{ $item->uuid }}</small>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                
                <div class="form-group">
                    <label for="name" class="form-control-label">Nama Pemesan</label>
                    <input type="text" name="name" value="{{ old('name', $item->name) }}" class="form-control @error('name') is_invalid @enderror">
                    @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="form-control-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $item->email) }}" class="form-control @error('email') is_invalid @enderror">
                    @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="phone_number" class="form-control-label">Nomor HP</label>
                    <input type="text" name="phone_number" value="{{ old('phone_number', $item->phone_number) }}" class="form-control @error('phone_number') is_invalid @enderror">
                    @error('phone_number') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="address" class="form-control-label">Alamat Pemesan</label>
                    <input type="text" name="address" value="{{ old('address', $item->address) }}" class="form-control @error('address') is_invalid @enderror">
                    @error('address') <div class="text-muted">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">
                        Edit Transaksi
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection