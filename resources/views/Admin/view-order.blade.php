@extends('Admin.layouts.main')


@section('page-content')

<div class="container-fluid dashboard-content ">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">View Order </h2>
                    <div class="page-breadcrumb">
                        {{--  <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product</li>
                            </ol>
                        </nav>  --}}
                    </div>
                </div>
            </div>
        </div>


        


        <!-- ======= Services Section ======= -->
    <section class="services service-details">
        <div class="container">

            <button type="submit" onclick="printArea()" class="btn btn-outline-success mb-4">Print</button>

            
            <style>
                @media print{
                    body * {
                        visibility: hidden;
                    }

                    #print-container, #print-container * {
                        visibility: visible;
                    }

                    #print-container{
                        position: relative;
                        top: 0;
                    }
                }
            </style>

            <div class="card">
                <div class="card-header">My Order</div>
                <div class="card-body">
                    <h3 class="card-subtitle mb-2 text-muted">Order Information</h3>
                    <div class="row">
                        <div class="col-md-12" id="print-container">
                            <div class="print-container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ asset('assetss/image/logoo.png') }}" width="200px" height="150px" alt="Logo">
                                    </div>
                                    <div class="col-md-8 text-end text-center align-items-center">
                                        <p style="margin: 0 0 0.25em;"> Email: info@msonge.co.tz  </p>
                                        <p style="margin: 0 0 0.25em;"> Address: Shakani - Zanzibar </p>
                                        <p style="margin: 0 0 0.25em;"> Phone: 0778456271 </p>
                                    </div>
                                    
                                    <hr>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <h4 style="font-size: 125%;font-weight: bold;">{{ $orders->customer->f_name }} {{ $orders->customer->l_name }}</h4>
                                        <p style="margin: 0 0 0.25em;"> {{ $orders->customer->email }}<br>
                                        <p style="margin: 0 0 0.25em;"> {{ $orders->customer->address }} <br>
                                        <p style="margin: 0 0 0.25em;"> Phone: 0{{ $orders->customer->phone_no }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <table style="font-size: 75%; table-layout: fixed; width: 100%;
                                                        border-collapse: separate; border-spacing: 2px;">
                                            <tr>
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Reference No #</span></th>
                                            <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >{{ $orders->Reference_no }}</span></td>
                                            </tr>
                                            <tr>
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Date</span></th>
                                            <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >{{ date('M d, Y h:i A', strtotime($orders->created_at)) }}</span></td>
                                            </tr>
                                            <tr>
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Amount Due</span></th>
                                            <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >Tsh </span><span>{{ number_format($orders->Total_price) }}</span></td>
                                            </tr>
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Status</span></th>
                                            <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;border-color: #DDD;">
                                            @if ( $orders->status == 0 )
                                                    <span class="badge badge-warning">Pending</span>
                                                @elseif ($orders->status == 2 )
                                                <span class="badge badge-success">Accept</span>
                                                @else
                                                <span class="badge badge-danger">Reject</span>
                                                
                                                @endif


                                            </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <table style="font-size: 75%; table-layout: fixed; width: 100%;
                                            border-collapse: separate; border-spacing: 2px;">
                                            <thead>
                                            <tr>
                                                <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Image</span></th>
                                                <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Name</span></th>
                                                <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Quantity</span></th>
                                                <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Price</span></th>
                                            </tr>
                                            </thead>
                                            @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left; border-radius: 0.25em; border-style: solid;border-color: #DDD;">
                                                    @if ($item->products)
                                                        <img src="{{ asset('product-images/'.$item->products->photo) }}" alt="" width="50" height="50">
                                                    @else
                                                        <span>No image available</span>
                                                    @endif
                                                </td>
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left; border-radius: 0.25em; border-style: solid;border-color: #DDD;">
                                                    {{ $item->products ? $item->products->product_name : 'Product not available' }}
                                                </td>
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left; border-radius: 0.25em; border-style: solid;border-color: #DDD;">
                                                    {{ $item->qty }}
                                                </td>
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left; border-radius: 0.25em; border-style: solid;border-color: #DDD;">
                                                    {{ $item->products ? number_format($item->products->product_price) : 'Price not available' }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>
                                        <table style="font-size: 75%; table-layout: fixed; width: 100%;
                                            border-collapse: separate; border-spacing: 2px;">
                                            <tr>
                                            <th colspan="3" style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Total</span></th>
                                            <td colspan="1" style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span data-prefix>Tsh</span><span> {{ number_format($orders->Total_price) }}</span></td>
                                            </tr>
                                        </table>
                                    </div>

                                    
                                </div>


                                <div class="mt-5">
                                    <h2>DELIVERY INFORMATION</h2>

                                    <div class="row">
                                        <div class="container">
                                            <div class="col-md-4">
                                                <table class="table">
                                                    <tr>
                                                        <th>Delivery Location</th>
                                                        <td>{{ $orders->delivery->delivery_location }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>House Number</th>
                                                        <td>{{ $orders->delivery->house_number }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


           
        </div>
       

    </section>
        
</div>


<script>
    function printArea(){
        window.print();
    }
</script>


@endsection