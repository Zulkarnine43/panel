@extends('admin.headerFooter')

@section('body')
    <div>
        <h1 class="text-center text-primary">News</h1>
    </div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">
                <label class="font-weight-bolder">News Name:</label>
                <input type="text" name="product_name" class="form-control" placeholder=" "/>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">Short Description</label>
                <input type="text" name="product_description" class="form-control" placeholder=""/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Long Description</label>
                <textarea id="editor" class="form-control" name="long_description"></textarea>
            </div>


            <div class="form-group">
                <label class="font-weight-bolder">News image-</label>
                <input type="file" class="form-control" name="crop_image" accept="image/*">
            </div>


            <div class="form-group">
                <div>
                    <input class="btn-success btn-block" type="submit" name="btn" value="Save news Info">
                </div>
            </div>
        </form>
    </div>
@endsection