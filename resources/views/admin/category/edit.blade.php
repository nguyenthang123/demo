@extends('admin.home')
@section('title', 'Sửa danh mục')
@section('sidebar')
@section('content')
     
<div class="dashboard-full">
            <div class="container">
                 <div class="row mx-auto">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header"> Sửa danh mục </h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                                 <label for="inputUserName">Danh mục cha: </label>
                                                 <select class="browser-default custom-select">
                                                    <option selected> --- ROOT --- </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                 </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName"> Tên danh mục </label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-push-3 pl-3">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary btn-block"> Sửa danh mục </button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                 </div>
            </div>     
</div>  
     
@endsection