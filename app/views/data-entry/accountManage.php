<div class="col">
    <h1 style="text-align: center">Account Manage</h1>
    <form class="row justify-content-around" style="padding-top: 10px">
        <div class="col-8 form-group row">
            <label for="username" class="col-2 col-form-label">User Name</label>
            <div class="col-9">
                <label class="form-control" type="text" id="username" name="fullname">gsdjhgsk</label>
            </div>
            <div class="col-1"><a href="#"id="ChangeName" data-toggle="modal" data-target="#ChangeName">Edit</a></div>
        </div>
        <div class="col-8 form-group row">
            <label for="fullname" class="col-2 col-form-label">Full Name</label>
            <div class="col-9">
                <label class="form-control" type="text" id="fullname" name="fullname">gsdjhgsk</label>
            </div>
            <div class="col-1"><a href="#"id="ChangeName" data-toggle="modal" data-target="#ChangeName">Edit</a></div>
        </div>
        <div id="ChangeName" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="data_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><span id="modal_title">Edit Full Name</span></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="col">
                                <label for="fullname" id="lbl_fullname">Current Password</label>
                                <input autofocus="autofocus" type="text" class="form-control" va/>
                            </div>
                            <div class="col">
                                <label for="fullname" id="lbl_fullname">New Name</label>
                                <input autofocus="autofocus" type="text" class="form-control" va/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="updatename_id" id="updatename_id" />
                            <input type="submit" class="btn btn-outline-info" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="crtbtn col-12">
            <p>Wanna change Your Password?? <a href="#" style = "color:red" id="password" data-toggle="modal" data-target="#ChangePassword">Yes</a></p>
        </div>
        <div id="ChangePassword" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="data_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><span id="modal_title">Change Password</span></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="col">
                                <label for="password_name" id="lbl_password">Current Password</label>
                                <input autofocus="autofocus" type="password" class="form-control" va/>
                            </div>
                            <div class="col">
                                <label for="password_name" id="lbl_password">New Password</label>
                                <input autofocus="autofocus" type="password" class="form-control" va/>
                            </div>
                            <div class="col">
                                <label for="password_name" id="lbl_password">Confirm Password</label>
                                <input autofocus="autofocus" type="password" class="form-control" va/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="password_id" id="password_id" />
                            <input type="submit" class="btn btn-outline-info" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>