<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6"><b>Product Details</b></div>
                    <div class="col-md-6 text-end">
                        <a href="{{ route('Product.index') }}" class="btn btn-primary btn-sm">View All</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(isset($product))
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"><b>Product type</b></label>
                        <div class="col-sm-10">
                            {{ $product->product_type }}
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label"><b>Quantity</b></label>
                        <div class="col-sm-10">
                            {{ $product->quantity }}
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label"><b>Note</b></label>
                        <div class="col-sm-10">
                            {{ $product->note }}
                        </div>
                    </div>
                @else
                    <p>No product details available.</p>
                @endif
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
