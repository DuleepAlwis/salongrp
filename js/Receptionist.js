var beautcian = {};


function updateItem(id)
{
    var obj = new XMLHttpRequest();
    var quantity = document.getElementById(id).value;
    var url = '../controller/Stockdetails.php';
    console.log(id+" "+quantity);
    obj.open('POST',url,true);
    obj.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    obj.send('Id='+id+"&q="+quantity+"&number="+1);
}

function loadBeautician()
{
    var obj = new XMLHttpRequest();

}
function ServiceInvoice(id,name,price)
{
    var tbody = document.getElementById("invoiceItems");
    var tr = document.createElement("tr");
    var td = [document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td"),document.createElement("td")];
    td[1].innerText = name;
    td[5].innerText = price;
    var select = document.createElement("select");
    var i=0;
    for(i=0;i<beautcian.length;i++)
    {
        var option = document.createElement("option");
        option.id = beautcian[i][0];
        option.value = beautcian[i][1];
        select.appendChild(option);
    }

}
