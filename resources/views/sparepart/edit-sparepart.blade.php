@extends('template.layout')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Sparepart</h1>
        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta officiis laboriosam iusto. Vitae, inventore fugiat dolore deserunt dolorem exercitationem, nobis eos molestiae quibusdam laudantium et quo suscipit sit libero neque. </p>
    
        <div class="card shadow mb-4">
            <div class="card-header" py-3>
                <h6 class="m-0 font-weight-bold text-primary">Edit Sparepart</h6>
            </div>
            <div class="card-body">
                <form action="/sparepart/{{ $sparepart->id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="spare_parts_id" class="form-label">Sparepart Number</label>
                        <input type="text" class="@error('spare_parts_id') is-invalid @enderror form-control"
                            id="spare_parts_id" name="spare_parts_id" value="{{ old('spare_parts_id', $sparepart->spare_parts_id) }}">

                        @error('spare_parts_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="spare_parts_name" class="form-label">Nama Sparepart</label>
                        <input type="text" class="@error('spare_parts_name') is-invalid @enderror form-control"
                            id="spare_parts_name" name="spare_parts_name" value="{{ old('spare_parts_name', $sparepart->spare_parts_name) }}">

                        @error('spare_parts_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="base_price" class="form-label">Harga</label>
                        <input type="text" class="@error('base_price') is-invalid @enderror form-control"
                            id="base_price" name="base_price" value="{{ old('base_price', $sparepart->base_price) }}">

                        @error('base_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="selling_price" class="form-label">Bobot</label>
                        <input type="text" class="@error('selling_price') is-invalid @enderror form-control"
                            id="selling_price" name="selling_price" value="{{ old('selling_price', $sparepart->selling_price) }}">

                        @error('selling_price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="qty" class="form-label">Qty</label>
                        <input type="text" class="@error('qty') is-invalid @enderror form-control"
                            id="qty" name="qty" value="{{ old('qty', $sparepart->qty) }}">

                        @error('qty')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="text" class="@error('stock') is-invalid @enderror form-control"
                            id="stock" name="stock" value="{{ old('stock', $sparepart->stock) }}">

                        @error('stock')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="supplier_id" class="form-label">Supplier</label>
                        <select name="supplier_id" class="form-control form-select" id="supplier_id">
                            @foreach ($supplier as $item)
                                @if (old('supplier_id', $sparepart->supplier_id) == $item -> id)
                                    <option value="{{ $item->id }}" selected>{{ $item->company_name }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->company_name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit Sparepart</button>

                </form>
            </div>
        </div>
    </div>
@endsection