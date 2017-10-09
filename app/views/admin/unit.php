<div class="col-9">

    <nav class="navbar nav2">
        <form class="form-inline">
            <span style="padding-right: 5px">Search by</span>
            <select class="form-control btnsearchby" id="unitsearch">
                <option value="optunit">Unit</option>
                <option value="optuni">University</option>
                <option value="optsession">Session</option>
                <option value="optstarttime">Starting Time</option>
                <option value="optendtime">Ending time</option>
                <option value="optselectiontime">Selection time</option>
                <option value="optexamtime">Exam time</option>
                <option value="optformcost">Form cost</option>
                <option value="optservicecharge">Service charge</option>
                <option value="optdetail">Detail</option>
                <option value="optmodifiedby">Modified by</option>
                <option value="optmodifiedat">Modified at</option>

            </select>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div class="" style="overflow-y:auto">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Unit name</th>
                <th>University</th>
                <th>Session</th>
                <th>Starting time</th>
                <th>Ending time</th>
                <th>Selection time</th>
                <th>Exam time</th>
                <th>Form price</th>
                <th>Service charge</th>
                <th>Details</th>
                <th>Modified by</th>
                <th>Modified at</th>
                <th></th>
                <th></th>

            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>asdasd</td>
                    <td>asd</td>
                    <td>aqwe</td>
                    <td>fksdjfjf</td>
                    <td>23427948</td>
                    <td>asdasd</td>
                    <td>asdasd</td>
                    <td>asdasd</td>
                    <td>asdasd</td>
                    <td>asdasd</td>
                    <td>asd</td>
                    <td>asdasd</td>
                    <td>
                        <button type="button" class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal"
                                data-target="#update" data-whatever="@mdo">Update
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal"
                                data-target="#delete" data-whatever="@mdo">Delete
                        </button>
                    </td>

                </tr>
            </tbody>
        </table>

        <div class="col crtbtn">
            <button type="button" name="btncreateuni" class="btn btn-outline-dark my-2 my-sm-0 crtbtn"
                    data-toggle="modal" data-target="#create" data-whatever="@mdo">Create new
            </button>
        </div>


        <!--                modals start-->
        <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="update"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="update">Update </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="Unit" class="form-control-label">Unit</label>
                                <input type="text" class="form-control" id="unit">
                            </div>
                            <div class="form-group">
                                <label for="UniversityName" class="form-control-label">University Name</label>
                                <input type="text" class="form-control" id="uniname">
                            </div>
                            <div class="form-group">
                                <label for="Session" class="form-control-label">Session</label>
                                <input type="text" class="form-control" id="session">
                            </div>
                            <div class="form-group">
                                <label for="StartingTime" class="form-control-label">Starting time</label>
                                <input type="text" class="form-control" id="startingtime">
                            </div>
                            <div class="form-group">
                                <label for="EndingTime" class="form-control-label">Ending time</label>
                                <input type="text" class="form-control" id="endingtime">
                            </div>
                            <div class="form-group">
                                <label for="SelectionTime" class="form-control-label">Selection time</label>
                                <input type="text" class="form-control" id="selectiontime">
                            </div>
                            <div class="form-group">
                                <label for="ExamTime" class="form-control-label">Exam time</label>
                                <input type="text" class="form-control" id="examtime">
                            </div>
                            <div class="form-group">
                                <label for="FormPrice" class="form-control-label">Form price</label>
                                <input type="text" class="form-control" id="formprice">
                            </div>
                            <div class="form-group">
                                <label for="ServiceCharge" class="form-control-label">Service charge</label>
                                <input type="text" class="form-control" id="servicecharge">
                            </div>
                            <div class="form-group">
                                <label for="Details" class="form-control-label">Details</label>
                                <input type="text" class="form-control" id="details">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="update"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delete">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger">Yes</button>
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create">Create </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="Unit" class="form-control-label">Unit</label>
                                <input type="text" class="form-control" id="crtunit">
                            </div>
                            <div class="form-group">
                                <label for="UniversityName" class="form-control-label">University Name</label>
                                <input type="text" class="form-control" id="crtuniname">
                            </div>
                            <div class="form-group">
                                <label for="Session" class="form-control-label">Session</label>
                                <input type="text" class="form-control" id="crtsession">
                            </div>
                            <div class="form-group">
                                <label for="StartingTime" class="form-control-label">Starting time</label>
                                <input type="text" class="form-control" id="crtstartingtime">
                            </div>
                            <div class="form-group">
                                <label for="EndingTime" class="form-control-label">Ending time</label>
                                <input type="text" class="form-control" id="crtendingtime">
                            </div>
                            <div class="form-group">
                                <label for="SelectionTime" class="form-control-label">Selection time</label>
                                <input type="text" class="form-control" id="crtselectiontime">
                            </div>
                            <div class="form-group">
                                <label for="ExamTime" class="form-control-label">Exam time</label>
                                <input type="text" class="form-control" id="crtexamtime">
                            </div>
                            <div class="form-group">
                                <label for="FormPrice" class="form-control-label">Form price</label>
                                <input type="text" class="form-control" id="crtformprice">
                            </div>
                            <div class="form-group">
                                <label for="ServiceCharge" class="form-control-label">Service charge</label>
                                <input type="text" class="form-control" id="crtservicecharge">
                            </div>
                            <div class="form-group">
                                <label for="Details" class="form-control-label">Details</label>
                                <input type="text" class="form-control" id="crtdetails">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!--                modals end-->


    </div>


</div>
