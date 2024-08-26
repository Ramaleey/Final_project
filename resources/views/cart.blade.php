@extends('layouts.main')

@section('title')
    Cart
@endsection

@section('main-content')
    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Cart</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Cart</li>
                </ol>
            </div>

        </div>
    </section><!-- End Cart Section -->

    <!-- ======= Services Section ======= -->
    <section class="services service-details">
        <div class="container">

            <div class="card">
                <div class="card-header">My Cart</div>
                <div class="card-body">
                    <h3 class="card-subtitle mb-2 text-muted">Cart Information</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table table-responsive">
                                <form action="">
                                    @if($cartItem->count()>0)
        
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
        
                                                    <th>Image</th>
                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price Per unit</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
        
        
                                                @php $total = 0; @endphp
                                                @foreach($cartItem as $c)
        
                                                    <tr class="product-data">
        
                                                        <td>
                                                            <img src="{{ asset('product-images/'.$c->products->photo) }}" alt="" width="50" height="50">
                                                        </td>
                                                        <td>
                                                            <h4 class='cart-product-description'>{{ $c->products->product_name }}</h4>
                                                        </td>
                                                        <td class="qty">
                                                            <div class="form-group">
                                                                <div style="display: flex; align-items: center;">
                                                                    <input type="hidden" class="product_id" value="{{ $c->product_id }}">
                                                                    <button type="button" class="btn btn-primary btn-number increment-btn updateqty" style="margin-right: 5px;">+</button>
                                                                    <input type="text" name="product_qty" value="{{ $c->product_qty }}" class="form-control input-number input_qty" style="width: 50px;">
                                                                    <button type="button" class="btn btn-danger btn-number decrement-btn updateqty" style="margin-left: 5px;">-</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">Tsh {{ number_format($c->products->product_price),0 }}</span></td>
        
        
                                                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">Tsh {{ number_format($c->products->product_price * $c->product_qty),0 }}</span></td>
                                                        <td class="remove-item">
                                                            <button class="btn btn-danger btn-sm remove-cart-btn">Remove</button>
                                                        </td>
                                                    </tr>
        
                                                    @php $total += $c->products->product_price * $c->product_qty; @endphp
                                                @endforeach
                                                    <tr>
                                                        <td colspan="7">
                                                            <div class="shopping-cart-btn">
                                                                <span class="">
                                                                    <a href="{{ route('product') }}" class="btn btn-upper btn-primary">Continue Shopping</a>
                                                                    <a href="{{ route('user.check') }}" class="btn btn-upper btn-primary pull-right">PROCCED TO CHEKOUT</a>
                                                                </span>
                                                                <h4 class='cart-product-name-info pull-right'>Grand Total {{ number_format($total,0) }}</h4>
                                                            </div>
                                                        </td>
                                                    </tr>
        
                                            </tbody>
                                        </table>
        
                                    @else
    
                                        <h3 class="text-center" style="color: red">Your shopping Cart is empty</h3><br>
                                        <a href="{{ route('product') }}" class="btn btn-upper btn-primary">Continue Shopping</a>
                                    
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
        </div>
       

    </section>


@endsection


@section('scripts')

<script>
    $(document).ready(function () {
        $('.increment-btn').click(function(e){
            e.preventDefault();

            var inc_value = $(this).closest('.product-data').find('.input_qty').val();
            var value = parseInt(inc_value, 10);

            value = isNaN(value) ? 0 : value;
            if(value < 1000){
                value++;
                $(this).closest('.product-data').find('.input_qty').val(value);
            }

        });

        $('.decrement-btn').click(function(e){
            e.preventDefault();

            var dec_value = $(this).closest('.product-data').find('.input_qty').val();
            var value = parseInt(dec_value, 10);

            value = isNaN(value) ? 0 : value;
            if(value > 1){
                value--;
                $(this).closest('.product-data').find('.input_qty').val(value);
            }

        });

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.remove-cart-btn').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product-data').find('.product_id').val();

            $.ajax({
                method:"POST",
                url:"{{ route('remove-cart-item') }}",
                data:{
                    'product_id':product_id,
                },
                success: function (response) {
                    swal.fire("", response.status, "success");
                    window.location.reload();
                }
            });
        });

        $('.updateqty').click(function(e){
            e.preventDefault();

            var product_id = $(this).closest('.product-data').find('.product_id').val();
            var qty = $(this).closest('.product-data').find('.input_qty').val();


            $.ajax({
                method:"POST",
                url:"{{ route('update-cart-qty') }}",
                data:{
                    'product_id':product_id,
                    'product_qty':qty,
                },
                success: function (response) {
                    window.location.reload();
                    // swal.fire("", response.status, "success");
                }
            });
        });
    });
</script>

@endsection
