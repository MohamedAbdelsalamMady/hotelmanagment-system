<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css');
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <div class="our_room">
        <div class="container">




            <div class="row">
                <div class="col-md-12">
                    <!--Title Page-->
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>


                </div>
            </div>
            <div class="row">

                <div class="col-md-8 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img" style="padding: 20px;">
                            <figure><img src="room/{{ $room->image }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h3>{{ $room->room_title }}</h3>
                            <p style="padding: 12px;">{{ $room->description }}</p>
                            <h4 style="padding: 12px;">Free Wifi : {{ $room->wifi }}</h4>
                            <h4 style="padding: 12px;">Room Type : {{ $room->room_type }}</h4>
                            <h3 style="padding: 12px;">Price : {{ $room->price }}</h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="room_head">
                        <h2 style="font-size: 40px!important">Book Room</h2>
                    </div>


                        @if (session()->has('message'))
<div class="alert alert-success" role="alert">

    <button type="button" class="close" data-bs-dismiss="alert">X</button>
{{session()->get('message')}}
                      </div>

                    @endif



                    @if ($errors)

                    @foreach ($errors->all() as $errors)

                    <li style="color: red;">
                        {{$errors}}
                    </li>

                    @endforeach

                    @endif

                    <form action="{{ url('add_booking',$room->id) }}" method="post">
                        @csrf

                        <div style="margin-top: 20px;">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Your Name" name="name" @if (Auth::id()) value="{{Auth::user()->name}}" @endif>
                        </div>

                        <div style="margin-top: 20px;">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" name="email" @if (Auth::id()) value="{{Auth::user()->email}}" @endif>
                        </div>

                        <div style="margin-top: 20px;">
                            <label for="inputAddress" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="01234556979"
                                name="phone" @if (Auth::id()) value="{{Auth::user()->phone}}" @endif>
                        </div>

                        <div style="margin-top: 20px;" class="row">
                            <div class="col-md-6">
                                <label for="inputType" class="form-label" style="">Number of Adults</label>
                                <select class="form-select" name="numberOfAdults" aria-label="Default select example"
                                    style="width: 50%; height: 50%; border-radius: 10px;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputType" class="form-label" style="">Number of Children</label>
                                <select class="form-select" name="numberOfChildren" aria-label="Default select example"
                                    style="width: 50%; height: 50%; border-radius: 10px;">
                                    <option value="No Child">No Child</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>

                        <div class="" style="margin-top: 20px;">
                            <label for="inputCity" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="startDate">
                        </div>

                        <div class="" style="margin-top: 20px;">
                            <label for="inputCity" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" name="endDate">
                        </div>



                        <div class="" style="margin-top: 20px;">
                            <input type="submit" class="btn btn-primary" style="width: 100%" value="Book Room">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>






    @include('home.footer')

    <script type="text/javascript">
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

        });
    </script>
</body>

</html>
