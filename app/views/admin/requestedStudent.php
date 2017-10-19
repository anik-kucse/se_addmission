<div class="col">
    <h1 style="text-align: center">Student Request</h1>
    <div class="table-responsive">
        <br />
        <table id="board_data" class="table">
            <thead>
                <tr>
                    <th >Student Name</th>
                    <th >University Name</th>
                    <th >Unit Name</th>
                    <th >Form Serial Number</th>
                    <th >Form Price</th>
                </tr>
            </thead>
                <td>jasghfkljd</td>
                <td>kljd</td>
                <td>jd</td>
                <td>122</td>
                <td>700</td>
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
