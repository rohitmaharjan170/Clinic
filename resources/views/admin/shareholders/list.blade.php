<table id="datatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>SN</th>
            <th>Member No.</th>
            <th>Member Name</th>
            <th>Mobile No.</th>
            <th>Age</th>
            <th>Memebership Date</th>
            <th>Action</th>
        </tr>
    </thead>


    <tbody>
    @php $sl=1 @endphp
    @foreach($data as $value)
        <tr>
            <td>{{ $sl++ }}</td>
            <td>{{ $value->sh_member_no }}</td>
            <td>{{ $value->sh_member_name }}</td>
            <td>{{ $value->sh_mobile_no }}</td>
            <td>{{ $value->sh_member_age }}</td>
            <td>{{ $value->sh_membership_date }}</td>
            <td>
                <button class="edit btn btn-btn btn-outline-info btn-sm" data="{{ $value->sh_id }}" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
                <button class="delete btn btn-outline-danger btn-sm" data="{{ $value->sh_id }}" onclick=""><i class="fa fa-trash"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>