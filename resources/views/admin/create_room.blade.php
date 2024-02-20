<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h2>Add Room </h2>
            </div>
            <div class="container-fluid">
<div>
    <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data" >
        @csrf


                    <div class="col-md-12">
                         <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example4" style="font-size: 20px;">Room Title</label>
                        <input type="text" id="form6Example4" class="form-control" name="title" />
                      </div>
                    </div>


                    <!-- Price input -->
                    <div class="col-md-12">
                        <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example3" style="font-size: 20px;">Price</label>
                      <input type="text" id="form6Example3" class="form-control" name="price" />
                    </div>
                    </div>

                    <!-- Image Upload -->
                    <div class="col-md-12">
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example3" style="font-size: 20px;">Upload Image</label>
                        <input type="file" class="form-control" id="inputGroupFile02" name="image">
                      </div>
                    </div>


                    <!-- Select RoomType -->
                        <div class="col-md-12" style="margin-bottom: 30px">
                            <label for="inputType" class="form-label" style="font-size: 20px;">Room Type</label>
                            <select class="form-select" name="type" aria-label="Default select example" style="background-color: #22252a; color: #8a8d93">
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                              </select>
                        </div>

                        <!-- Select Wifi -->
                        <div class="col-md-12" style="margin-bottom: 30px">
                            <label for="inputType" class="form-label" style="font-size: 20px;">Free Wifi</label>
                            <select class="form-select" name="wifi" aria-label="Default select example" style="background-color: #22252a; color: #8a8d93">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                        </div>

                    <!-- Text input -->


                    <!-- Email input -->

                    <!-- Number input -->
                    


                    <!-- Message input -->
                    <div class="col-md-12">
                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example7" style="font-size: 20px;">Description</label>
                      <textarea class="form-control" id="form6Example7" rows="4" name="description"></textarea>

                    </div>
                    </div>

<div>
    <input class="btn btn-danger" type="submit" value="Add Room" style="margin-bottom: 10px;">
</div>


                    <!-- Checkbox -->

                  </form>


</div>



            </div>
    </div>

    @include('admin.footer')
</body>
</html>
