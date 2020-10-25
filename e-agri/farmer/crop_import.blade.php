@extends('farmer.headerFooter')

@section('body')
<div>
    <h1 class="text-center text-primary">Import here</h1>
</div>
    <div class="col-lg-6 jumbotron mx-auto">

        <form class="form-group" method="POST" action="" enctype="multipart/form-data">

            <div class="form-group">
                <label class="font-weight-bolder">Crop Name:</label>
                <input type="text" name="product_name" class="form-control" placeholder="Ex.Jute,Rice "/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Type:</label>
                <select class="form-control" name="crop_type">
                    <option>---Select a Name</option>
                    <option value="Fruits">Fruits</option>
                    <option value="vegetables">vegetables</option>
                    <option value="Food">Food Crops</option>
                    <option value="Others">Others crops</option>
                </select>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Quantity:</label>
                <input type="text" name="product_quantity" class="form-control" min="1" placeholder="Ex.20 bighas,100tree..Etc"/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Bid Rate</label>
                <input type="number" name="product_price" class="form-control" placeholder="Ex.Minimum 10000tk For bidding" min="1"/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop Description</label>
                <input type="text" name="product_description" class="form-control" placeholder="Short Discreption"/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Long Description</label>
                <textarea id="editor" class="form-control" name="long_description"></textarea>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder"> Date Of Bidding</label>
                <input type="date" name="last_date_bidding" class="form-control" placeholder=""/>
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Crop image-</label>
                <input type="file" class="form-control" name="crop_image" accept="image/*">
            </div>

            <div class="form-group">
                <label class="font-weight-bolder">Another Crop image-</label>
                <input type="file" class="form-control" name="crop_image_2" accept="image/*">
            </div>

            <div class="form-group">
                <div>
                    <input class="btn-success" type="submit" name="btn" value="Save product Info">
                </div>
            </div>
        </form>
    </div>
    @endsection