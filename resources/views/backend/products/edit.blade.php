@extends('backend/layout/layout')
@section('BackendLayout')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Products</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="#">New</a>
        </li>
    </ul>
 {{-- @php
      echo "<pre>";
        print_r($result[0]);

        die();
@endphp --}}
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add New Product</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" action="{{url('admin/product/edit/Update').'/'.$result[0]->product_id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="name">Product Name </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="name" name="product_name" value="{{$result[0]->product_name}}" /><br>
                                <small style="color: red;font-family:italic;">Help text</small>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="category">Product Category</label>
                            <div class="controls">
                                <select id="category" name="category_id" multiple data-rel="chosen">
                                    <option>Select Category</option>
                                        <option>fafdafa</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="brand">Product Brand</label>
                            <div class="controls">
                                <select id="brand" name="brand_id" data-rel="chosen">
                                    <option>Select Option</option>
                                    <option>hi</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="short_description">Product Short Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="short_description" name="product_short_description"
                                    rows="3">{{$result[0]->product_short_description}}</textarea>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="long_description">Product Long Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="long_description" name="product_long_description"
                                    rows="3">{{$result[0]->product_long_description}}</textarea>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="price">Product Price</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">$</span><input id="price" name="price" value="{{$result[0]->price}}" size="16" type="text">
                                </div>
                                <p class="help-block">Here's some help text</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="image">Product Image</label>
                            <div class="controls">
                                <input class="input-file uniform_on" id="image" name="product_image" type="file">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="size">Product Size</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="size" name="product_size" value="{{$result[0]->product_size}}" type="text" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="color">Product Color</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="color" name="product_color" value="{{$result[0]->product_color}}" type="text" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="status">Status</label>
                            <div class="controls">
                                <label class="checkbox">
                                    @if ($result[0]->publication_status == 1)
                                    <input type="checkbox" id="status" name="publication_status" value="0" checked />
                                    @else
                                    <input type="checkbox" id="status" name="publication_status" value="1" />
                                    @endif

                                    {{-- <input type="checkbox" id="status" name="publication_status" value="{{$result[0]->publication_status}}" /> --}}
                                </label>
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
