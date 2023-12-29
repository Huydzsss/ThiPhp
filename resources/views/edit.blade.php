@extends('master')

@section('content')

<div class="card">
    <div class="card-header">Edit Product</div>
    <div class="card-body">
        <form method="post" action="{{ route('Product.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Type</label>
                <div class="col-sm-10">
                    <input type="text" name="product_type" class="form-control" value="{{ $product->product_type }}" />
                    @error('product_type')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Quantity</label>
                <div class="col-sm-10">
                    <input type="number" name="quantity" class="form-control" value="{{ $product->quantity }}" />
                    @error('quantity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Note</label>
                <div class="col-sm-10">
                    <input type="text" name="note" class="form-control" value="{{ $product->note }}" />
                    @error('note')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>

@endsection
