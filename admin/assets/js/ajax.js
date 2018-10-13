$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"http://localhost/admin_dashboard/admin/adminEmpViewCon.php",
            method:"POST",
            success:function(data){
                $('#live_data').html(data);
            }
        });
    }
    fetch_data();

    $(document).on('click', '#btn_add', function(){
        var id=$(this).data("id4");


            $.ajax({

                url:"http://localhost/admin_dashboard/admin/adminEmpViewAppCon.php",
                method:"POST",
                data:{id:id},
                dataType:"text",
                success:function(data){
                    $('#live_data').html(data);

                }
            });




    });
    $(document).on('click', '#btn_back', function(){
        fetch_data();

    });
    $(document).on('click', '.btn_delete', function(){
        var id=$(this).data("id3");
        if(confirm("Are you sure you want to delete ?"))
        {
            $.ajax({

                url:"http://localhost/admin_dashboard/controller/EmployeeDeleteController.php",
                method:"POST",
                data:{id:id},
                dataType:"text",
                success:function(data){
                    alert(data);
                    fetch_data();
                }
            });
        }
    });


});