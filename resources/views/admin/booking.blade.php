<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style type="text/css">
        th{
            padding: 8px;
            font-size: 15px;
        }
        td{
            font-size: 14px;
        }
        table{
            width: 50%;
        }

    </style>
</head>
<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h2>Bookings</h2>
            </div>
            <div class="container-fluid">
<div>

    <table class="table table-dark table-border" style="width: 50%">
        <thead>
            <tr>
                <th scope="col">Room_Id</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Adults</th>
                <th scope="col">Children</th>
                <th scope="col">Arriv Date</th>
                <th scope="col">Leav Date</th>
                <th scope="col">Status</th>
                <th scope="col">Room Title</th>
                <th scope="col">Price</th>
                <th scope="col">Img</th>
                <th scope="col">Del</th>
                <th scope="col">Status update</th>

            </tr>
        </thead>
        @foreach ($data as $data)
            <tbody>
                <tr>
                    <!--Changing The Code Of The Number Of Rows-->
                    <td>{{ $data->room_id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->numberOfAdults }}</td>
                            <td>{{ $data->numberOfChildren }}</td>
                            <td>{{ $data->start_date }}</td>
                            <td>{{ $data->end_date }}</td>
                            <td>
                                @if ($data->status == 'approve')
                                <span style="color: skyblue;">Approved</span>
                                @endif
                                @if ($data->status == 'rejected')
                                <span style="color: red;">Rejected</span>
                                @endif
                                @if ($data->status == 'waiting')
                                <span style="color: yellow;">Waiting</span>
                                @endif

                            </td>
                            <td>{{ $data->room->room_title }}</td>
                            <td>{{ $data->room->price }}</td>
                            <td>
                                <img src="/room/{{$data->room->image}}" alt="" srcset="" width="60%">
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{url('delete_booking',$data->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                  </svg></a>
                            </td>
                            <td>
                                <span style="padding: 10px;">
                                    <a class="btn btn-success" href="{{url('approve_book',$data->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                      </svg></a>
                                </span>

                                <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
                                  </svg></a>
                            </td>


                </tr>

            </tbody>
            @endforeach
    </table>

</div>



            </div>
    </div>

    @include('admin.footer')
</body>
</html>
