@extends('backend/layout/layout')
@section('BackendLayout')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">Forms</a>
        </li>
    </ul>

<a name="slider_add" id="slider_add" class="btn btn-success" href="{{url('admin/slider/add')}}" role="button">Slider Add Here</a>

{{-- @php
    echo "<pre>";
    print_r($result);
    die();
@endphp --}}

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members <span
                        style="color: red;margin-left:50px"> {{session('msg')}}</span></h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                        <tr>
                            <th>Slider Name</th>
                            <th>Slider Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $list)
                            <tr>
                                <td>{{ $list->slider_name }}</td>
                                {{-- <td class="center"><img style="width: 100px;height:100px;" src="{{ asset('storage/product/'.$list->slider_image) }}" alt=""></td> --}}

                                <td class="center">{{ $list->slider_image }}</td>
                                <td class="center">{{ $list->slider_description }}</td>
                                <td class="center">
                                    @if ($list->slider_status == 1)
                                        <span class="label label-success"> {{ 'Active' }}</span>
                                    @else
                                        <span class="label label-warning">  {{ 'Unactive' }}</span>
                                    @endif

                                </td>
                                <td class="center">
                                    @if ($list->slider_status == 1)
                                        <a class="btn btn-success" href="{{url('admin/slider/unactive').'/'.$list->slider_id }}"><i class="halflings-icon thumbs-up"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-warning" href="{{url('admin/slider/active').'/'.$list->slider_id }}"><i class="halflings-icon thumbs-down"></i>
                                        </a>
                                    @endif
                                    <a class="btn btn-info" href="{{url('admin/slider/edit').'/'.$list->slider_id }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a id="delete" class="btn btn-danger" href="{{url('admin/slider/delete').'/'.$list->slider_id }}">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--/span-->

    </div>
    <!--/row-->



@endsection
