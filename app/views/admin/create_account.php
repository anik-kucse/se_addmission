<div class="container">
    <h1 style="text-align: center">Create Account for Manager/Data Entry</h1>
    <form action="<?php echo BASE_URL?>/CreateAccount/main" method="post">
        <div class="">
            <?php if($data['user_error'] == true){?>
                <label class="text-danger">Username already exist</label>
                <br>
            <?php }?>
            <?php if($data['pass_error'] == true){?>
                <label class="text-danger">Password mismatched</label>
                <br>
            <?php }?>
            <?php if($data['success'] == true){?>
                <label class="text-success">Account creation Complete</label>
                <br>
            <?php }?>
            <label for="">Full Name: </label>
            <input type="text" name="name" required>
            <br>
            <label for="">Username: </label>
            <input type="text" name="user_name" required>
            <br>
            <label for="">Password: </label>
            <input type="password" name="pass" required>
            <br>
            <label for="">Confirm password: </label>
            <input type="password" name="con_pass" required>
            <br>
            <label for="">Select Role: </label>
            <select name="role" id="role">
                <option value="manager">Manager</option>
                <option value="data_entry">Data Entry</option>
            </select>
            <br>
            <input type="submit" name="create" value="create" class="btn btn-outline-dark">
        </div>
    </form>
</div>