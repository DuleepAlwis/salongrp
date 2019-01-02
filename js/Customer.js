var ajax = new XMLHttpRequest();
var beautician = [];  //[beauticianid,beauticianName]
var service = []; //[serviceId,serviceName,price,duration]
var timeslots = [];
var availableTs = [];
var start = 9;
var close = 18;
var appointmentNumber = 0;
var totalPrice = 0.0;

var date = new Date();

var month = date.getMonth();
var day = date.getDate();
if(month<10)
{
    month = "0"+month;
}

if(day<10)
{
    day = "0"+day;
}

try {

    var appointmentDate = document.getElementById("date");
    var today = date.getFullYear() + "-" + month + "-" + day;
    appointmentDate.setAttribute("min", today);
}
catch (e) {
    
}



function addToAppointments()
{
    var appointmentdate = appointmentDate.value;
    var beauticianid = document.getElementById("beautician").value;
    var service =  document.getElementById("service").value.split("&")[3];
    var price = document.getElementById("service").value.split("&")[1];
    var participants = document.getElementById("participants").value;
    var appointmentTime = document.getElementById("timeslots").value;
    if(appointmentdate && beauticianid && service && participants && appointmentTime)
    {
        var beauticianName;
        var i = 0;
        for(i=0;i<beautician.length;i++)
        {
            if(beautician[i][0]==beauticianid || beauticianid=="Any")
            {
                console.log(beautician[i][0]+" "+beautician[i][1]);
                if(beauticianid=="Any")
                {
                    beauticianName = "Any";
                    break;
                }
                beauticianName = beautician[i][1];
                console.log(beauticianName);
                break;
            }
        }
        var details = [appointmentdate,beauticianName,
            service,participants,appointmentTime,price];
        var table = document.getElementById("AppointmentTable");
        var td = [];
        for(i=0;i<9;i++)
        {
            td[i] = document.createElement("td");
        }

        appointmentNumber = appointmentNumber + 1;
        td[0].innerText = appointmentNumber;

        for(i=1;i<details.length+1;i++)
        {

            td[i].innerText = details[i-1];
            td[i].style.color = "black";
        }

        var btn = document.createElement("button");
        btn.style.color = "red";
        btn.innerText = "X";
        btn.class = "btn-outline-primary";
        btn.setAttribute("onclick","removeRow("+appointmentNumber+","+price+")");
        td[7].appendChild(btn);
        var tr = document.createElement("tr");
        tr.setAttribute("id",appointmentNumber);
        for(i=0;i<td.length;i++)
        {
            tr.appendChild(td[i]);
        }
        table.appendChild(tr);
        calculatrTotal(price);
        var select = document.getElementById("beautician");
        var k = select.length - 1;
        for (k = select.length - 1; k >= 0; k--)
        {
            select.remove(k);
        }
    }




}

function calculatrTotal()
{
    var tPrice = document.getElementById("totalprice");
    var advancep = document.getElementById("advancep");
    var price = document.getElementById("service").value.split("&")[1];
    totalPrice = totalPrice+parseFloat(price);
    console.log(totalPrice);
    tPrice.value = ""+totalPrice;
    advancep.value = ""+(totalPrice/2);
}

function removeRow(rowNumber,price)
{
    var row = document.getElementById(rowNumber);
    appointmentNumber = appointmentNumber - 1;
    row.remove();
    var tPrice = document.getElementById("totalprice");
    var advancep = document.getElementById("advancep");
    totalPrice = totalPrice-price;
    tPrice.value = ""+(totalPrice);
    advancep.value = ""+(totalPrice/2);
}

//======================================================================================================================
function CallMethods()
{
    //loadBeautician();
   /* setTimeout(function(){
        loadServices();
    },1000);*/
   loadServices();
}

