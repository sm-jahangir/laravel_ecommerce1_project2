@extends('backend/layout/layout')
@section('BackendLayout')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Slider</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">New</a>
        </li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Slider</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('admin/slider/add/Submit')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="name">Slider Name </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="name" name="slider_name" /><br>
                                <small style="color: red;font-family:italic;">Help text</small>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="slider_description">Slider Short Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="slider_description" name="slider_description"
                                    rows="3"></textarea>
                            </div>
                        </div>


                        <div class="control-group">
                            <label class="control-label" for="image">Slider Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" id="image" name="slider_image" type="file">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="slider_btn_link">Button Link</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="slider_btn_link" name="slider_btn_link" type="text"
                                    value="https://">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="status">Status</label>
                            <div class="controls">
                                <label class="checkbox">
                                    <input type="checkbox" id="status" name="slider_status" value="1" checked />
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="date">Added Date</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="date" name="created_at">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="reset" class="btn">Cancel</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
        <!--/span-->

    </div>
    <!--/row-->




@endsection
