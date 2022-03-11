@extends('layouts.app')
@section('title') Share Holders | HMS @endsection
@section('content')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Share Holders</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <button style="margin-left: 168px;" class="btn btn-round btn-primary btn-sm" data-toggle="modal" data-target="#addbtn">Add New</button>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Share Holders List</h2>
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">

                  <div id="datalist"></div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addbtn" role="dialog">
  <div class="modal-dialog">
    <form id="modal-form">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add New</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          @csrf

          <div class="form-group">
            <label>Share Holders Member No.</label>
            <input type="number" class="form-control" placeholder="Enter Share Holders Member No." id="sh_member_no" name="sh_member_no">
          </div>

          <div class="form-group">
            <label>Share Holders Name</label>
            <input type="text" class="form-control" placeholder="Enter Share Holders Name" id="sh_member_name" name="sh_member_name">
          </div>

          <div class="form-group">
            <label>Share Holders Mobile No.</label>
            <input type="number" class="form-control" placeholder="Enter Share Holders Mobile No." id="sh_mobile_no" name="sh_mobile_no">
          </div>

          <div class="form-group">
            <label>Share Holders Age</label>
            <input type="number" class="form-control" placeholder="Enter Share Holders Age" id="sh_member_age" name="sh_member_age">
          </div>

          <div class="form-group">
            <label>Share Holders Membership Date</label>
            <input type="text" class="form-control" placeholder="Enter Share Holders Membership Date" id="sh_membership_date" name="sh_membership_date">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary submit">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <form id="modal_form">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Share Holders</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label>Share Holders Member No.</label>
            <input type="number" class="form-control" id="e_sh_member_no" name="sh_member_no">
          </div>

          <div class="form-group">
            <label>Share Holders Name</label>
            <input type="text" class="form-control" id="e_sh_member_name" name="sh_member_name">
          </div>

          <div class="form-group">
            <label>Share Holders Mobile No.</label>
            <input type="number" class="form-control" id="e_sh_mobile_no" name="sh_mobile_no">
          </div>

          <div class="form-group">
            <label>Share Holders Age</label>
            <input type="number" class="form-control" id="e_sh_member_age" name="sh_member_age">
          </div>

          <div class="form-group">
            <label>Share Holders Membership Date</label>
            <input type="text" class="form-control" id="e_sh_membership_date" name="sh_membership_date">
          </div>

          <input type="hidden" id="e_sh_id">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary update">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    $(document).on("click", ".submit", function(e) {
      e.preventDefault();
      var sh_member_no = $("#sh_member_no").val();
      var sh_member_name = $("#sh_member_name").val();
      var sh_mobile_no = $("#sh_mobile_no").val();
      var sh_member_age = $("#sh_member_age").val();
      var sh_membership_date = $("#sh_membership_date").val();

      $.ajax({
        url: "{{route('shareholders.store')}}",
        data: {
          "_token": "{{ csrf_token() }}",
          sh_member_no: sh_member_no,
          sh_member_name: sh_member_name,
          sh_mobile_no: sh_mobile_no,
          sh_member_age: sh_member_age,
          sh_membership_date: sh_membership_date
        },
        type: "post",
        dataType: "json",
        success: function(data) {
          if (data.msgtype == "success") {
            toastr["success"](data.message);
            $("#addbtn").modal('hide');
            loaddata();
            $("#modal-form").trigger( "reset" );
          } else {
            toastr["error"](data.message);
          }
        },
        error: function(errors) {
          var error = errors.responseJSON;
          $("#modal-form").find(".alert-danger").remove();
          $("#modal-form").find(".modal-body").prepend('<div class="alert alert-danger">' + error.message + '</div>');
        }
      });
    });

    $("#datalist").on("click", ".edit", function() {
      var data = $(this).attr("data");

      $.ajax({
        url: "{{url('shareholders')}}" + "/" + data + "/edit",
        type: "get",
        dataType: "json",
        success: function(data) {
          $("#e_sh_member_no").val(data.sh_member_no);
          $("#e_sh_member_name").val(data.sh_member_name);
          $("#e_sh_mobile_no").val(data.sh_mobile_no);
          $("#e_sh_member_age").val(data.sh_member_age);
          $("#e_sh_membership_date").val(data.sh_membership_date);
          $("#e_sh_id").val(data.sh_id);
        }
      });
    });
    $(document).on("click", ".update", function(e) {
      e.preventDefault();
      var sh_id = $("#e_sh_id").val();
      var sh_member_no = $("#e_sh_member_no").val();
      var sh_member_name = $("#e_sh_member_name").val();
      var sh_mobile_no = $("#e_sh_mobile_no").val();
      var sh_member_age = $("#e_sh_member_age").val();
      var sh_membership_date = $("#e_sh_membership_date").val();

      $.ajax({
        url: "{{route('shareholders.store')}}",
        data: {
          "_token": "{{ csrf_token() }}",
          sh_id: sh_id,
          sh_member_no: sh_member_no,
          sh_member_name: sh_member_name,
          sh_mobile_no: sh_mobile_no,
          sh_member_age: sh_member_age,
          sh_membership_date: sh_membership_date
        },
        type: "post",
        dataType: "json",
        success: function(data) {
          if (data.msgtype == "success") {
            toastr["success"](data.message);
            $("#edit").modal('hide');
            loaddata();
          } else {
            toastr["error"](data.message);
          }
        },
        error: function(errors) {
          var error = errors.responseJSON;
          $("#modal_form").find(".alert-danger").remove();
          $("#modal_form").find(".modal-body").prepend('<div class="alert alert-danger">' + error.message + '</div>');
        }
      });
    });

    $("#datalist").on("click", ".delete", function() {
      var data = $(this).attr("data");
      var res = deleteConfirm();
      if(res == true){
      $.ajax({
        url: "{{url('shareholders')}}" + "/" + data,
        data: {
          _token: "{{ csrf_token() }}"
        },
        type: "delete",
        dataType: "json",
        success: function(data) {
          if (data.msgtype == "success") {
            toastr["success"](data.message);
            loaddata();
          } else {
            toastr["error"](data.message);
          }
        }
      });
    }
    });
    loaddata();
  });

  function loaddata() {

    $.ajax({
      url: "{{route('shareholders.create')}}",
      type: "get",
      dataType: "html",
      success: function(data) {
        $("#datalist").html(data);
      }
    });
  }

function deleteConfirm() {
  console.log('hi');
  var result = confirm("Want to delete?");
    if (result==true) {
     return true;
    } 
    else {
     return false;
    }
}
</script>
@endsection
