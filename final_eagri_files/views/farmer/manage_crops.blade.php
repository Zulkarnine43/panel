@extends('farmer.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
                    <h3 class="">Manage Crops Info</h3>
                    <h3 class="text-center text-success"></h3>
                    <table class="table table-bordered  text-center table-hover table-responsive-lg">
                        <tr class="t1">
                            <th>Sl No</th>
                            <th>Crop_name </th>
                            <th>crop_type </th>
                            <th>crop_quantity</th>
                            <th>crop_price</th>
                            <th>crop_description</th>
                            <th>long_description</th>
                            <th>crop_image</th>
                            <th>Action</th>
                        </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn-success">Edit</a>
                                    <a href="" class="btn-success ">Delete</a>
                                </td>
                            </tr>
                    </table>
                </div>
    </div>


@endsection()