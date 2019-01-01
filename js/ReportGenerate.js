var purchaseRevenue = 0;
var serviceRevenue = 0;
var appointmentRevenue = 0;


function stockReport()
{

    var date = new Date();
    var today = date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate();
    var doc = new jsPDF('p', 'pt');

    var res = doc.autoTableHtmlToJson(document.getElementById("stock-details"));
    //doc.autoTable(res.columns, res.data, {margin: {top: 80}});

    var header = function(data) {
        doc.setFontSize(18);
        doc.setTextColor(40);
        doc.setFontStyle('normal');
        //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
        doc.text("Stock Report on "+today, data.settings.margin.left, 50);
    };

    var options = {
        beforePageContent: header,
        margin: {
            top: 80
        },
        startY: doc.autoTableEndPosY() + 20
    };

    doc.autoTable(res.columns, res.data, options);

    doc.save("ReportOfStock"+today+".pdf");
}

function RevenueReport()
{
    calculateTotalRevenue();
    var i = 0;
    var date = new Date();
    var today = date.getFullYear()+"-"+date.getMonth()+"-"+date.getDate();
    var doc = new jsPDF('p', 'pt');
    var productTable = document.getElementById("product-revenue");
    var serviceTable = document.getElementById("service-revenue");
    var appointmentTable = document.getElementById("appointment-revenue");
    if(productTable)
    {
        console.log(111);
        var res = doc.autoTableHtmlToJson(productTable);
        //doc.autoTable(res.columns, res.data, {margin: {top: 80}});

        var header = function(data) {
            doc.setFontSize(18);
            doc.setTextColor(40);
            doc.setFontStyle('normal');
            //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
            doc.text("Revenue Report from products on "+today, data.settings.margin.left, 50);
        };

        var options = {
            beforePageContent: header,
            margin: {
                top: 80
            },
            startY: doc.autoTableEndPosY() + 20
        };

        doc.autoTable(res.columns, res.data, options);
        i=1;
    }

    if(serviceTable)
    {
        console.log(222);

        if(i!=0)
        {
            doc.addPage();
        }
        var res = doc.autoTableHtmlToJson(serviceTable);
        //doc.autoTable(res.columns, res.data, {margin: {top: 80}});

        var header = function(data) {
            doc.setFontSize(18);
            doc.setTextColor(40);
            doc.setFontStyle('normal');
            //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
            doc.text("Revenue Report from Services on "+today, data.settings.margin.left, 50);
        };

        var options = {
            beforePageContent: header,
            margin: {
                top: 80
            },
            startY: doc.autoTableEndPosY() + 20
        };

        doc.autoTable(res.columns, res.data, options);

    }

    if(appointmentTable)
    {
        console.log(333);
        if(i!=0)
        {
            doc.addPage();
        }
        var res = doc.autoTableHtmlToJson(appointmentTable);
        //doc.autoTable(res.columns, res.data, {margin: {top: 80}});

        var header = function(data) {
            doc.setFontSize(18);
            doc.setTextColor(40);
            doc.setFontStyle('normal');
            //doc.addImage(headerImgData, 'JPEG', data.settings.margin.left, 20, 50, 50);
            doc.text("Revenue Report from appointments on "+today, data.settings.margin.left, 50);
        };

        var options = {
            beforePageContent: header,
            margin: {
                top: 80
            },
            startY: doc.autoTableEndPosY() + 20
        };

        doc.autoTable(res.columns, res.data, options);

    }
    if(i>0)
    {
        doc.addPage();
    }

    var purchaseData = "Stock Revenue :- Rs."+purchaseRevenue;
    var serviceData = "Service Revenue :- Rs."+serviceRevenue;
    var appointmentData = "Appointment Revenue :- Rs."+appointmentRevenue;
    doc.text(20, 20, purchaseData);
    doc.text(20, 60, serviceData);
    doc.text(20, 100, appointmentData);
    doc.addPage();
    doc.save("Revenue "+today+".pdf");

}

function calculateTotalRevenue()
{
    var purchases = document.getElementById("stockRevenue");
    var services = document.getElementById("serviceRevenue");
    var appointment = document.getElementById("appointmentRevenue");
    purchaseRevenue = ((purchases.innerText).split("."))[1];
    serviceRevenue = ((services.innerText).split("."))[1];
    appointmentRevenue = ((appointment.innerText).split("."))[1];
}