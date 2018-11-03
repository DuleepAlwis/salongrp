var ajax = new XMLHttpRequest();
var cusId;
var customerName;
var retriever;

//Receptionist side
function getReceptionistMessages(customerid)
{
    cusId = customerid;
    customerName = document.getElementById(customerid).innerText;
    retriever = "R";
    //document.getElementById("sendto").innerText=name;
    var url = "../../controller/CustomerHelpController.php";
    ajax.onreadystatechange = loadMessages;
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send("Id="+customerid+"&number=1");
}

//===============================================================================================

//Customer side
function getCustomerMessages(customerid,Name)
{
    cusId = customerid;
    customerName = Name;
    retriever = "C";
    //document.getElementById("sendto").innerText=name;
    var url = "../../controller/CustomerHelpController.php";
    ajax.onreadystatechange = loadMessages;
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send("Id="+customerid+"&number=1");
}
//==================================================================================================

function loadMessages()
{
    if(ajax.readyState==4)
    {
        if(ajax.status==200)
        {
            var result = JSON.parse(ajax.responseText);
            //console.log(result);
            setMessages(result);

        }
    }
}


function setMessages(result)
{
    var i = 0;
    var msgBox = document.getElementById("msgBox");

    if(result[0]!=false)
    {
        msgBox.innerHTML = "";


        for(i=0;i<result.length;i++)
        {

            var li = document.createElement("li");
            var div = document.createElement("div");
            var span = document.createElement("span");
            var emptySpan = document.createElement("span");
            var user = document.createElement("b");
            var time = document.createElement("b");
            var msgDescription = document.createElement("p");
            time.style.color = "black";
            time.innerText = result[i]["time"]+"  :  ";
            user.style.color = "black";
            span.style.color = "black";
            msgDescription.innerHTML = result[i]["description"];
            msgDescription.width = (msgDescription.innerText).length+'px';
            span.style.marginBottom = "377px";
            var len = (span.innerText).length;
            span.style.width = len*15+'px';
            span.style.height = '5px';
            span.style.borderRadius = '17px';
            msgDescription.style.borderRadius = "17px";
            msgDescription.style.padding = "13px";
            li.style.marginBottom = '57px';
            span.style.padding = "13px";
            emptySpan.style.display = "block";
            emptySpan.style.height = "17px";

            if(result[i]["from"]=="R")
            {
                user.innerHTML = "Receptionist  " + "<br>";
                span.style.background = "yellow";
                msgDescription.style.background = "#F5FFFA";
                div.style.marginLeft = "7px";
            }

            if(result[i]["from"]=="C")
            {
                user.innerHTML = customerName+" " + "<br>";
                span.style.background = 'Aqua';
                msgDescription.style.background = "#FDF5E6";
                div.style.marginLeft = "7px";
            }

            //li.appendChild(time);
            //li.appendChild(user);
            span.appendChild(time);
            span.appendChild(user);
            div.appendChild(span);
            div.appendChild(emptySpan);
            //div.appendChild(document.createElement("<br"));
            div.appendChild(msgDescription);
            li.appendChild(div);
            msgBox.appendChild(li);
        }
    }


    if(retriever=="R") {


        setInterval(function () {
            getReceptionistMessages(cusId);
        }, 3000);
    }
    else if(retriever=="C")
    {
        setInterval(function (){
            getCustomerMessages(cusId,customerName);
        },3000);
    }
    else
    {

    }

}

function receptionistMessage()
{
    var url = "../../controller/CustomerHelpController.php";
    var message = document.getElementById("msgArea").value;
    ajax.open("POST", url, true);
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send("Id="+cusId+"&msg="+message+"&number=2");
    /*var msgBox = document.getElementById("msgBox");
    var li = document.createElement("li");

    li.style.color = "black";
    li.style.background = "yellow";
    li.innerText = message;
    msgBox.appendChild(li);*/
    clearMessages();
}

function customerMessage(id)
{
    var cusId = id;
    var url = "../../controller/CustomerHelpController.php";
    var message = document.getElementById("msgArea").value;
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send("Id="+cusId+"&msg="+message+"&number=3");
    /*var msgBox = document.getElementById("msgBox");
    var li = document.createElement("li");
    li.style.color = "black";
    li.style.background = "blue";
    li.innerText = message;
    msgBox.appendChild(li);*/
    clearMessages();
}

function clearMessages()
{
    document.getElementById("msgArea").value = " ";
}


