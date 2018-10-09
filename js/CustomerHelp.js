var ajax = new XMLHttpRequest();
var cusId;
var customerName;
function getMessages(customerid)
{
    cusId = customerid;
    customerName = document.getElementById(customerid).innerText;
    //console.log(name);
    //document.getElementById("sendto").innerText=name;
    var url = "../../controller/CustomerHelpController.php";
    ajax.onreadystatechange = loadMessages;
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send("Id="+customerid+"&number=1");
}


function loadMessages()
{
    if(ajax.readyState==4)
    {
        if(ajax.status==200)
        {
            var result = JSON.parse(ajax.responseText);
            console.log(result);
            setMessages(result);
        }
    }
}


function setMessages(result)
{
    var i = 0;
    var msgBox = document.getElementById("msgBox");

    msgBox.innerHTML = "";
    for(i=0;i<result.length;i++)
    {

        var li = document.createElement("li");
        var span = document.createElement("span");
        var user = document.createElement("b");
        var time = document.createElement("b");
        time.style.color = "black";
        time.innerText = result[i]["time"]+" : "
        user.style,color = "black";
        span.style.color = "black";
        span.innerText = result[i]["description"];
        var len = (span.innerText).length;
        span.style.width = len*15+'px';
        span.style.height = '5px';
        span.style.borderRadius = '7px';
        span.style.marginBottom = '13px';

        if(result[i]["from"]=="R")
        {
            user.innerText = "Receptionist : ";
            span.style.background = "yellow";
        }

        if(result[i]["from"]=="C")
        {
            user.innerText = customerName+" : ";
            span.style.background = 'Aqua';
        }

        li.appendChild(time);
        li.appendChild(user);
        li.appendChild(span);
        msgBox.appendChild(li);
    }

    setInterval(function () {
        getMessages(cusId);
    },3000);

}

function receptionistMessage()
{
    var url = "../../controller/CustomerHelpController.php";
    var message = document.getElementById("msgArea").value;
    ajax.open("POST", url, true);
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send("Id="+cusId+"&msg="+message+"&number=2");
    var msgBox = document.getElementById("msgBox");
    var li = document.createElement("li");

    li.style.color = "black";
    li.style.background = "yellow";
    li.innerText = message;
    msgBox.appendChild(li);
    clearMessages();
}

function customerMessage()
{
    var url = "../../controller/CustomerHelpController.php";
    var message = document.getElementById("msgArea").value;
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send("Id="+cusId+"&msg="+message+"&number=3");
    var msgBox = document.getElementById("msgBox");
    var li = document.createElement("li");
    li.style.color = "black";
    li.style.background = "blue";
    li.innerText = message;
    msgBox.appendChild(li);
    clearMessages();
}

function clearMessages()
{
    document.getElementById("msgArea").value = " ";
}
