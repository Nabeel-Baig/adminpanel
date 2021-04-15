@extends('admin.layout.webapp')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>{{ !empty($title)?$title:'' }}</h3>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ !empty($title)?$title:'' }}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <form class="form-horizontal form-label-left" method="POST" action="{{route('home.edit')}}" enctype="multipart/form-data" novalidate>
                                @csrf
                                <h2 style="text-align: center">Banner Section</h2>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner1_text">{{ucwords(str_replace('_',' ','banner1_text'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="banner1_text" class="form-control" name="banner1_text" value="{{ !empty($record->banner1_text)?$record->banner1_text:'' }}" placeholder="{{ucwords(str_replace('_',' ','banner1_text'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner1_image">{{ucwords(str_replace('_',' ','banner1_image'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->banner1_image)?$record->banner1_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="banner1_image" name="banner1_image" accept=".jpg,.png">
                                                    <input type="text" id="banner1_image" name="banner1_image" value="{{ !empty($record->banner1_image) ? $record->banner1_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner2_text">{{ucwords(str_replace('_',' ','banner2_text'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="banner2_text" class="form-control" name="banner2_text" value="{{ !empty($record->banner2_text)?$record->banner2_text:'' }}" placeholder="{{ucwords(str_replace('_',' ','banner2_text'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner2_image">{{ucwords(str_replace('_',' ','banner2_image'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->banner2_image)?$record->banner2_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="banner2_image" name="banner2_image" accept=".jpg,.png">
                                                    <input type="text" id="banner2_image" name="banner2_image" value="{{ !empty($record->banner2_image) ? $record->banner2_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner3_text">{{ucwords(str_replace('_',' ','banner3_text'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="banner3_text" class="form-control" name="banner3_text" value="{{ !empty($record->banner3_text)?$record->banner3_text:'' }}" placeholder="{{ucwords(str_replace('_',' ','banner3_text'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="banner3_image">{{ucwords(str_replace('_',' ','banner3_image'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->banner3_image)?$record->banner3_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="banner3_image" name="banner3_image" accept=".jpg,.png">
                                                    <input type="text" id="banner3_image" name="banner3_image" value="{{ !empty($record->banner3_image) ? $record->banner3_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h2 style="text-align: center">Grid Section</h2>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section1_heading">{{ucwords(str_replace('_',' ','section1_heading'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section1_heading" class="form-control" name="section1_heading" value="{{ !empty($record->section1_heading)?$record->section1_heading:'' }}" placeholder="{{ucwords(str_replace('_',' ','section1_heading'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section1_text">{{ucwords(str_replace('_',' ','section1_text'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section1_text" class="form-control" name="section1_text" value="{{ !empty($record->section1_text)?$record->section1_text:'' }}" placeholder="{{ucwords(str_replace('_',' ','section1_text'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section1_image">{{ucwords(str_replace('_',' ','section1_image'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->section1_image)?$record->section1_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="section1_image" name="section1_image" accept=".jpg,.png">
                                                    <input type="text" id="section1_image" name="section1_image" value="{{ !empty($record->section1_image) ? $record->section1_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section2_heading">{{ucwords(str_replace('_',' ','section2_heading'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section2_heading" class="form-control" name="section2_heading" value="{{ !empty($record->section2_heading)?$record->section2_heading:'' }}" placeholder="{{ucwords(str_replace('_',' ','section2_heading'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section2_text">{{ucwords(str_replace('_',' ','section2_text'))}}<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="section2_text" class="form-control" name="section2_text" value="{{ !empty($record->section2_text)?$record->section2_text:'' }}" placeholder="{{ucwords(str_replace('_',' ','section2_text'))}}" required="required" autofocus>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="section2_image">{{ucwords(str_replace('_',' ','section2_image'))}} <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="input-group-btn">
                                            <div class="image-upload">
                                                <img src="{{asset(!empty($record->section2_image)?$record->section2_image:'assets/admin/images/placeholder.png')}}" class="img-responsive">
                                                <div class="file-btn">
                                                    <input type="file" id="section2_image" name="section2_image" accept=".jpg,.png">
                                                    <input type="text" id="section2_image" name="section2_image" value="{{ !empty($record->section2_image) ? $record->section2_image : '' }}" hidden="">
                                                    <label class="btn btn-info">Upload</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

l
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <a href="{{ url('/admin') }}" class="btn btn-primary">Cancel</a>
                                        <button id="send" type="submit" class="btn btn-success">Submit</button>
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
@section('page_js')
    <script src="{{asset('assets/admin/validator/validator.js')}}"></script>
@endsection
