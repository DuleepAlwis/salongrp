var total = 0;
var beautician = [];
var ajax = new XMLHttpRequest();

//Update stock

function updateItem(id)
{

    var quantity = document.getElementById(id).value;
    var url = '../../controller/Stockdetails.php';

    ajax.open('POST',url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('Id='+id+"&q="+quantity+"&number="+1);
}
//======================================================================================================================
//Load all the beauticians
function loadBeautician()
{
    var url = "../../controller/Stockdetails.php";

    ajax.onreadystatechange = beauticianList
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('number=2');
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
            }
        }
    }
    try {
        selectBeautician();
    }
    catch (e) {

    }
}
//======================================================================================================================

//Generate the employee list in the combo box
function selectBeautician()
{


    var select = document.getElementById("employee");
    var k = select.length-1;
    for(k=select.length-1;k>=0;k--)
    {
        select.remove(k);
    }
    var option = document.createElement("option");
    option.setAttribute("value","Any");
    option.innerHTML = "Any";
    option.style.color = "black";
    select.appendChild(option);
    var i = 0;
    for(i=0;i<beautician.length;i++)
    {
        option = document.createElement("option");
        option.style.color = "black";
        option.setAttribute("value",beautician[i][0]);
        option.innerHTML = beautician[i][1];
        select.appendChild(option);

    }

}
//======================================================================================================================
//Functions for Appointment page

function AppointmentPage()
{
    loadBeautician();


}
//Add Services to the Invoice

