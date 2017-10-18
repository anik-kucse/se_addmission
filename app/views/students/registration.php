<<<<<<< HEAD
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/site.css">
    <title>Registration</title>
    <script src="http://localhost/se_addmission/vendors/js/jquery-3.2.1.slim.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/popper.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/bootstrap.min.js" charset="utf-8"></script>

    <style>
        th {
            text-align: center;
        }
    </style>
<body>
<div class="container-fluid">
    <h1 style="text-align: center">Registration</h1>
    <form action="#" method="post" class="row justify-content-around" style="padding-top: 10px">

        <div class="col-8 form-group row">
            <label for="regfullname" class="col-2 col-form-label">Full Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="regfullname">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="regusername" class="col-2 col-form-label">Username</label>
            <div class="col-10">
                <input class="form-control" type="text" id="regusername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="regpassword" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" type="password" id="regpassword">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="fathername" class="col-2 col-form-label">Father's Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="fathername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="mothername" class="col-2 col-form-label">Mother's Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="mothername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <span><b>Present Address</b></span>
        </div>

        <div class="col-8 form-group row">
            <label for="streetvillage" class="col-2 col-form-label">Street/Village</label>
            <div class="col-10">
                <input class="form-control" type="text" id="streetvillage">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="postcode" class="col-2 col-form-label">Post Code</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{4}" id="postcode">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="upozillathana" class="col-2 col-form-label">Upazilla/Thana</label>
            <div class="col-10">
                <input class="form-control" type="text" id="upozillathana">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="districr" class="col-2 col-form-label">District</label>
            <div class="col-10">
                <input class="form-control" type="text" id="districr">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="division" class="col-2 col-form-label">Division</label>
            <div class="col-10">
                <input class="form-control" type="text" id="division">
            </div>
        </div>

        <div class="col-8 form-group row">
            <span><b>Permanent Address</b></span>

        </div>

        <div class="col-8 form-group row">
            <label for="perstreetvillage" class="col-2 col-form-label">Street/Village</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perstreetvillage">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="postcode" class="col-2 col-form-label">Post Code</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{4}" id="postcode">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="perupozillathana" class="col-2 col-form-label">Upazilla/Thana</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perupozillathana">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="perdistricr" class="col-2 col-form-label">District</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perdistricr">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="perdivision" class="col-2 col-form-label">Division</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perdivision">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="gender" class="col-2 col-form-label">Gender</label>
            <div class="col-10" >
                <select class="form-control" name="" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="Username" class="col-2 col-form-label">Username</label>
            <div class="col-10">
                <input class="form-control" type="text" id="regusername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="mobile" class="col-2 col-form-label">Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="mobile">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="altermobile" class="col-2 col-form-label">Alternative Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="altermobile">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="fathermobile" class="col-2 col-form-label">Father's Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="fathermobile">
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
                    <th>CGPA</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SSC</td>
                    <td>
                        <select class="form-control" name="sscboard" id="sscboard" title="SSC Board">
                            <option value="">Dhaka</option>
                            <option value="">Jessore</option>
                        </select>
                    </td>
                    <td><input class="form-control" type="text" pattern="[0-9]{4}" id="sscyear" placeholder="SSC Year"></td>
                    <td><input class="form-control" type="number" id="sscregno" placeholder="SSS Registration No"></td>
                    <td><input class="form-control" type="number" id="sscrollno" placeholder="SSC Roll No"></td>
                    <td><input class="form-control" type="text" pattern="[0-9,.]" id="sscgpa" placeholder="SSC GPA"></td>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td><select class="form-control" name="hscboard" id="hscboard" title="HSC Board">

                            <option value="">Dhaka</option>
                            <option value="">Jessore</option>
                        </select></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscyear" placeholder="HSC Year"></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscregno" placeholder="HSC Registration No"></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscrollno" placeholder="HSC Roll No"></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscgpa" placeholder="HSC GPA"></td>
                </tr>
                </tbody>
            </table>
        </div>





        <div class="col-8 justify-content-around form-group row">
            <button class="btn btn-outline-info" type="submit">Submit</button>
        </div>


    </form>


</div>
</body>
=======
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/se_addmission/vendors/css/site.css">
    <title>Registration</title>
    <script src="http://localhost/se_addmission/vendors/js/jquery-3.2.1.slim.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/popper.min.js" charset="utf-8"></script>
    <script src="http://localhost/se_addmission/vendors/js/bootstrap.min.js" charset="utf-8"></script>

    <style>
        th {
            text-align: center;
        }
    </style>
