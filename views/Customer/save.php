<input align="center" class="btn btn-primary mt-3" type="submit" name="submitAppointment" value="Save">

<?php
if(isset($_POST["submitAppointment"]))
{
    $result = addAppointment($_SESSION["id"]);


    if($result)
    {
        /*echo $_POST["service"];
        var_dump($_POST["service"][0]);*/
        echo "<script type='text/javascript'>
                //alert('Record updated successfully');
                swal({
                    title:'Appointment saved Successfully',
                    icon:'success',
                    });
                setTimeout(function(){
                    window.location.href = window.location.href;
                    },1500)
                    </script>";
    }
    else
    {
        echo $result." "."123";
        echo "<script type='text/javascript'>
                //alert($result)
                swal({
                    title:'Something Wrong',
                    icon:'error',
                    });
                </script>";
    }
}
?>