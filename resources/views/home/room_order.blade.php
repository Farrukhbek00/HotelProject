<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booking Uz</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap_min.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/room_order.css"/>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script>
        function failed() {
        alert("You did not logged in. Sign in first!");
        window.location='{{ url("/login") }}';
        }
        function success() {
        alert("Your booked successfully! Check your email!");
        }
    </script>


</head>

<body>
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta">
                        <h1>Make your reservation</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam
                            consectetur molestias itaque
                            ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid
                            consequuntur cumque quasi.
                            Perspiciatis.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-md-pull-7">
                    <div class="booking-form">
                        <form action="{{ route('bookingRoom') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Arrival Time</span>

                                        <input name="arrival" class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <span class="form-label">Booking Time</span>
                                        <input name="book_time" class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <span class="form-label">Checkout</span>
                                        <input name="checkout" class="form-control" type="date" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <span class="form-label">Nights</span>
                                        <input  name="night" class="form-control" type="number" required>
                                    </div>

                                </div>
                                {{-- <div class="col-sm-6">
                                    <div class="form-group">

                                        <span class="form-label">Persons</span>
                                        <input class="form-control" type="number" required>
                                    </div>

                                </div> --}}

                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Rooms</span>
                                        <input class="form-control" type="number" >
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <span class="form-label">Would you like to include breakfast?</span>
                                <input name="breakfast" class="form-control" type="number" checked required>
                            </div>
                            <div class="form-group">
                                <input name="comment" class="form-control" type="text" placeholder="Enter your comment" required>
                            </div>
                            <div class="form-btn">
                                @auth
                                    <button onclick="success()" class="submit-btn">Book</button>
                                @endauth
                                @guest
                                    <button onclick="failed()" class="submit-btn">Book</button>
                                @endguest                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
