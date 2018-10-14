var ajax = new XMLHttpRequest();
var beautician = [];  //[beauticianid,beauticianName]
var service = []; //[serviceId,serviceName,price,duration]
var timeslots = [];
var availableTs = [];
var start = 9.00;
var close = 6.00;
var appointmentNumber = 0;

var date = new Date();

var month = date.getMonth();
if(month<10)
{
    month = "0"+month;
}

var appointmentDate = document.getElementById("date");
var today = date.getFullYear()+"-"+month+"-"+date.getDate();
appointmentDate.setAttribute("min",today);




function addToAppointments()
{
    var details = [appointmentDate.value,document.getElementById("beautician").value,
        document.getElementById("service").value,document.getElementById("participants").value,document.getElementById("timeslots")];
    var tr = document.getElementById("AppointmentTable");
    var td = [];
    var i=0;
    for(i=0;i<8;i++)
    {
        td[i] = document.createElement("td");
    }

    appointmentNumber = appointmentNumber + 1;
    td[0].innerText = appointmentNumber;

    for(i=1;i<details.length;i++)
    {
        td[i].innerText = details[i];
    }

    var btn = document.createElement("button");
    btn.style.color = "red";
    btn.innerText = "X";
    btn.class = "btn-outline-primary";


}

//======================================================================================================================
function LoadDetails()
{
    loadBeautician();
    loadServices();
}

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
function selectBeautician()
{


    var select = document.getElementById("beautician");
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
//Load Services from the DB

function loadServices()
{
    var url = "../../controller/CustomerServer.php";

    ajax.onreadystatechange = serviceList
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send('number=2');
}

function serviceList()
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
                    service.push([keys[i],values[i][0],values[i][1],values[i][2]]);
                }
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
    var option = document.createElement("option");
    option.setAttribute("value","Any");
    option.innerHTML = "Any";
    option.style.color = "black";
    select.appendChild(option);
    var i = 0;
    for(i=0;i<service.length;i++)
    {
        option = document.createElement("option");
        option.style.color = "black";
        var servicedetails = service[i][0]+"&"+service[i][2]+"&"+service[i][3];
        option.setAttribute("value",servicedetails);
        option.innerHTML = beautician[i][1];
        select.appendChild(option);

    }

}

//======================================================================================================================


