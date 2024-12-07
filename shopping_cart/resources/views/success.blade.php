@extends('shop')

@section('content')

<h1>Your Order Summary</h1>
<table id="cart" class="table table-bordered" style="width: 60%">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        @php $total = 0;
        $qnty = 0; @endphp
            @foreach(session('cart') as $id => $details)

                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">{{ $details['quantity'] }} @php  $qnty+= $details['quantity']  @endphp </td>
                    <td data-th="Subtotal" class="text-center"> {{ $details['price'] * $details['quantity'] }} @php $total += $details['price'] * $details['quantity'];
                     @endphp </td>
                </tr>
@php
$total=round($total);
                @endphp

            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
                <td></td>
            <td colspan="1"><b>Total</b></td>
            <td><b>{{$qnty}}</b></td>
            <td><b>{{$total}}</b></td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: "{{ route('update.sopping.cart') }}",
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId"),
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });

    $(".delete-product").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: "{{ route('delete.cart.product') }}",
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
