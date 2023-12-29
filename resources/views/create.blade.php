@extends('master')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">Add Product</div>
    <div class="card-body">
        <form method="post" action="{{ route('Product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product Type</label>
                <div class="col-sm-10">
                    <input type="text" name="product_type" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Product_code</label>
                <div class="col-sm-10">
                    <input type="text" name="product_code" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Quantity</label>
                <div class="col-sm-10">
                    <input type="number" name="quantity" class="form-control" />
                </div>
            </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Note</label>
                <div class="col-sm-10">
                    <input type="text" name="note" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Add" />
            </div>
        </form>
    </div>
</div>
</div>
@endsection
