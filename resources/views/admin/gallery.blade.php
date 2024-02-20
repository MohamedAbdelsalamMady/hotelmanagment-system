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
            <h2>Gallery</h2>
            </div>
            <div class="container-fluid">
    <div>
        <form action="{{url('upload_gallery')}}" method="POST" enctype="multipart/form-data" >
            @csrf

            <!-- Image Upload -->
            <div class="row">
                <div class="col-md-10">
                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example3" style="font-size: 20px;">Upload Image</label>
                    <input type="file" class="form-control" id="inputGroupFile02" name="image">
                  </div>
                </div>
            <div class="col-md-2">
                    <input class="btn btn-danger" type="submit" value="Add Image" style="margin-bottom: 50px;" required>
                </div>
            </div>




        </form>
        <div class="row">
            @foreach ($gallery as $gallery)
        <div class="col-md-4">
          

            <div class="card" style="width: 18rem; border-radius: 30px;">
                <img src="/gallery/{{$gallery->image}}" style="width: 100%">
                <div class="card-body">
                  <a href="{{url('delete_gallery',$gallery->id)}}" class="btn btn-danger" style="margin: 10px">Delete Image</a>
                </div>
              </div>
        </div>
        @endforeach
        </div>

</div>



            </div>
    </div>

    @include('admin.footer')
</body>
</html>