<body>
<div class="container-fluid">
    <h1 style="text-align: center">Registration</h1>
    <form action="#" method="post" class="row justify-content-around" style="padding-top: 10px">

        <div class="col-8 form-group row">
            <label for="regfullname" class="col-2 col-form-label">Full Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="regfullname">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="regusername" class="col-2 col-form-label">Username</label>
            <div class="col-10">
                <input class="form-control" type="text" id="regusername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="regpassword" class="col-2 col-form-label">Password</label>
            <div class="col-10">
                <input class="form-control" type="password" id="regpassword">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="fathername" class="col-2 col-form-label">Father's Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="fathername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="mothername" class="col-2 col-form-label">Mother's Name</label>
            <div class="col-10">
                <input class="form-control" type="text" id="mothername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <span><b>Present Address</b></span>
        </div>

        <div class="col-8 form-group row">
            <label for="streetvillage" class="col-2 col-form-label">Street/Village</label>
            <div class="col-10">
                <input class="form-control" type="text" id="streetvillage">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="postcode" class="col-2 col-form-label">Post Code</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{4}" id="postcode">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="upozillathana" class="col-2 col-form-label">Upazilla/Thana</label>
            <div class="col-10">
                <input class="form-control" type="text" id="upozillathana">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="districr" class="col-2 col-form-label">District</label>
            <div class="col-10">
                <input class="form-control" type="text" id="districr">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="division" class="col-2 col-form-label">Division</label>
            <div class="col-10">
                <input class="form-control" type="text" id="division">
            </div>
        </div>

        <div class="col-8 form-group row">
            <span><b>Permanent Address</b></span>

        </div>

        <div class="col-8 form-group row">
            <label for="perstreetvillage" class="col-2 col-form-label">Street/Village</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perstreetvillage">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="postcode" class="col-2 col-form-label">Post Code</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{4}" id="postcode">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="perupozillathana" class="col-2 col-form-label">Upazilla/Thana</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perupozillathana">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="perdistricr" class="col-2 col-form-label">District</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perdistricr">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="perdivision" class="col-2 col-form-label">Division</label>
            <div class="col-10">
                <input class="form-control" type="text" id="perdivision">
            </div>
        </div>


        <div class="col-8 form-group row">
            <label for="gender" class="col-2 col-form-label">Gender</label>
            <div class="col-10" >
                <select class="form-control" name="" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>

                </select>
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="Username" class="col-2 col-form-label">Username</label>
            <div class="col-10">
                <input class="form-control" type="text" id="regusername">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="mobile" class="col-2 col-form-label">Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="mobile">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="altermobile" class="col-2 col-form-label">Alternative Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="altermobile">
            </div>
        </div>

        <div class="col-8 form-group row">
            <label for="fathermobile" class="col-2 col-form-label">Father's Mobile No</label>
            <div class="col-10">
                <input class="form-control" type="text" pattern="[0-9]{11}" id="fathermobile">
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
                    <th>CGPA</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>SSC</td>
                    <td>
                        <select class="form-control" name="sscboard" id="sscboard" title="SSC Board">
                            <option value="">Dhaka</option>
                            <option value="">Jessore</option>
                        </select>
                    </td>
                    <td><input class="form-control" type="text" pattern="[0-9]{4}" id="sscyear" placeholder="SSC Year"></td>
                    <td><input class="form-control" type="number" id="sscregno" placeholder="SSS Registration No"></td>
                    <td><input class="form-control" type="number" id="sscrollno" placeholder="SSC Roll No"></td>
                    <td><input class="form-control" type="text" pattern="[0-9,.]" id="sscgpa" placeholder="SSC GPA"></td>
                </tr>
                <tr>
                    <td>HSC</td>
                    <td><select class="form-control" name="hscboard" id="hscboard" title="HSC Board">

                            <option value="">Dhaka</option>
                            <option value="">Jessore</option>
                        </select></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscyear" placeholder="HSC Year"></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscregno" placeholder="HSC Registration No"></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscrollno" placeholder="HSC Roll No"></td>
                    <td><input class="form-control" type="text" pattern="[0-9]" id="hscgpa" placeholder="HSC GPA"></td>
                </tr>
                </tbody>
            </table>
        </div>





        <div class="col-8 justify-content-around form-group row">
            <button class="btn btn-outline-info" type="submit">Submit</button>
        </div>


    </form>


</div>
</body>
>>>>>>> AccountUnit
</html>