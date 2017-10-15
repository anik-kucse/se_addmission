<div class="container">
    <h1 style="text-align: center">Account Manage</h1>
    <form class="row justify-content-around" style="padding-top: 10px">

        <div class="col-12 row">
	        <div class="col-6 from-control row">
	        	<label for="fullname" class="col-4 col-form-label">Full Name</label>
	            <div class="col-8">
	                <label class="form-control" type="text" id="fullname" name="fullname" >dfsgkjdsbfkj</label>
	            </div>
	        </div>
	        <div class="col-6 from-control row">
	        	 <label for="username" class="col-4 col-form-label">Username</label>
	            <div class="col-8">
	                <label class="form-control" type="text" id="username" name="username" >jsdfgkjdsgfkj</label>
	            </div>
	        </div>    
        </div>

        <div class="col-12 row">
            <div class="col-6 form-group row">
	            <label for="fathername" class="col-4 col-form-label">Father's Name</label>
	            <div class="col-8">
	                <label class="form-control" type="text" id="fathername" name="fathername" >jhdgfjds</label>
	            </div>
	        </div>
	        <div class="col-6 from-control row">
	        	<label for="mothername" class="col-4 col-form-label">Mother's Name</label>
            	<div class="col-8">
                	<label class="form-control" type="text" id="mothername" name="mothername" >fhdkfhdsjkh</label>
           		</div>
	        </div>
        </div>

        <div class="col-12 form-group row">
        	<div class="col-2">
        		<span><b>Present Address</b></span>
        	</div>
        	<div class="col-10">
        		<textarea class="form-control" >savdjhvsajfdjgsdsjfhgdshg</textarea>
        	</div>   
        </div>
        <br>
        <div class="col-12 form-group row">
        	<div class="col-2">
        		<span><b>Parmanent Address</b></span>
        	</div>
        	<div class="col-10">
        		<textarea class="form-control" >savdjhvsajfdjgsdsjfhgdshg</textarea>
        	</div>   
        </div>
        <br><br>
        <div class="col-12 form-group row">
            <label for="gender" class="col-2 col-form-label">Gender</label>
            <div class="col-10">
				<label class="form-control" type="text" id="perdivision" name="perdivision" >dhfkjgd</label>
            </div>
        </div>
        <br>
        <div class="col-12 form-group row">
            <label for="mobile" class="col-2 col-form-label">Mobile No</label>
            <div class="col-10">
                <label class="form-control" type="text" pattern="[0-9]{11}" id="mobile" name="mobile" >74587</label>
            </div>
        </div>

        <div class="col-12 form-group row">
            <label for="altermobile" class="col-2 col-form-label">Alternative Mobile No</label>
            <div class="col-10">
                <label class="form-control" type="text" pattern="[0-9]{11}" id="altermobile" name="altermobile" >7654</label>
            </div>
        </div>

        <div class="col-12 form-group row">
            <label for="fathermobile" class="col-2 col-form-label">Father's Mobile No</label>
            <div class="col-10">
                <label class="form-control" type="text" pattern="[0-9]{11}" id="fathermobile" name="fathermobile" >7468</label>
            </div>
        </div>

        <div class="col-12 form-group row">
        <h4>SSC Result</h4>
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
					<th></th>
                </tr>
                </thead>
                <tbody>
	                <tr>
	                    <td>SSC</td>
	                    <td><label class="form-control" type="text"  id="sscboard" name="sscboard" >hflkdhfkl</label></td>
	                    <td><label class="form-control" type="text" id="sscyear" name="sscyear" >dhfkjsdhfl</label></td>
	                    <td><label class="form-control" type="number" id="sscregno" name="sscregno" >shdfjdslabel></td>
	                    <td><label class="form-control" type="number" id="sscrollno" name="sscrollno" >hdlkhf</label></td>
	                    <td><label class="form-control" type="text" id="sscgpa" name="sscgpa" >sdjuugfiuedsgu</label></td>
						<td><a href="#" data-toggle="modal" data-target="#dataModal">Edit</a></td>
						<td><a href="#" id="sscresult" >Show</a></td>
	                </tr>
                </tbody>
            </table>
            <div class="col-12 form-group row" id="ssc_resultShow">
            <h4>SSC Marks</h4>
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
            <h4>HSC Result</h4>
            	<tbody>
	                <tr>
	                    <td>HSC</td>
	                    <td><label class="form-control" type="text"  id="hscyear" name="hscyear">gdsashgf</label></td>
	                    <td><label class="form-control" type="text"  id="hscyear" name="hscyear" >bvkdcv</label></td>
	                    <td><label class="form-control" type="text"  id="hscregno" name="hscregno" >dmnbvc</label></td>
	                    <td><label class="form-control" type="text"  id="hscrollno" name="hscrollno" >dxgbckj</label></td>
	                    <td><label class="form-control" type="text"  id="hscgpa" name="hscgpa">gfkjdsgbfkj</label></td>
						<td><a href="#" data-toggle="modal" data-target="#dataModal">Edit</a></td>
						<td><a href="#" >Show</a></td>
	                </tr>
                </tbody>
            </table>
            <div class="col-12 form-group row" id="hsc_resultShow">
            <h4>SSC Marks</h4>
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

		<div id="dataModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="data_form" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><span id="modal_title">Insert Result</span></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12 form-group row">
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
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">Ban-101</option>
							                    <option value="2">Eng-107</option>
							                    <option value="3">Math-128</option>
						                	</select>
					                    </td>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">Bangla</option>
							                    <option value="2">English</option>
							                    <option value="3">Math</option>
						                	</select>
					                    </td>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">A</option>
							                    <option value="2">A+</option>
							                    <option value="3">B</option>
						                	</select>
						                </td>
						                <td>
					                    	<input type="number" class="form-control" name="marks" id="marks">
						                </td>
					                </tr>
					                <tr>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">Ban-101</option>
							                    <option value="2">Eng-107</option>
							                    <option value="3">Math-128</option>
						                	</select>
					                    </td>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">Bangla</option>
							                    <option value="2">English</option>
							                    <option value="3">Math</option>
						                	</select>
					                    </td>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">A</option>
							                    <option value="2">A+</option>
							                    <option value="3">B</option>
						                	</select>
						                </td>
						                <td>
					                    	<input type="number" class="form-control" name="marks" id="marks">
						                </td>
					                </tr>
					                <tr>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">Ban-101</option>
							                    <option value="2">Eng-107</option>
							                    <option value="3">Math-128</option>
						                	</select>
					                    </td>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">Bangla</option>
							                    <option value="2">English</option>
							                    <option value="3">Math</option>
						                	</select>
					                    </td>
					                    <td>
					                    	<select class="form-control" id="grade" name="grade">
							                    <option value="1">A</option>
							                    <option value="2">A+</option>
							                    <option value="3">B</option>
						                	</select>
						                </td>
						                <td>
					                    	<input type="number" class="form-control" name="marks" id="marks">
						                </td>
					                </tr>
				                </tbody>
				            </table>
				        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="result_id" id="result_id" />
                        <input type="submit" name="action" id="action" class="btn btn-outline-info" value="Save" />
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
                            <input type="hidden" name="password_id" id="password_id" />
                            <input type="submit" class="btn btn-outline-info" />
                        </div>
                    </div>
                </form>
            </div>
         </div>
    </form>
</div>
