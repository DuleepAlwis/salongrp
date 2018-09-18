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
        element.value = district[i];
<<<<<<< HEAD
=======
        element.style.color = "black";
>>>>>>> 54a2114fdd0765d76bc7c4558ab73bf29229f497
        optTag.appendChild(element);
        console.log(element.value);
    }
}