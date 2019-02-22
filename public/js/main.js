
$(document).ready(function(){
    $("#add-unit-button").click(function(){
        var unitQuantity = document.getElementById('units').value;
        var units = [];
        addUnit(unitQuantity);
        $("#units").val("");
       });

});


var id ="";
function addUnit(unitQuantity) {
    //check if empty value has been submitted
    if (unitQuantity != "") {
        //add quantity to array
        units.push(unitQuantity);
        //console.log("units:" +units);

        for (var i = 0; i < units.length; i++) {
            array = units.length;
            var button = document.createElement("button");
            id = array-1;

            //console.log("id:" +id);
            //set attributes for button
            setAttributes(button, {
                    'id': id,
                    'class': 'btn btn-default',
                    'onclick':'popUniqueQuantity(id)',
                    'style': 'margin-left:5px;'
                }
            );

            var value = document.createTextNode(unitQuantity);

            button.append(value);
            document.getElementsByClassName('units-list')[0].append(button);

            return false;
        }
    }
}

function popUniqueQuantity(id){
    //remove unit quantity from array
    units.splice(id, 1);

    //Id of button
    var string = "#"+id;

    //Remove button
    $(string).hide();
}

function setAttributes(el, attrs) {
    Object.keys(attrs).forEach(key => el.setAttribute(key, attrs[key]));
}




