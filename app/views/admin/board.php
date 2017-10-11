<div class="col">
    <div class="table-responsive">
        <br />
        <div>
            <button type="button" id="add_button" data-toggle="modal" data-target="#dataModal" class="btn btn-outline-info my-2 my-sm-0">Add</button>
        </div>
        <br />
         <table id="board_data" class="table display">
             <thead>
                 <tr>
                     <th >Board Name</th>
                     <th >Modified by</th>
                     <th >Modified At</th>
                     <th >Edit</th>
                     <th >Delete</th>
                 </tr>
             </thead>
             <tbody>
             <?php foreach ($data['list'] as $key => $value){?>
                 <tr>
                     <td id="<?php echo $value['id']?>"  ><?php echo $value['name']?></td>
                     <td><?php echo $value['modified_by']?></td>
                     <td><?php echo $value['modified_at']?></td>
                     <td>
                         <button type="button" name="update" id="btnUpdate" value="<?php echo $value['id']?>" class="btn btn-outline-info my-2 my-sm-0">Update</button>
                     </td>
                     <td>
                         <button type="button" name="delate" id="btnDelate" value="<?php echo $value['id']?>" class="btn btn-outline-danger my-2 my-sm-0">Delete</button>
                     </td>
                 </tr>
             <?php }?>
             </tbody>
         </table>
    </div>
    <div id="dataModal" class="modal fade">
        <div class="modal-dialog">
             <form method="post" id="data_form" enctype="multipart/form-data">
                 <div class="modal-content">
                     <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                         <h4 class="modal-title">Add Board</h4>
                     </div>
                     <div class="modal-body">
                         <label for="board_name">Enter Board Name</label>
                         <input type="text" name="board_name" id="board_name" class="form-control" />
                         <br />
                     </div>
                     <div class="modal-footer">
                         <input type="hidden" name="board_id" id="board_id" />
                         <input type="hidden" name="operation" id="operation" />
                         <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                 </div>
             </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#add_button').click(function () {
            $('#data_form')[0].value = "";
            $('#data_form').attr('action','http://localhost/se_addmission/Board/addNew');
            $('.modal-title').text("Add Board");
            $('#action').val("Add");
            $('#operation').val("Add");
        });

        $('#board_data').DataTable({
            "columnDefs":[
                {
                    "targets":[3, 4],
                    "orderable":false,
                }
            ]
        });

//        $('#board_data > tbody  > tr').each(function() {
//            $('#btnUpdate').click(function () {
//                var board_id = $(this).val();
//                var board_name = $(board_id).text();
//
//                console.log(board_id);
//                console.log(board_name);
//
//                $('#dataModal').modal('show');
//                $('#board_id').val(board_id);
//                $('#data_form').attr('action','http://localhost/se_addmission/Board/update');
//                $('.modal-title').text("Update Board");
//                $('#action').val("Add");
//                $('#operation').val("Add");
//            });
//        });

        var rows = $('#board_data tbody tr');
        rows.each(function(){
            var board_id = $(this).val();
            console.log(board_id); //Here this refers current row
        });

//        $(document).on('click','update', function () {
//           var board_id = $(this).val("id");
//           $.ajax({
//               url:"fetch_single.php",
//               method:"POST",
//               data:{board_id:board_id},
//               dataType:"json",
//               success:function(data){
//                   $('#dataModal').modal('show');
//                   $('#board_name').val(data.name);
//                   $('.modal-title').text("Edit Board Name");
//                   $('#board_id').val(board_id);
//                   $('#action').val("Edit");
//                   $('#operation').val("Edit");
//               }
//           });
//        });

//        $(document).on('submit', '#board_form', function (event) {
//            event.preventDefault();
//            var boardName = $('#board_name').val();
//            if(boardName !== ''){
//                $.ajax({
//                    url:"insert.php",
//                    method:'POST',
//                    data:new FormData(this),
//                    contentType:false,
//                    processData:false,
//                    success:function (data) {
//                        alert(data);
//                        $('#data_form')[0].val='';
//                        $('#dataModal').modal.hide();
//                        dataTable.ajax.reload();
//                    }
//                });
//            }else{
//                alert("Name Filed required");
//            }
//        });
//
//        $(document).on('click','update', function () {
//           var board_id = $(this).attr("id");
//           $.ajax({
//               url:"fetch_single.php",
//               method:"POST",
//               data:{board_id:board_id},
//               dataType:"json",
//               success:function(data){
//                   $('#dataModal').modal('show');
//                   $('#board_name').val(data.name);
//                   $('.modal-title').text("Edit Board Name");
//                   $('#board_id').val(board_id);
//                   $('#action').val("Edit");
//                   $('#operation').val("Edit");
//               }
//           });
//        });
//
//         $(document).on('click', '.delete', function(){
//             var board_id = $(this).attr("id");
//             if(confirm("Are you sure you want to delete this?"))
//             {
//                 $.ajax({
//                     url:"delete.php",
//                     method:"POST",
//                     data:{board_id:board_id},
//                     success:function(data)
//                     {
//                         alert(data);
//                         dataTable.ajax.reload();
//                     }
//                 });
//             } else
//             {
//                 return false;
//             }
//         });

     });
</script>