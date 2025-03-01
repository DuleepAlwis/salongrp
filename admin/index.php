<html>
<head>
    <title>Live Table Data Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    <br />
    <br />
    <div class="table-responsive">
        <h3 align="center">Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</h3><br />
        <div id="live_data"></div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        function fetch_data()
        {
            $.ajax({
                url:"select.php",
                method:"POST",
                success:function(data){
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click', '#btn_add', function(){
            var first_name = $('#first_name').text();
            var last_name = $('#last_name').text();
            if(first_name == '')
            {
                alert("Enter First Name");
                return false;
            }
            if(last_name == '')
            {
                alert("Enter Last Name");
                return false;
            }
            $.ajax({
                url:"insert.php",
                method:"POST",
                data:{first_name:first_name, last_name:last_name},
                dataType:"text",
                success:function(data)
                {
                    alert(data);
                    fetch_data();
                }
            })
        });
        function edit_data(id, text, column_name)
        {
            $.ajax({
                url:"edit.php",
                method:"POST",
                data:{id:id, text:text, column_name:column_name},
                dataType:"text",
                success:function(data){
                    alert(data);
                }
            });
        }
        $(document).on('blur', '.first_name', function(){
            var id = $(this).data("id1");
            var first_name = $(this).text();
            alert("jj");
        });
        $(document).on('blur', '.last_name', function(){
            var id = $(this).data("id2");
            var last_name = $(this).text();
            edit_data(id,last_name, "lname");
        });
        $(document).on('click', '.btn_delete', function(){
            var id=$(this).data("id3");
            if(confirm(id))
            {
                $.ajax({
                    url:"delete.php",
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
</script>