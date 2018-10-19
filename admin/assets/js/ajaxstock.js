$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"http://localhost/admin_dashboard/admin/stockViewCon.php",
            method:"POST",
            success:function(data){
                $('#live_data').html(data);
            }
        });
    }
    fetch_data();

    function edit_data(id, text, column_name)
    {
        $.ajax({
            url:"http://localhost/admin_dashboard/controller/stockEditController.php",
            method:"POST",
            data:{id:id, text:text, column_name:column_name},
            dataType:"text",
            success:function(data){
                alert(data);
            }
        });
    }


    $(document).on('blur', '#first_name', function(){
        var id = $(this).data("id1");
        var first_name = $(this).text();
        if(confirm("are you sure you want to update?")){
            edit_data(id,first_name,'name')
        }
        else {fetch_data();}

    });
    $(document).on('blur', '#quantity', function(){
        var id = $(this).data("id1");
        var quantity = $(this).text();
        if(confirm("are you sure you want to update?")){
            edit_data(id,quantity,'quantity')
        }
        else {fetch_data();}
    });
    $(document).on('blur', '#currentq', function(){
        var id = $(this).data("id1");
        var quantity = $(this).text();
        if(confirm("are you sure  you want to update?")){
            edit_data(id,quantity,'currentq')
        }
        else {fetch_data();}
    });
    $(document).on('blur', '#brand', function(){
        var id = $(this).data("id1");
        var brand = $(this).text();
        if(confirm("are you sure you want to update?")){
            edit_data(id,brand,'brand')
        }
        else {fetch_data();}
    });
    $(document).on('blur', '#price', function(){
        var id = $(this).data("id1");
        var price = $(this).text();
        if(confirm("are you sure you want to update?")){
            edit_data(id,price,'price')
        }
        else {fetch_data();}
    });
    $(document).on('blur', '#preOrderl', function(){
        var id = $(this).data("id1");
        var pol = $(this).text();
        if(confirm("are you sure  you want to update?")){
            edit_data(id,pol,'preOrderl')
        }
        else {fetch_data();}
    });






    $(document).on('click', '#btn_back', function(){
        var first_name = $('#name').text();
        var id=$(this).data("id1");
        alert(first_name);


    });



});