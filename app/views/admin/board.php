    <div class="col">
        <br>
        <nav class="nav2">

            <form class="form-inline">
                <span style="padding-right: 5px">Search by</span>
                <select class="form-control btnsearchby" name="Search by" id="boardsearch">
                    <option value="all"><a href="#">All</a></option>
                    <option value="opsession"><a href="#">Board</a></option>
                    <option value="optusers"><a href="#">Modified by</a></option>
                    <option value="opttime"><a href="#">Modification time</a></option>
                </select>
                <input class="form-control mr-sm-2 my-2" type="text" placeholder="Search" aria-label="Search" style="margin-left: 10px">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>Board</th>
                        <th>Modified by</th>
                        <th>Modified at</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>a</td>
                        <td>a</td>
                        <td>a</td>
                        <td>
                            <button type="button" class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal"
                                    data-target="#update" data-whatever="@mdo">Update
                            </button>
                            <button type="button" class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal"
                                    data-target="#delete" data-whatever="@mdo">Delete
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

            <div class="col crtbtn">
                <button type="button" name="btncreateuni" class="btn btn-outline-dark my-2 my-sm-0 crtbtn" data-toggle="modal" data-target="#create"  data-whatever="@mdo">Create new</button>
            </div>

            <!--                modals start-->
            <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="update" aria-hidden="true">
                <div class="modal-dialog"  role="document">
                    <div class="modal-content" >
                        <div class="modal-header">
                            <h5 class="modal-title" id="update">Update </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="Board" class="form-control-label">Board</label>
                                    <input type="text" class="form-control" id="board">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="update" aria-hidden="true">
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
                            <button type="button" class="btn btn-outline-info" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
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
                                    <label for="Board" class="form-control-label">Board</label>
                                    <input type="text" class="form-control" id="crtboard">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--                modals end-->

        </div>
    </div>
