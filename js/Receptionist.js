function itemQuantity(id)
{
    element = document.getElementById(id);
    quantity = element.value;
    var obj = new XMLHttpRequest();

        console.log(obj.readyState+" "+obj.status);


            console.log(quantity+"+"+id+"+"+element.value);

            obj.open("POST","../controller/Stockdetails.php",true);
            obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            if(obj.send("Id="+id+"&q="+quantity+"&number=1"))
            {
                console.log("kkk");

            }
            //console.log(JSON.parse(obj.responseText));


}


var obj = new XMLHttpRequest();

function stockRequest()
{
    obj.onreadystatechange = stockResponse;
    obj.open('POST','../controller/Stockdetails.php',true);
    obj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    obj.send("number=2");
}

function stockResponse() {

    if(obj.readyState==4)
    {
        if(obj.status==200)
        {
            console.log(213);
            var result = JSON.parse(obj.responseText);
            console.log("***"+obj.responseText);
            var i=0;
            var rows = result.length;
            for(i=0;i<rows;i++)
            {
                input = document.getElementById(result[i].id);
                input.setAttribute('value',result[i].quantity);
            }
        }
    }
}