function ServiceInvoice(id,price)
{
    var tbody = document.getElementById("invoiceItems");
    var name = (document.getElementById("Service"+id)).innerText;
    var tr = document.createElement("tr");
    tr.setAttribute("id","S"+id);
    var td = [document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td")];
    var number = document.createElement("input");
    number.type = "number";
    number.min = 1;
    number.max = 31;
    number.setAttribute("onClick","priceIncrement(this,"+price+","+"servicePrice"+id+")");
    td[1].innerText = name;
    td[4].appendChild(number);
    td[5].setAttribute("id","servicePrice"+id);
    td[5].innerText = price;
    var select = document.createElement("select");
    var i=0;
    for(i=0;i<beautcian.length;i++)
    {
        var option = document.createElement("option");
        option.setAttribute("id",beautcian[i][0]);
        option.setAttribute("value",beautcian[i][1]);
        option.innerText = beautcian[i][1];
        select.appendChild(option);
    }
    td[2].appendChild(select);
    button = document.createElement("button");
    button.setAttribute("onClick","removeRow('S"+id+"')");
    button.style.background = 'red';
    button.style.color = "black";
    button.innerText = "X";
    td[6].appendChild(button);
    var i=0;
    for(i=0;i<td.length;i++)
    {
        tr.appendChild(td[i]);
    }
    tbody.appendChild(tr);

}

//======================================================================================================================

//Add appointments to the invoice

function AppointmentInvoice(id,price)
{
    var tbody = document.getElementById("invoiceItems");
    var tr = document.createElement("tr");
    tr.setAttribute("id","A"+id);
    var td = [document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td")];
    var number = document.createElement("input");
    number.type = "number";
    number.min = 1;
    number.max = 31;
    td[0].innerText = id;
    td[1].innerText = name;
    td[4].appendChild(number);
    td[5].setAttribute("id","AppointmentPrice"+id);
    td[5].innerText = price;
    var select = document.createElement("select");
    var i=0;
    for(i=0;i<beautcian.length;i++)
    {
        var option = document.createElement("option");
        option.id = beautcian[i][0];
        option.value = beautcian[i][1];
        option.innerText = beautcian[i][1];
        select.appendChild(option);
    }
    td[2].appendChild(select);
    button = document.createElement("button");
    button.setAttribute("onClick","removeRow('A'+id)");
    button.style.background = 'red';
    button.style.color = "black";
    button.innerText = "X";
    td[6].appendChild(button);
    var i=0;
    for(i=0;i<td.length;i++)
    {
        tr.appendChild(td[i]);
    }
    tbody.appendChild(tr);

}
//======================================================================================================================

//Add product to the Invoice

function ProductInvoice(id,price)
{

    var name = (document.getElementById("Product"+id)).innerText;

    var tbody = document.getElementById("invoiceItems");
    var tr = document.createElement("tr");
    tr.setAttribute("id","P"+id);
    var td = [document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td")];
    var number = document.createElement("input");
    number.type = "number";
    number.min = 1;
    number.max = 31;
    number.value = 1;

    number.setAttribute("onClick","priceIncrement(this,"+price+","+"productPrice"+id+")");
    td[3].innerText = name;
    td[4].appendChild(number);
    td[5].setAttribute("id","productPrice"+id);
    td[5].innerText = price;


    //td[2].appendChild(select);
    var button = document.createElement("button");
    button.setAttribute("value","Remove");
    button.setAttribute("onClick","removeRow('P"+id+"')");
    button.innerText = "X";
    button.style.background = 'red';
    button.style.color = "black";
    td[6].appendChild(button);
    var i=0;
    for(i=0;i<td.length;i++)
    {
        tr.appendChild(td[i]);
    }
    tbody.appendChild(tr);

}

//======================================================================================================================

//Increment the total price according to the quantity

function priceIncrement(object,unitPrice,totalPrice)
{

    var currentQuantity = object.value;
    totalPrice.innerText = unitPrice * currentQuantity;
}

//======================================================================================================================

//Remove the row from Inv.
function removeRow(rowName)
{
    console.log(rowName);
    var tr = document.getElementById(rowName);
    tr.remove();
}

//======================================================================================================================

//Calcualte the total of services and products

function calculateTotal()
{
    total = 0.0;
    var table = document.getElementById("invoiceItems");
    var tr = table.childNodes;
    var i = 0;

    for(i=1;i<tr.length;i++)
    {
        total = total + parseInt(tr[i].childNodes[5].innerHTML);
    }
    document.getElementById("total").setAttribute("value",total);
    document.getElementById("total").style.color = "black";
}

//Calculate the netValue
function netValue()
{
    var tot = document.getElementById("total").value;
    var discount = document.getElementById("discount").value;
    var amount = (tot-(tot*discount)/100);
    document.getElementById("netValue").setAttribute("value",amount);
    document.getElementById("netValue").style.color = "black";
}

function SavePayment()
{
    var table = document.getElementById("invoiceItems");
    var tr = table.childNodes;
    var i = 0;

    for(i=1;i<tr.length;i++)
    {
        var type = tr[i].id[0];
        var td = tr[i].childNodes;
        var quantity = td[4].children[0].value;
        var price = parseFloat(td[5].innerText);
        if(type=="P")
        {
            var productId = tr[i].id.substring(1,tr[i].id.length);
            PurchasePay(productId,quantity,price);
        }
        else if(type=="A")
        {
            var AppointmentId = tr[i].id.substring(1,tr[i].id.length);
            AppointmentPay(AppointmentId,price);
        }
        else if(type=="S")
        {
            var ServiceId = tr[i].id.substring(1,tr[i].id.length);
            var beauticianId = td[2].childre[0].value;
            NonAppointmentPay(ServiceId,beauticianId,price);
        }
    }
}


function AppointmentPay(Appointmentid,price)
{
    var url = "../../controller/Stockdetails.php";

    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('id='+Appointmentid+'&price'+price+'&number=3');
}

function NonAppointmentPay(Serviceid,beauticianid,price)
{
    var url = "../../controller/Stockdetails.php";

    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('Serviceid='+Serviceid+'&beauticianid='+beauticianid+'&price'+price+'&number=4');
}

function PurchasePay(Productid,quantity,price)
{
    var url = "../../controller/Stockdetails.php";

    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('Productid='+Productid+'&quantity='+quantity+'&price='+price+'&number=5');
}


function clearAll()
{
    location.reload();
}
