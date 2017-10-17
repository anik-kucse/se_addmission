<div class="container">
    <h1 style="text-align: center">Account Manage</h1>
    <div class="row justify-content-around" style="padding-top: 10px">

        <div class="col-12 row">
	        <div class="col-6 from-control row">
	        	<label for="fullname" class="col-4 col-form-label">Full Name</label>
	            <div class="col-8">
	                <label class="form-control" type="text" id="fullname" name="fullname" ><?php echo $data['user'][0]['full_name']?></label>
	            </div>
	        </div>
	        <div class="col-6 from-control row">
	        	 <label for="username" class="col-4 col-form-label">Username</label>
	            <div class="col-8">
	                <label class="form-control" type="text" id="username" name="username" ><?php echo $data['user'][0]['user_name']?></label>
	            </div>
	        </div>    
        </div>

        <div class="col-12 row">
            <div class="col-6 form-group row">
	            <label for="fathername" class="col-4 col-form-label">Father's Name</label>
	            <div class="col-8">
	                <label class="form-control" type="text" id="fathername" name="fathername" ><?php echo $data['student'][0]['father_name']?></label>
	            </div>
	        </div>
	        <div class="col-6 from-control row">
	        	<label for="mothername" class="col-4 col-form-label">Mother's Name</label>
            	<div class="col-8">
                	<label class="form-control" type="text" id="mothername" name="mothername" ><?php echo $data['student'][0]['mother_name']?></label>
           		</div>
	        </div>
        </div>

        <div class="col-12 form-group row">
        	<div class="col-2">
        		<span><b>Present Address</b></span>
        	</div>
        	<div class="col-10">
        		<textarea class="form-control" disabled="disabled"  >
                    <?php
                    echo $data['student'][0]['present_street_village'].", ".$data['student'][0]['present_Upozilla_thana'].", Post: ".$data['student'][0]['present_post_code'].", ".$data['student'][0]['present_district'].", ".$data['student'][0]['present_division'];
                    ?>
                </textarea>
        	</div>   
        </div>
        <br>
        <div class="col-12 form-group row">
        	<div class="col-2">
        		<span><b>Parmanent Address</b></span>
        	</div>
        	<div class="col-10">
        		<textarea disabled="disabled" class="form-control" >
                    <?php
                    echo $data['student'][0]['permanent_street_village'].", ".$data['student'][0]['permanent_Upozilla_thana'].", Post: ".$data['student'][0]['permanent_post_code'].", ".$data['student'][0]['permanent_district'].", ".$data['student'][0]['permanent_division'];
                    ?>
                </textarea>
        	</div>   
        </div>
        <br><br>
        <div class="col-12 form-group row">
            <label for="gender" class="col-2 col-form-label">Gender</label>
            <div class="col-10">
				<label class="form-control" type="text" id="perdivision" name="perdivision" >
                    <?php
                    if($data['student'][0]['gender'] == '1'){
                        echo "male";
                    }elseif ($data['student'][0]['gender'] == '2'){
                        echo "female";
                    }elseif ($data['student'][0]['gender'] == '3'){
                        echo "other";
                    }
                    ?>
                </label>
            </div>
        </div>
        <br>
        <div class="col-12 form-group row">
            <label for="mobile" class="col-2 col-form-label">Mobile No</label>
            <div class="col-10">
                <label class="form-control" type="text" pattern="[0-9]{11}" id="mobile" name="mobile" ><?php echo $data['student'][0]['mobile']?></label>
            </div>
        </div>

        <div class="col-12 form-group row">
            <label for="altermobile" class="col-2 col-form-label">Alternative Mobile No</label>
            <div class="col-10">
                <label class="form-control" type="text" pattern="[0-9]{11}" id="altermobile" name="altermobile" ><?php echo $data['student'][0]['alternative_mobile']?></label>
            </div>
        </div>

        <div class="col-12 form-group row">
            <label for="fathermobile" class="col-2 col-form-label">Father's Mobile No</label>
            <div class="col-10">
                <label class="form-control" type="text" pattern="[0-9]{11}" id="fathermobile" name="fathermobile" ><?php echo $data['student'][0]['father_mobile']?></label>
            </div>
        </div>

        <div class="col-12 form-group row">
        <h4>SSC/O-Level Result</h4>
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
	                    <td>SSC/O-Level</td>
	                    <td>
                            <select class="form-control" name="sscboard" id="sscboard" title="SSC Board" disabled="disabled">
                                <?php foreach ($data['board'] as $k => $v){?>
                                    <option value="<?php $v['id']?>"><?php $v['name']?></option>
                                <?php }?>
                            </select>
                        </td>
	                    <td>
                            <input class="form-control" type="text" id="sscyear" name="sscyear" disabled="disabled">
                        </td>
	                    <td>
                            <input class="form-control" type="text" id="sscregno" name="sscregno" disabled="disabled">
                        </td>
	                    <td>
                            <input class="form-control" type="text" id="sscrollno" name="sscrollno" disabled="disabled">
                        </td>
	                    <td>
                            <input class="form-control" type="text" id="sscgpa" name="sscgpa"  disabled="disabled">
                        </td>
						<td><a href="#" data-toggle="modal" data-target="#dataModal">Edit</a></td>
	                </tr>
                </tbody>
            </table>
            <div class="col-12 form-group row" id="ssc_resultShow">
            <h4>SSC/A-level Marks</h4>
            	<table class="table table-light table-responsive">
                <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Grade</th>
                    <th>Marks</th>
                </tr>
                </thead>
                <tbody>
	                <tr>
	                    <td><label class="form-control" type="text"  id="ssc_subjectcode" name="subjectcode">hflkdhfkl</label></td>
	                    <td><label class="form-control" type="text" id="ssc_subjectname" name="subjectname">dhfkjsdhfl</label></td>
	                    <td><label class="form-control" type="number" id="ssc_grade" name="ssc_grade" >shdfjdslabel></td>
	                    <td><label class="form-control" type="number" id="ssc_marks" name="ssc_marks">hdlkhf</label></td>
	                </tr>
                </tbody>
            </table>
            </div>
            <table class="table table-light table-responsive">
            <h4>HSC/O-level Result</h4>
                <thead>
                <tr>
                    <th></th>
                    <th>Board</th>
                    <th>Year</th>
                    <th>Registration Number</th>
                    <th>Roll Number</th>
                    <th>GPA</th>
                    <th>Edit</th>
                </tr>
                </thead>
            	<tbody>
	                <tr>
	                    <td>HSC</td>
	                    <td><label class="form-control" type="text"  id="hscyear" name="hscyear">gdsashgf</label></td>
	                    <td><label class="form-control" type="text"  id="hscyear" name="hscyear" >bvkdcv</label></td>
	                    <td><label class="form-control" type="text"  id="hscregno" name="hscregno" >dmnbvc</label></td>
	                    <td><label class="form-control" type="text"  id="hscrollno" name="hscrollno" >dxgbckj</label></td>
	                    <td><label class="form-control" type="text"  id="hscgpa" name="hscgpa">gfkjdsgbfkj</label></td>
						<td><a href="#" data-toggle="modal" data-target="#dataModal">Edit</a></td>
	                </tr>
                </tbody>
            </table>
            <div class="col-12 form-group row" id="hsc_resultShow">
            <h4>HSC/O-level Marks</h4>
            	<table class="table table-light table-responsive">
                <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Grade</th>
                    <th>Marks</th>
                </tr>
                </thead>
                <tbody>
	                <tr>
	                    <td><label class="form-control" type="text"  id="ssc_subjectcode" name="subjectcode">hflkdhfkl</label></td>
	                    <td><label class="form-control" type="text" id="ssc_subjectname" name="subjectname">dhfkjsdhfl</label></td>
	                    <td><label class="form-control" type="number" id="ssc_grade" name="ssc_grade" >shdfjdslabel></td>
	                    <td><label class="form-control" type="number" id="ssc_marks" name="ssc_marks">hdlkhf</label></td>
	                </tr>
                </tbody>
            </table>
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
                            <label for="password_name" id="lbl_password">Current Password</label>
                            <input autofocus="autofocus" type="password" class="form-control" va/>
                            <br />
                        </div>
    					<div class="modal-body">
                            <label for="password_name" id="lbl_password">New Password</label>
                            <input autofocus="autofocus" type="password" class="form-control" va/>
                            <br />
                        </div>
    					<div class="modal-body">
                            <label for="password_name" id="lbl_password">Confirm Password</label>
                            <input autofocus="autofocus" type="password" class="form-control" va/>
                            <br />
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="password_id" id="password_id" />
                            <input type="submit" class="btn btn-outline-info" />
                        </div>
                    </div>
                </form>
            </div>
         </div>
    </div>
</div>
