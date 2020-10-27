@extends('admin.headerFooter')
@section('body')

    <div class="row flex-sm-row">
        <div class="col-md-12 col-sm-12 ">
            <h3 class="">Manage News Info</h3>
            <h3 class="text-center text-success"></h3>
            <table class="table table-bordered  text-center table-hover table-responsive-lg">
                <tr>
                    <th>Sl No</th>
                    <th>News Name </th>
                    <th>short_description </th>
                    <th>long description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn-outline-success">Edit</a>
                        <a href="" class="btn-outline-success ">Delete</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


@endsection()