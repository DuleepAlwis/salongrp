var ajax = new XMLHttpRequest();
var beautician = [];  //[beauticianid,beauticianName]
var service = []; //[serviceId,serviceName]

//Load Beautician's from the DB
function loadBeautician()
{
    var url = "../../controller/CustomerServer.php";
    ajax.onreadystatechange = beauticianList
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('number=1');
}

function beauticianList()
{
    if(ajax.readyState == 4)
    {
        if(ajax.status == 200)
        {
            var result = JSON.parse(ajax.responseText);

            if(result[0])
            {
                var keys = Object.keys(result[1]);
                var values = Object.values(result[1]);
                var i = 0;
                for(i=0;i<keys.length;i++)
                {
                    beautician.push([keys[i],values[i]]);
                }
                selectBeautician();
            }
        }
    }

}

//Create Select beautician Combo box
function selectBeautician() {

    try {

        var select = document.getElementById("beautician");
        var k = select.length - 1;
        for (k = select.length - 1; k >= 0; k--) {
            select.remove(k);
        }
        /*var option = document.createElement("option");
        option.setAttribute("value", "Any");
        option.innerHTML = "Any";
        option.style.color = "black";
        select.appendChild(option);*/
        var i = 0;
        for (i = 0; i < beautician.length; i++) {
            var option = document.createElement("option");
            option.style.color = "black";
            option.setAttribute("value", beautician[i][0]);
            option.innerHTML = beautician[i][1];
            select.appendChild(option);

        }
    }
    catch (e) {

    }
    loadServices();
}

//======================================================================================================================
//Load Services from the DB

function loadServices()
{
    var url = "../../controller/CustomerServer.php";

    ajax.onreadystatechange = serviceList
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('number=2');
}

function serviceList() {
    if (ajax.readyState == 4) {
        if (ajax.status == 200) {
            var result = JSON.parse(ajax.responseText);
            if (result[0]) {
                var keys = Object.keys(result[1]);
                var values = Object.values(result[1]);
                console.log(keys+" "+values);
                var i = 0;
                for (i = 0; i < keys.length; i++) {
                    service.push([keys[i], values[i][0], values[i][1], values[i][2]]);
                }
                selectService();
            }
        }
    }
}

//Create the services combo box

function selectService()
{

    var select = document.getElementById("service");
    var k = select.length-1;
    for(k=select.length-1;k>=0;k--)
    {
        select.remove(k);
    }
    /*var option = document.createElement("option");
    option.setAttribute("value","Any");
    option.innerHTML = "Any";
    option.style.color = "black";
    select.appendChild(option);*/
    var i = 0;
    for(i=0;i<service.length;i++)
    {
        var option = document.createElement("option");
        option.style.color = "black";
        var servicedetails = service[i][0];//+"&"+service[i][2]+"&"+service[i][3];
        option.setAttribute("value",servicedetails);
        option.innerHTML = service[i][1];
        select.appendChild(option);

    }

}

function removeProduct(id)
{
    var con = confirm("Are you sure you need to remove the product?");
    if(con==true)
    {
        $url = "../../controller/AdminAjax.php";
        ajax.open("POST",$url,true);
        ajax.onreadystatechange = function()
        {
            if(ajax.readyState==4)
            {
                if(ajax.status==200)
                {
                    if(JSON.parse(ajax.responseText)[0])
                    {
                        alert('Record removed successfully');
                        var tr = document.getElementById(id);
                        tr.remove();
                    }
                    else
                    {
                        alert('Record removed unsuccess');

                    }
                }
            }
        }
        ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        ajax.send("number="+1+"&Id="+id);

    }
}

function removeService(id)
{
    var con = confirm("Are you sure you need to remove the product?");
    if(con==true)
    {
        $url = "../../controller/AdminAjax.php";
        ajax.open("POST",$url,true);
        ajax.onreadystatechange = function()
        {
            if(ajax.readyState==4)
            {
                if(ajax.status==200)
                {
                    if(JSON.parse(ajax.responseText)[0])
                    {
                        alert('Record removed successfully');
                        var tr = document.getElementById(id);
                        tr.remove();
                    }
                    else
                    {
                        alert('Record removed unsuccess');

                    }
                }
            }
        }
        ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        ajax.send("number="+2+"&Id="+id);

    }
}


function removeEmployee(id)
{
    var con = confirm("Are you sure you need to remove the employee?");
    if(con==true)
    {
        $url = "../../controller/AdminAjax.php";
        ajax.open("POST",$url,true);
        ajax.onreadystatechange = function()
        {
            if(ajax.readyState==4)
            {
                if(ajax.status==200)
                {
                    if(JSON.parse(ajax.responseText)[0])
                    {
                        alert('Record removed successfully');
                        var tr = document.getElementById(id);
                        tr.remove();
                    }
                    else
                    {
                        alert('Record removed unsuccess');

                    }
                }
            }
        }
        ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        ajax.send("number="+3+"&Id="+id);

    }
}

function updateStock(id)
{
    var tr = document.getElementById(id);
    document.getElementById('editId').value = id;
    var productTd = tr.childNodes;
    var editInput = [document.getElementById('editName'),document.getElementById('editQuantity'),
                        document.getElementById('editBrand'),document.getElementById('editPrice'),document.getElementById('editPre')];
    var i = 0;
    for(i=0;i<productTd.length;i++)
    {
        editInput[i].value = productTd[i].innerText;
    }
}

function updateService(id)
{
    var tr = document.getElementById(id);
    document.getElementById('editId').value = id;
    var productTd = tr.childNodes;
    var editInput = [document.getElementById('editName'),document.getElementById('editDuration'),
        document.getElementById('editPrice')];
    var i = 0;
    for(i=0;i<productTd.length;i++)
    {
        editInput[i].value = productTd[i].innerText;
    }
}

function updateEmployee(id)
{
    var tr = document.getElementById(id);
    var productTd = tr.childNodes;
    var editInput = [document.getElementById('editId'),document.getElementById("editNIC"),document.getElementById('editName'), document.getElementById('editMobile'),
        document.getElementById('editEmail'), document.getElementById('editAddress'), document.getElementById('editGender'),
        document.getElementById('editJdate'),document.getElementById('editDescription')];
    var i = 0;
    for (i = 0; i < productTd.length; i++)
    {
        if(i==0)
        {
            editInput[i].min = productTd[i].innerText;
            editInput[i].max = productTd[i].innerText;
        }

        editInput[i].value = productTd[i].innerText;
        console.log(editInput[i]+" "+productTd[i].innerText);
    }
}

function updateReceptionist(id)
{
    var tr = document.getElementById(id);
    var productTd = tr.childNodes;
    var editInput = [document.getElementById('editId'),document.getElementById('editName'), document.getElementById('editMobile'),
        document.getElementById('editEmail')];
    var i = 0;
    for (i = 0; i < productTd.length; i++)
    {

        editInput[i].value = productTd[i].innerText;
        console.log(editInput[i]+" "+productTd[i].innerText);
    }
}

