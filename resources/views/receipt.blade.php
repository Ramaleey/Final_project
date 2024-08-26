<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Msonge @yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <meta content="" name="description">
  <meta content="" name="keywords">


  <link href="{{ asset('assetss/image/logo.png') }}" rel="icon">
    <link href="{{ asset('assetss/image/logo.png') }}" rel="apple-touch-icon">
  <link rel="stylesheet" href="{{ asset('assetss/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assetss/bootstrap/style.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">

</head>
<body>

    {{-- <button onclick="window.print()" class="btn btn-info mt-3 mr-5">Print List</button> --}}
    <div class="row justify-content-center mt-2">
        <div class="col-md-6">
            <div class="card text-dark">
                <div class="card-body">
                    <i class="fa fa-print fa-2x" onclick="window.print()"></i>
                    {{-- <button onclick="window.print()" class="btn btn-info mt-3 mr-5">Print List</button> --}}
                    <div class="container">


                        <style>
                            @media print {
                                body * {
                                    visibility: hidden;
                                }
                                .print-container, .print-container * {
                                    visibility: visible;
                                }

                                .print-container{
                                    position: relative;
                                    top: 0;
                                }
                            }
                        </style>
                        <div class="print-container">
                                <center>
                                    <div class="col-md-4">
                                        <img src="{{ asset('assets/img/s.png') }}" alt="Logo">
                                    </div>
                                    <div class="col-md-8">
                                        <p style="margin: 0 0 0.25em;"> Email: infor@spicyrestaurant.co.tz </p>
                                        <p style="margin: 0 0 0.25em;"> Address: Kiembe/Samaki Barabara Ya <br> Kwanza Opposite Na Baraza Super Market </p>
                                        <p style="margin: 0 0 0.25em;"> Phone: +255 764 500 550 </p>
                                    </div>
                                </center>


                                <hr>


                            <div class="row mt-4">
                                <div class="col-md-8">
                                    <h4 style="font-size: 125%;font-weight: bold;">{{ $order->Fname }}</h4>
                                    <p style="margin: 0 0 0.25em;"> {{ $order->Email }}<br>
                                    <p style="margin: 0 0 0.25em;"> {{ $order->Address }} <br>
                                    <p style="margin: 0 0 0.25em;"> Phone: {{ $order->Phone }}</p>
                                </div>
                                <div class="col-md-4">
                                    <table style="font-size: 75%; table-layout: fixed; width: 100%;
                                                    border-collapse: separate; border-spacing: 2px;">
                                        <tr>
                                        <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Reference No #</span></th>
                                        <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >{{ $order->Reference_no }}</span></td>
                                        </tr>
                                        <tr>
                                        <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Date</span></th>
                                        <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >{{ date('M d, Y h:i A', strtotime($order->created_at)) }}</span></td>
                                        </tr>
                                        <tr>
                                        <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Amount Due</span></th>
                                        <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >Tsh </span><span>{{ $order->Total_price }}</span></td>
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
                                            {{-- <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Image</span></th> --}}
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Name</span></th>
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Quantity</span></th>
                                            <th style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                            border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Price</span></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->orderitems as $item)
                                            <tr>
                                                {{-- <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span><img src="{{ asset('food-img/'.$item->foods->photo ) }}" alt="" width="50" height="50"></span></td> --}}
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >{{ $item->foods->food_name }}</span></td>
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >{{ $item->qty }}</span></td>
                                                <td style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                                border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span >Tsh {{ $item->price }}</span></td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <table style="font-size: 75%; table-layout: fixed; width: 100%;
                                        border-collapse: separate; border-spacing: 2px;">
                                        <tr>
                                        <th colspan="2" style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;background: #EEE; border-color: #BBB;"><span >Total</span></th>
                                        <td colspan="1" style="border-width: 1px; padding: 0.5em; position: relative; text-align: left;
                                        border-radius: 0.25em; border-style: solid;border-color: #DDD;"><span data-prefix>Tsh</span><span> {{ $order->Total_price }}</span></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>

        </div>

    </div>



  < <script src="{{ asset('assetss/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assetss/bootstrap/js/main.js') }}"></script>
  <script src="{{ asset('assetss/bootstrap/js/bootstrap.min.js') }}"></script>

  {{--  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  --}}

  <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>


</body>
</html>
