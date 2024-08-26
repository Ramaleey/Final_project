<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOFF - Login</title>

    <link href="{{ asset('assetss/image/logo.png') }}" rel="icon">
    <link href="{{ asset('assetss/image/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assetss/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assetss/bootstrap/style.css') }}">

</head>

<body>

    <section class="contact">
        <div class="container">

            <div class="row" style="display: flex; justify-content: center; align-items:center; height: 80vh;">

                <div class="col-md-6">

                    <form action="{{ route('login') }}" method="post" role="form" class="php-email-form">

                        @csrf

                        <div class="row justify-content-center">
                            <div class="logo">
                                <img src="{{ asset('assetss/image/logo.jpg') }}" height="180" width="180" alt="" srcset="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Username <span class="text-danger" style="font-size: 20px;">*</span></label>
                            <input type="email" class="form-control" name="email" 
                                placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password <span class="text-danger" style="font-size: 20px;">*</span></label>
                            <input type="password" class="form-control" name="password" 
                                placeholder="Enter Your Password" required>
                        </div>
                        <div class="my-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('register') }}">New Member?</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="">Forget Passord?</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit" class="btn btn-rounded">Login</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

    
    <script src="{{ asset('assetss/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetss/bootstrap/js/main.js') }}"></script>
    <script src="{{ asset('assetss/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/sweetAlert.js') }}"></script>
    @if (Session('success'))
        <script>
            Swal.fire("", "{{ Session('success') }}", "success");
        </script>
    @endif
    @if (Session('error'))
        <script>
            Swal.fire("", "{{ Session('error') }}", "error");
        </script>
    @endif



</body>

</html>
