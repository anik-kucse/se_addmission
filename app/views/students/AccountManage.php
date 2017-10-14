<div class="container-fluid">
    <h1 style="text-align: center">Account Manage</h1>
    <form class="row justify-content-around" style="padding-top: 10px">

        <div class="col-8 form-group row">
            <label for="fullname" class="col-2 col-form-label">Full Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="fullname" name="fullname" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="username" class="col-2 col-form-label">Username</label>
            <div class="col-10">
                <input class="form-control" type="text" id="username" name="username" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="fathername" class="col-2 col-form-label">Father's Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="fathername" name="fathername" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="mothername" class="col-2 col-form-label">Mother's Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="mothername" name="mothername" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <span><b>Present Address</b></span>
        </div>

        <div class="col-8 form-group row">
            <label for="streetvillage" class="col-2 col-form-label">Street/Village</label>
            <div class="col-10">
                <input class="form-control" type="text" id="streetvillage" name="streetvillage" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="postcode1" class="col-2 col-form-label">Post Code</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{4}" id="postcode1" name="postcode1" readonly = "readonly">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="upozillathana" class="col-2 col-form-label">Upazilla/Thana</label>
            <div class="col-10">
                <input class="form-control" type="text" id="upozillathana" name="upozillathana" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="district" class="col-2 col-form-label">District</label>
            <div class="col-10">
                <input class="form-control" type="text" id="district" name="district" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="division" class="col-2 col-form-label">Division</label>
            <div class="col-10">
                <input class="form-control" type="text" id="division" name="division" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <span><b>Permanent Address</b></span>

        </div>

        <div class="col-8 form-group row">
            <label for="perstreetvillage" class="col-2 col-form-label">Street/Village</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perstreetvillage" name="perstreetvillage" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="postcode2" class="col-2 col-form-label">Post Code</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{4}" id="postcode2" name="postcode2" readonly = "readonly">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="perupozillathana" class="col-2 col-form-label">Upazilla/Thana</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perupozillathana" name="perupozillathana" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="perdistrict" class="col-2 col-form-label">District</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perdistrict" name="perdistrict" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="perdivision" class="col-2 col-form-label">Division</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perdivision" name="perdivision" readonly = "readonly">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="gender" class="col-2 col-form-label">Gender</label>
            <div class="col-10">
				<input class="form-control" type="text" id="perdivision" name="perdivision" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="mobile" class="col-2 col-form-label">Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="mobile" name="mobile" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="altermobile" class="col-2 col-form-label">Alternative Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="altermobile" name="altermobile" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="fathermobile" class="col-2 col-form-label">Father's Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="fathermobile" name="fathermobile" readonly = "readonly">
            </div>
        </div>

        <div class="col-8 form-group row">
            <table class="table table-light table-responsive">
                <thead>
                <tr>
                    <th></th>
                    <th>Board</th>
                    <th>Year</th>
                    <th>Registration Number</th>
                    <th>Roll Number</th>
                    <th>GPA</th>
					<th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SSC</td>
                    <td><input class="form-control" type="text"  id="hscyear" name="hscyear" placeholder="HSC Year" readonly = "readonly"></td>
                    <td><input class="form-control" type="text" id="sscyear" name="sscyear" placeholder="SSC Year" readonly = "readonly"></td>
                    <td><input class="form-control" type="number" id="sscregno" name="sscregno" placeholder="SSS Registration No" readonly = "readonly"></td>
                    <td><input class="form-control" type="number" id="sscrollno" name="sscrollno" placeholder="SSC Roll No" readonly = "readonly"></td>
                    <td><input class="form-control" type="text" id="sscgpa" name="sscgpa" placeholder="SSC GPA" readonly = "readonly"></td>
					<td><a href="#" data-toggle="modal" data-target="#dataModal">Edit</a></td>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td><input class="form-control" type="text"  id="hscyear" name="hscyear" placeholder="HSC Year" readonly = "readonly"></td>
                    <td><input class="form-control" type="text"  id="hscyear" name="hscyear" placeholder="HSC Year" readonly = "readonly"></td>
                    <td><input class="form-control" type="text"  id="hscregno" name="hscregno" placeholder="HSC Registration No" readonly = "readonly"></td>
                    <td><input class="form-control" type="text"  id="hscrollno" name="hscrollno" placeholder="HSC Roll No" readonly = "readonly"></td>
                    <td><input class="form-control" type="text"  id="hscgpa" name="hscgpa" placeholder="HSC GPA" readonly = "readonly"></td>
					<td><a href="#" data-toggle="modal" data-target="#dataModal">Edit</a></td>
                </tr>
                </tbody>
            </table>
        </div>
		
		<div id="dataModal" class="modal fade">
            <div class="modal-dialog">
                <form method="post" id="data_form" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><span id="modal_title">Insert Result</span></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-light table-responsive">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Board</th>
                                    <th>Year</th>
                                    <th>Registration Number</th>
                                    <th>Roll Number</th>
                                    <th>GPA</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>SSC</td>
                                        <td>
                                            <select class="form-control" >
                                                <option>ssc</option>
                                            </select>
                                        </td>
                                        <td><input class="form-control" type="text" id="sscyear" name="sscyear" placeholder="SSC Year"></td>
                                        <td><input class="form-control" type="number" id="sscregno" name="sscregno" placeholder="SSS Registration No"></td>
                                        <td><input class="form-control" type="number" id="sscrollno" name="sscrollno" placeholder="SSC Roll No"></td>
                                        <td><input class="form-control" type="text" id="sscgpa" name="sscgpa" placeholder="SSC GPA"></td>
                                    </tr>
                				</tbody>
    				        </table>
                         </div>
                    </div>
                </form>
            </div>
        </div>
		
		<div class="col-8 justify-content-around form-group row">
            <p>Do you wanna Change your Password?  <a href = "#" style = "color:red" data-toggle="modal" data-target="#ChangePassword"> Yes</a></p>
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
                            <label for="session_name" id="lbl_session">Current Password</label>
                            <input autofocus="autofocus" type="text" class="form-control" va/>
                            <br />
                        </div>
    					<div class="modal-body">
                            <label for="session_name" id="lbl_session">New Password</label>
                            <input autofocus="autofocus" type="text" class="form-control" va/>
                            <br />
                        </div>
    					<div class="modal-body">
                            <label for="session_name" id="lbl_session">Confirm Password</label>
                            <input autofocus="autofocus" type="text" class="form-control" va/>
                            <br />
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="session_id" id="session_id" />
                            <input type="submit" class="btn btn-outline-info" />
                        </div>
                    </div>
                </form>
            </div>
         </div>
    </form>
</div>
