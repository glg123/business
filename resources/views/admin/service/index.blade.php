@extends('admin.layout')

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>DataTable</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{route('admin.services.create')}}"><span class="">Create New</span></a>

                    </div>

                </div>
            </div>
            <!-- Simple Datatable start -->

            <div class="card-box mb-30">


                <div class="pb-20">

                    <table class="data-table table stripe hover nowrap">
                        <thead>
                        <tr>

                            <th>#</th>
                            <th>Service title</th>
                            <th>Created time</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $serviceItem)
                            <tr>

                                <td>{{$serviceItem->id}}</td>
                                <td>{{$serviceItem->service_title}}</td>
                                <td>{{$serviceItem->created_at}} </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="{{route('admin.services.edit',$serviceItem->id)}}"><i class="dw dw-edit2"></i> Edit</a>
                                            <form method="POST" action="{{ route('admin.services.destroy',$serviceItem->id) }}" enctype="multipart/form-data">
                                                @csrf

                                                <button class="dropdown-item" type="submit">
                                                <i class="dw dw-delete-3"></i>
                                                Delete
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('js')
    <script src="{{url('admin/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('admin/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('admin/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
    <script src="{{url('admin/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('admin/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
    <script src="{{url('admin/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
    <script src="{{url('admin/src/plugins/datatables/js/vfs_fonts.js')}}"></script>
    <!-- Datatable Setting js -->
    <script src="{{url('admin/vendors/scripts/datatable-setting.js')}}"></script>

@endpush
