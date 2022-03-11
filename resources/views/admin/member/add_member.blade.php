@extends('layouts.app')
@section('title') Member | HMS @endsection
@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3><b>Member</b></h3>
      </div>
    </div>
    <a href="{{url('member')}}">
      <button style="margin-left: 505px;" class="btn btn-round btn-primary btn-sm">Member List</button>
    </a>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Member</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <form class="form-horizontal form-label-left" method="POST" action="{{route('member.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Member Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input id="name" class="form-control" name="mem_name" placeholder="Enter Name" type="text" value="{{ old('mem_name') }}">
                  <p class="text-danger">{{$errors->first('mem_name')}}</p>
                </div>
              </div>

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Member Number <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="number" name="mem_phone" placeholder="Enter Your Number" class="form-control" value="{{ old('mem_phone') }}">
                  <p class="text-danger">{{$errors->first('mem_phone')}}</p>
                </div>
              </div>

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Member Address <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <input type="text" id="address" name="mem_address" placeholder="Enter Address" class="form-control" value="{{ old('mem_address') }}">
                  <p class="text-danger">{{$errors->first('mem_address')}}</p>
                </div>
              </div>

              <div class="field item form-group">
                <label for="profile" class="col-form-label col-md-3 col-sm-3  label-align">Member Post <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <input id="profile" type="text" name="mem_post" class="form-control" placeholder="Enter Post" value="{{ old('mem_post') }}">
                  <p class="text-danger">{{$errors->first('mem_post')}}</p>
                </div>
              </div>

              <div class="field item form-group">
                <label for="department" class="col-form-label col-md-3 col-sm-3  label-align">Member Department <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                  <select class="form-control" name="mem_dept_id">
                    @foreach($data as $value)
                    <option value="" hidden>--Select--</option>
                    <option value="{{ $value->dept_id }}">{{ $value->dept_name }}</option>
                    @endforeach
                  </select>
                  <p class="text-danger">{{$errors->first('mem_dept_id')}}</p>
                </div>
              </div>

              <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align" for="telephone">Photo <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6">
                  <img id='previmage' style="height:140px;" src="{{asset('images/blankavatar.png')}}" alt="your image" class='img-responsive img-circle'>
                  <br>
                  <input type="file" id="image" name="mem_img" onchange="readURL(this);" value="{{ old('mem_img') }}">
                  <p class="text-danger">{{$errors->first('mem_img')}}</p>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 offset-md-3">
                  <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                  <button type="submit" class="btn btn-success btn-sm submit">Submit</button>
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
@section('script')
<script type="text/javascript">


  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#previmage')
          .attr('src', e.target.result)
          .width(140)
          .height(140);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }

  function myFunction() {
    window.print();
  }
</script>
@endsection
