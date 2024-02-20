<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
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
                    <h2>Mail send to {{$data->name}}</h2>
                </div>
            </div>

        </div>
        <div class="container-fluid">

            <form action="{{url('mail',$data->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf


                            <div class="col-md-12">
                                 <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form6Example4" style="font-size: 20px;">Greeting</label>
                                <input type="text" id="form6Example4" class="form-control" name="greeting" />
                              </div>
                            </div>


                            <!-- Price input -->
                            <div class="col-md-12">
                                <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form6Example7" style="font-size: 20px;">Mail Body</label>
                              <textarea class="form-control" id="form6Example7" rows="4" name="body"></textarea>

                            </div>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-12">
                                <div data-mdb-input-init class="form-outline mb-4">
                               <label class="form-label" for="form6Example4" style="font-size: 20px;">Action Text</label>
                               <input type="text" id="form6Example4" class="form-control" name="action_text" />
                             </div>
                           </div>


                            <!-- Select RoomType -->
                            <div class="col-md-12">
                                <div data-mdb-input-init class="form-outline mb-4">
                               <label class="form-label" for="form6Example4" style="font-size: 20px;">Action URL</label>
                               <input type="text" id="form6Example4" class="form-control" name="action_url" />
                             </div>
                           </div>

                                <!-- Select Wifi -->
                                <div class="col-md-12">
                                    <div data-mdb-input-init class="form-outline mb-4">
                                   <label class="form-label" for="form6Example4" style="font-size: 20px;">End Line</label>
                                   <input type="text" id="form6Example4" class="form-control" name="endline" />
                                 </div>
                               </div>


        <div>
            <input class="btn btn-danger" type="submit" value="Send Mail" style="margin-bottom: 10px;">
        </div>


                            <!-- Checkbox -->

                          </form>


        </div>
    </div>

    @include('admin.footer')
</body>

</html>
