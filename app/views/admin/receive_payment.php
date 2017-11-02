<div class="col-9">
    <h1 style="text-align: center">Receive Payment</h1>
    <br>
    <div class="row justify-content-around">
        <form action="<?php echo BASE_URL?>/ReceivePayment/main" method="post" class="row justify-content-around">
            <div class="col-8 form-group row">
                <label class="col-4 col-form-label">Form Number</label>
                <input class="col-8 form-control" type="text" name="form_number">
            </div><br>
            <div class="col-8 form-group row">
                <label class = "col-4 col-form-label">Amount</label>
                <input class="col-8 form-control" type="number" name="amount">
            </div><br>
            <div class="col-8 form-group row">
                <label class="col-4 col-form-label">Special</label>
                <input class="col-8 form-control" type="checkbox" value="1" name="is_special">
            </div><br>
            <div class="col-8 form-group">
                <input type="submit" value="Take" class="btn btn-outline-dark ">
            </div>
        </form>
    </div>
    <table id="table" width=100%>
        <thead>
            <tr>
                <th>Date</th>
                <th>Form Number</th>
                <th>University(Unit)</th>
                <th>Name</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Due</th>
                <th>Receive By</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($data['table'] as $key => $value){?>
            <tr>
                <td><?php echo $value['modified_at']?></td>
                <td><?php echo $value['serial_number']?></td>
                <td><?php echo $value['name'].'('.$value['unit_name'].')'?></td>
                <td><?php echo $value['full_name']?></td>
                <td><?php echo $value['total']?></td>
                <td><?php echo $value['amount']?></td>
                <td><?php echo $value['due']?></td>
                <td><?php
                    foreach ($data['user'] as $k => $v){
                        if($value['modified_by'] == $v['id']){
                            echo $v['full_name'].' ('.$v['user_role'].')';
                        }
                    }
                    ?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#table').DataTable({
            "order": [[ 0, "desc" ]]
        });

    });
</script>
