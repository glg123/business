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
                                <li class="breadcrumb-item active" aria-current="page">Show Contact</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Show Contact</h4>

                    </div>
                </div>
                <form >

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="blog_title" class="form-control" type="text" value="{{$contact->name}}" placeholder="Name" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="email" class="form-control" type="text" value="{{$contact->email}}" placeholder="Email" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Phone</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="phone" class="form-control" type="text" value="{{$contact->phone}}" placeholder="Phone" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="subject" class="form-control" type="text" value="{{$contact->subject}}" placeholder="Subject" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Body</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea name="body" class="form-control">{!! $contact->body !!}</textarea>
                        </div>
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
