<div class="container">
    <h1 style="text-align: center"> All University Unit Detail</h1>
    <br>
     <div class="table-responsive">
        <br />
        <table id="board_data" class="table">
            <thead>
                <tr>
                    <th >University Name</th>
                    <th >Unit Name</th>
                    <th >Starting Date</th>
                    <th >End Date</th>
                    <th >Detail</th>
                    <th >Apply</th>
                </tr>
            </thead>
                <tr>
                    <td>fdhgihf</td>
                    <td>cghh</td>
                    <td>dhfiu</td>
                    <td>hgiu</td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0" type="submit">More</button></td>
                    <td><button class="btn btn-outline-info my-2 my-sm-0" type="submit">Apply</button></td>
                </tr>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#board_data').DataTable({
            "columnDefs":[
                {
                    "targets":[3, 4],
                    "orderable":false,
                }
            ]
        });
     });
</script>
