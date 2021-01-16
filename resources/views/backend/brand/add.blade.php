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

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add brand</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('admin/brand/add/Submit')}}" method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="name">brand Name</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" name="name" id="name" placeholder="brand Name" />
                                <br>
                                <small style="color: red;">@error('name')
                                    {{$message}}
                                @enderror</small>
                            </div>
                        </div>

                        <div class="control-group hidden-phone">
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" name="description" id="description" rows="3">brand Description</textarea>
                                <br>
                                <small style="color: red;">@error('description')
                                    {{$message}}
                                @enderror</small>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="status">Publication Status</label>
                            <div class="controls">
                                <input type="checkbox" name="status" id="status" value="1">
                                <br>
                                <small style="color: red;">@error('status')
                                    {{$message}}
                                @enderror</small>
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
