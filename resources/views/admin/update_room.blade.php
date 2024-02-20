<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('admin.css')
</head>
<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h2>Update Room </h2>
            </div>
            <div class="container-fluid">
<div>
    <form action="{{url('edit_room',$data->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf


                    <div class="col-md-12">
                         <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example4" style="font-size: 20px;">Room Title</label>
                        <input type="text" id="form6Example4" class="form-control" value="{{$data->room_title}}" name="title" />
                      </div>
                    </div>

                    <!-- Message input -->
                    <div class="col-md-12">
                        <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example7" style="font-size: 20px;">Description</label>
                      <textarea class="form-control" id="form6Example7" rows="4" name="description">
                        {{$data->description}}"
                      </textarea>

                    </div>
                    </div>


                    <!-- Price input -->
                    <div class="col-md-12">
                        <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form6Example3" style="font-size: 20px;">Price</label>
                      <input type="text" id="form6Example3" class="form-control" value="{{$data->price}}" name="price" />
                    </div>
                    </div>




                    <!-- Select RoomType -->
                        <div class="col-md-12" style="margin-bottom: 30px">
                            <label for="inputType" class="form-label" style="font-size: 20px;">Room Type</label>
                            <select class="form-select" name="type" aria-label="Default select example" style="background-color: #22252a; color: #8a8d93">
                                <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                              </select>
                        </div>

                        <!-- Select Wifi -->
                        <div class="col-md-12" style="margin-bottom: 30px">
                            <label for="inputType" class="form-label" style="font-size: 20px;">Free Wifi</label>
                            <select class="form-select" name="wifi" aria-label="Default select example" style="background-color: #22252a; color: #8a8d93">
                                <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                              </select>
                        </div>

                    <!-- Text input -->


                    <!-- Email input -->

                    <!-- Number input -->
                    {{-- <div class="col-md-12">
                         <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example6" style="font-size: 20px;">Phone</label>
                      <input type="text" id="form6Example6" class="form-control" />

                    </div>
                    </div> --}}




                    <!-- Image Upload -->
                    <div class="col-md-12">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form6Example3" style="font-size: 20px;">Upload Image</label>
                            <input type="file" class="form-control" id="inputGroupFile02" name="image">
                          </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="form6Example3" style="font-size: 20px;">Current Image</label>
                            <img src="/room/{{$data->image}}" alt="" srcset="" width="20%">
                        </div>

<div>
    <input class="btn btn-danger" type="submit" value="Update Room" style="margin-bottom: 10px;">
</div>


                    <!-- Checkbox -->

                  </form>


</div>



            </div>
    </div>

    @include('admin.footer')
</body>
</html>
