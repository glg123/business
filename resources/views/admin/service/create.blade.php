@extends('admin.layout')

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Create Service</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Add New Service</h4>

                    </div>
                </div>
                <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service title</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="service_title" class="form-control" type="text" placeholder="service title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="service_description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Icon</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="service_icon" class="form-control" type="text"  placeholder="Service Icon">
                        </div>
                    </div>
                    <div class="input-group mb-0">
                        <!--
                            use code for form submit
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                        -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block" >Create New</button>
                    </div>
                </form>

            </div>
            <!-- Default Basic Forms End -->

        </div>

    </div>
@endsection

@push('js')
    <script src="{{url('admin/vendors/scripts/layout-settings.js')}}"></script>


@endpush
