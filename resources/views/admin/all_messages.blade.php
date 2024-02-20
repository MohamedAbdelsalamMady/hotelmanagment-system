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
                    <h2>All Messages</h2>
                </div>
            </div>



        </div>
        <div class="container-fluid">
            <table class="table table-dark table-border">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Send Email</th>
                    </tr>
                </thead>
                @foreach ($data as $data)
                    <tbody>
                        <tr>
                            <!--Changing The Code Of The Number Of Rows-->
                            <th scope="row">1</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->message }}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('send_mail',$data->id)}}" >Send Email</a>
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
