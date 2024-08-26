<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOFF - Register</title>

    <link href="{{ asset('assetss/image/logo.png') }}" rel="icon">
    <link href="{{ asset('assetss/image/logo.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('assetss/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assetss/bootstrap/style.css') }}">


</head>

<body>

    <section class="contact">
        <div class="container">

            <div class="row" style="display: flex; justify-content: center; align-items:center; height: 80vh;">

                <div class="col-md-8">

                    <form action="{{ route('register-customer') }}" method="post" role="form" class="php-email-form">

                        @csrf

                        <div class="row justify-content-center">
                            <div class="logo">
                                <img src="{{ asset('assetss/image/logo.jpg') }}" height="180" width="180" alt="" srcset="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">First Name <span class="text-danger" style="font-size: 20px;">*</span></label>
                                    <input type="text" class="form-control" name="first_name" 
                                        placeholder="Enter Your First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Last Name <span class="text-danger" style="font-size: 20px;">*</span></label>
                                    <input type="text" class="form-control" name="last_name" 
                                        placeholder="Enter Your Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Address <span class="text-danger" style="font-size: 20px;">*</span></label>
                                    <input type="text" class="form-control" name="address" 
                                        placeholder="Enter Your Address" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone Number <span class="text-danger" style="font-size: 20px;">*</span></label>
                                    <input type="text" class="form-control" name="phone" 
                                        placeholder="Enter Your Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email <span class="text-danger" style="font-size: 20px;">*</span></label>
                                    <input type="email" class="form-control" name="email" 
                                        placeholder="Enter Your Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password <span class="text-danger" style="font-size: 20px;">*</span></label>
                                    <input type="password" class="form-control" name="password" 
                                        placeholder="Enter Your password" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="my-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('login') }}"> Already Have an Account?</a>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-rounded">Register</button>
                                </div>
                            </div>
                        </div>
                        
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
