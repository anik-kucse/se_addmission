<div class="col">
    <h1 style="text-align: center">Receive Payment</h1>
    <div class="">
        <form action="<?php echo BASE_URL?>/ReceivePayment/main" method="post">
            <label>Form Number</label>
            <input type="text" name="form_number">
            <br>
            <label>Amount</label>
            <input type="number" name="amount">
            <br>
            <label>Special</label>
            <input type="checkbox" value="1" name="is_special">
            <br>
            <input type="submit" value="Take" class="btn btn-outline-dark">
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
