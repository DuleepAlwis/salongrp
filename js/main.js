function displayDistrict()
{
    var district = ["Ampara", "Anuradhapura","Badulla","Batticaloa","Colombo","Galle","Gampaha",
        "Hambantota","Jaffna", "Kalutara","Kandy", "Kegalle", "Kilinochchi", "Kurunegala", "Mannar", "Matale",
        "Matara", "Moneragala", "Mullaitivu", "Nuwara Eliya", "Polonnaruwa", "Puttalam", "Ratnapura",
        "Trincomalee", "Vavuniya"]

    optTag = document.getElementById("district");
    var i=0;
    for(i=0;i<district.length;i++)
    {
        element = document.createElement("option");
        optTag.appendChild(element)
    }
}

