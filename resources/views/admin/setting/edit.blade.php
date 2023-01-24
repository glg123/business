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
                                <li class="breadcrumb-item active" aria-current="page">Edit Setting</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Edit Setting</h4>

                    </div>
                </div>
                <form method="POST" action="{{ route('admin.settings.update',$setting->id) }}"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Site Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="site_name" class="form-control" type="text" value="{{$setting->site_name}}"
                                   placeholder="Site Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Site Logo</label>
                        <img src="{{url($setting->site_logo)}}" alt="" width="100">
                        <input required name="site_logo" type="file" class="form-control-file form-control height-auto">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Slider Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="slider_title" class="form-control" type="text"
                                   value="{{$setting->slider_title}}" placeholder="Slider Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Slider description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="slider_description"
                                      class="form-control">{!! $setting->slider_description !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Slider Image</label>
                        <img src="{{url($setting->slider_image)}}" alt="" width="100">
                        <input required name="slider_image" type="file" class="form-control-file form-control height-auto">
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Slider Video Link</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="slider_video_link" class="form-control" type="url"
                                   value="{{$setting->slider_video_link}}" placeholder="Slider Video Link">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About Us Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="about_us_title" class="form-control" type="text"
                                   value="{{$setting->about_us_title}}" placeholder="About Us Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">About description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="about_us_description"
                                      class="form-control">{!! $setting->about_us_description !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>About Us Image</label>
                        <img src="{{url($setting->about_us_image)}}" alt="" width="100">
                        <input required name="about_us_image" type="file" class="form-control-file form-control height-auto">
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="service_title" class="form-control" type="text"
                                   value="{{$setting->service_title}}" placeholder="Service Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Service description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="service_description"
                                      class="form-control">{!! $setting->service_description !!}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Blog Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="blog_title" class="form-control" type="text" value="{{$setting->blog_title}}"
                                   placeholder="Blog Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Blog description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="blog_description"
                                      class="form-control">{!! $setting->blog_description !!}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Site Mobile</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="site_mobile" class="form-control" type="tel" value="{{$setting->site_mobile}}"
                                   placeholder="Site Mobile">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Site Email</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="site_email" class="form-control" type="email" value="{{$setting->site_email}}"
                                   placeholder="Site Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Site Address</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="site_address" class="form-control" type="text"
                                   value="{{$setting->site_address}}" placeholder="Site Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Site schedule</label>
                        <div class="col-sm-12 col-md-10">
                            <input required name="site_schedule" class="form-control" type="text"
                                   value="{{$setting->site_schedule}}" placeholder="Site schedule">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Footer Image</label>
                        <img src="{{url($setting->footer_logo)}}" alt="" width="100">
                        <input required name="footer_logo" type="file" class="form-control-file form-control height-auto">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">footer description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="footer_description"
                                      class="form-control">{!! $setting->footer_description !!}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">who are you</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="who_are_you" class="form-control">{!! $setting->who_are_you !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">our vision</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="our_vision" class="form-control">{!! $setting->our_vision !!}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">our history</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea required name="our_history" class="form-control">{!! $setting->our_history !!}</textarea>
                        </div>
                    </div>

                    <div class="input-group mb-0">
                        <!--
                            use code for form submit
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                        -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Edit</button>
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
