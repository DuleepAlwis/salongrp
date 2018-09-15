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