//Load Beautician's from the DB
function loadBeautician()
{
    //console.log((document.getElementById("service").value).split("&")[0]);
    var service = document.getElementById("service").value.split("&")[0];
    var url = "../../controller/CustomerServer.php";
    ajax.onreadystatechange = beauticianList
    ajax.open("POST",url,true);
    ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    ajax.send("number=3"+"&service="+service);
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
                beautician = [];
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

try {
    var select = document.getElementById("beautician");
    var k = select.length - 1;
    for (k = select.length - 1; k >= 0; k--)
    {
        select.remove(k);
    }
        /*var option = document.createElement("option");
        option.setAttribute("value", "Any");
        option.innerHTML = "Any";
        option.style.color = "black";
        select.appendChild(option);*/
        var i = 0;
        for (i = 0; i < beautician.length; i++)
        {
            var option = document.createElement("option");
            option.style.color = "black";
            option.setAttribute("value", beautician[i][0]);
            option.innerHTML = beautician[i][1];
            select.appendChild(option);

        }
    }

catch (e) {
    
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
    selectService();

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
    option.setAttribute("value","...");
    option.innerHTML = "...";
    option.style.color = "black";
    select.appendChild(option);
    console.log(option);
    var i = 0;
    for(i=0;i<service.length;i++)
    {
        option = document.createElement("option");
        option.style.color = "black";
        var servicedetails = service[i][0]+"&"+service[i][2]+"&"+service[i][3]+"&"+service[i][1];
        option.setAttribute("value",servicedetails);
        option.innerHTML = service[i][1];
        select.appendChild(option);

    }

}


function availableTimeSlots()
{
   //  alert("AAA");
    var ajax = new XMLHttpRequest();
    var empId = document.getElementById("beautician").value;
    var serviceId = document.getElementById("service").value;
    var participants = document.getElementById("participants").value;
    var dateAppoint = document.getElementById("date").value;
    var serviceTime = 0;
    var i=0;
    var time = new Date();
    time.setHours(9);

    if(empId && serviceId && participants && dateAppoint)
    {
        for (i = 0; i < service.length; i++)
        {
            if (parseInt(service[i][0]) == parseInt(serviceId))
            {
                console.log(service[i][3]);
                serviceTime = parseInt(service[i][3]);
            }
        }
        serviceTime = serviceTime * participants;
        time.setMinutes(serviceTime);

        /*if(serviceTime>60)
        {
            serviceTime = parseFloat((serviceTime/60)+"."+(serviceTime%60));
        }
        else if(serviceTime==60)
        {
            serviceTime = 1;
        }
        else
        {
            serviceTime = parseFloat(0.0+"."+serviceTime);
        }*/
        //var tmp = parseFloat(time.getHours() + "." + time.getMinutes());
        var tmp = parseFloat(time.getHours());
        console.log(tmp+" "+"H");
        i = 0;
        var tmpMinutes = serviceTime;
        while (tmp < close)
        {

            console.log(tmp+" P"+serviceTime+" tmpMinutes"+tmpMinutes);
            timeslots[i] = tmp;
            time.setMinutes(tmpMinutes);

            i = i+1;
            //console.log(tmp + " " + serviceTime);
            tmpMinutes = tmpMinutes + serviceTime;
            tmp = parseFloat(time.getHours() + "." + time.getMinutes());
        }

        var reservedTime = [];
        var url = "../../controller/CustomerServer.php";
        var result;
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                if (ajax.status == 200) {
                    var result = JSON.parse(ajax.responseText);
                    if (result[0]) {
                        i = 0;
                        for (i = 0; i < result[1].length; i++) {
                            reservedTime[i] = result[1][i];
                        }
                    }

                    setTimeList(timeslots, reservedTime);
                }
            }
        }
        ajax.open("POST", url, true);
        ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        ajax.send('number=4' + '&date=' + dateAppoint + '&employee=' + empId + '&service=' + serviceId);
       //alert(timeslots+" "+ajax.status+" "+ajax.readyState+" "+ajax.responseType);

    }
    else
    {
        console.log("Fill the fields");
    }




}

function setTimeList(timeslots,reservedTime)
{
    var i=0;
    //console.log(timeslots+" "+reservedTime);
    if(reservedTime.length>1)
    {

        var j = 0;
        for (i = 0; i < reservedTime.length; i++)
        {
            /*if (parseFloat(reservedTime[i])<timeslots[i] && parseFloat(reservedTime[i+1])>timeslots[i])
            {
                availableTs[j] = timeslots[i];
                j = j+1;
            }*/
            var booked = parseFloat(reservedTime[i]);
            for(j=0;i<timeslots.length;j++)
            {
                if(booked==timeslots[j])
                {
                    timeslots.splice(j,1);
                    break;
                }
            }

        }
        availableTs = timeslots;

        /*if(reservedTime[reservedTime.length-1]<close)
        {
            while(i<timeslots.length)
            {
                availableTs[j] = timeslots[i]
                j = j+1;
                i = i+1;
            }
        }*/

    }
    if(reservedTime.length==1)
    {
        var j = 0;
        var booked = parseFloat(reservedTime[j]);
        for(i=0;i<timeslots.length;i++)
        {
            if(booked==timeslots[i])
            {
                timeslots.splice(i,1);
            }
        }
        availableTs = timeslots;
    }
    else
    {
        availableTs = timeslots;
    }
    if(availableTs.length==0)
    {
        var alert = document.getElementById("alertMsg");
        alert.innerText = "Please select some other day No available slots";
    }
    else
    {
        var timeAvailable = document.getElementById("timeslots");
        var k = timeAvailable.length - 1;
        for (k = timeAvailable.length - 1; k >= 0; k--)
        {
            timeAvailable.remove(k);
        }
        for(i=0;i<availableTs.length;i++)
        {
            var option = document.createElement("option");
            option.style.color = "black";

            option.setAttribute("value",availableTs[i]);
            option.innerHTML = availableTs[i];
            timeAvailable.appendChild(option);

        }
    }
    console.log(reservedTime);

}
function addTime()
{
    var timeslots = document.getElementById("timeslots").value;
    var time = document.getElementById("time");
    time.value = timeslots;
    calculatrTotal();

}
function updateCustomer()
{
    var table = document.getElementById("profileData");
    var tr = table.childNodes;
    var editInput = [document.getElementById('editName'),
        document.getElementById('editEmail'), document.getElementById('editMobile'),document.getElementById('editAddress'), document.getElementById('editCity'),document.getElementById('editDistrict'),document.getElementById('editGender')];
    var i = 0;
    var j = 0;
    for (i = 1; i < tr.length; i=i+2)
    {

        editInput[j].value = tr[i].childNodes[2].innerText;
        console.log(editInput[j].value+" "+tr[i].childNodes[1].innerText);
        j = j+1;
    }
}

//======================================================================================================================

var slide = 0;  //0 =slide up   1=slide down
$(document).ready(function(){
    $("#customerMsgbox").hide();

    $("#customerMsgflip").click(function(){
        if(slide==0)
        {
            $("#customerMsgbox").slideUp("slow");
            slide = 1;
        }
        else
        {
            $("#customerMsgbox").slideDown("slow");
            slide = 0;
        }
    });
});
