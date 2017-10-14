<div class="col">
    <div class="table-responsive">
        <br />
        <table id="session_table" class="table">
            <thead>
            <tr>
                <th >User Name</th>
                <th>Full Name</th>
                <th>User Role</th>
                <th >Modified by</th>
                <th >Modified At</th>
                <th >Edit</th>
                <th >Delete</th>
            </tr>
            </thead>
            <tbody>
                <td>skjhdkjs</td>
                <td>jshfkjdgsyfhd xjcjdsugfic</td>
                <td>Entry</td>   
                <td>hfj</td>
                <td>gdyt</td>
                <td>
                    <button type="button" name="update"  data-toggle="modal" data-target="#updateInfo" value="<?php echo $value['id']?>" class="btn btn-outline-info my-2 my-sm-0" onclick="btn_update(this);" >Update</button>
                </td>
                <td>
                    <form action="<?php echo BASE_URL?>/Usession/delete" method="post">
                        <button type="submit" name="delete" value="<?php echo $value['id']?>" class="btn btn-outline-danger my-2 my-sm-0" onclick="return confirm('Do u really want to delete')" >Delete</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="updateInfo" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="data_form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><span id="modal_title">Update Staff Information</span></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label for="user_role" id="lbl_session">User Role</label>
                        <select>
                            <option>Entry</option>
                            <option>Manager</option>
                        </select>
                        <br />
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="staff_id" id="staff_id" />
                        <input type="submit" name="action" id="action" class="btn btn-outline-info" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col crtbtn">
        <button type="button" id="add_button" data-toggle="modal" data-target="#dataModal" class="btn btn-outline-dark my-2 my-sm-0 crtbtn" onclick="btn_add(this);">Add</button>
    </div>
    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="data_form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><span id="modal_title">Add new Staff</span></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <label for="user_role" id="lbl_session">User Role</label>
                        <select>
                            <option>Entry</option>
                            <option>Manager</option>
                        </select>
                        <br/>
                    </div>
                    <div class="modal-body">
                        <label for="user_name" id="lbl_session">User Name</label>
                        <input autofocus="autofocus" type="text" name="user_name" id="user_name" class="form-control" va/>
                    </div>
                    <div class="modal-body">
                        <label for="full_name" id="lbl_session">Full Name</label>
                        <input autofocus="autofocus" type="text" name="full_name" id="full_name" class="form-control" va/>
                    </div>
                    <div class="modal-body">
                        <label for="password" id="lbl_session">Password</label>
                        <input autofocus="autofocus" type="password" name="password" id="password" class="form-control" va/>
                    </div>
                    <div class="modal-body">
                        <label for="confirm_password" id="lbl_session">Confirm Password</label>
                        <input autofocus="autofocus" type="password" name="confirm_password" id="confirm_password" class="form-control" va/>
                        <br/>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="" id="" />
                        <input type="submit" name="action" id="action" class="btn btn-outline-info" value="Add" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#session_table').DataTable({
            "columnDefs":[
                {
                    "targets":[3, 4],
                    "orderable":false,
                }
            ]
        });
    });

    function btn_update(asd) {
        var parent = asd.parentNode.parentNode;
        var btn = parent.childNodes[7];
        var btnValue = btn.childNodes[1];
        var name = parent.childNodes[1];
        var nameText = name.childNodes[1].innerText;
        console.log(btnValue.value);
        $('#dataModal').modal('show');
        $('#data_form').attr('action','http://localhost/se_addmission/Usession/update');
        $('#modal_title').text('Update Session');
        $('#lbl_session').text('Update this entry');
        $('#session_name').val(nameText);
        $('#session_id').val(btnValue.value);
        $('#action').val('Update');
    };

    function btn_add(asd) {
        $('#dataModal').modal('show');
        $('#data_form').attr('action','http://localhost/se_addmission/Usession/addNew');
        $('#modal_title').text('Add Session');
        $('#lbl_session').text('Add New Session');
        $('#session_id').val("");
        $('#session_name').val("");
        $('#action').val('Add');
    };

</script>