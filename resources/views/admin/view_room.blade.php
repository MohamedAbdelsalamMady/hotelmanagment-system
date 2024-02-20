<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
    th{
        color: #8a8d93;
        padding: 8px;
    }
    td{
        color: #8a8d93
    }
    </style>
</head>

<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h2>Hotel Rooms</h2>
                </div>
                <div class="col">
                    <a href="{{ url('create_room') }}">
                <button class="btn btn-danger">Add Room</button>
            </a>
                </div>
            </div>



        </div>
        <div class="container-fluid">
            <table class="table table-dark table-border">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Room Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Wifi</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach ($data as $data)
                    <tbody>
                        <tr>
                            <!--Changing The Code Of The Number Of Rows-->
                            <th scope="row">1</th>
                            <td>{{ $data->room_title }}</td>
                            <td>{!! Str::limit($data->description, 150) !!}</td>
                            <td>{{ $data->wifi }}</td>
                            <td>{{ $data->room_type }}</td>
                            <td>{{ $data->price }} $</td>
                            <td><img src="room/{{ $data->image }}" alt="" srcset="" width="10%"></td>
                            <td>
                                <a class="btn btn-danger" href="{{url('room_delete',$data->id)}}" >Delete</a>
                                <a class="btn btn-success" href="{{url('room_update',$data->id)}}" >Edit</a>
                            </td>
                        </tr>

                    </tbody>
                @endforeach
            </table>



        </div>
    </div>

    @include('admin.footer')
</body>

</html>
