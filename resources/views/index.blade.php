@extends('master')

@section('content')


</header>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Product Data</b></div>
            <div class="col col-md-6">
                <a href="{{ route('Product.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Product type</th>
                <th>Quantity</th>
                <th>Note</th>
            </tr>
            @if(count($product) > 0)
                @foreach($product as $row)
                    <tr>
                        <td>{{ $row->product_type }}</td>
                        <td>{{ $row->quantity }}</td>
                        <td>{{ $row->note }}</td>

                        <td>
                            <form method="post" action="{{ route('Product.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('Product.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('Product.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">No Data Found</td>
                </tr>
            @endif
        </table>
    </div>
</div>

@endsection
