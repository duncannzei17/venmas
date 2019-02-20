var removeQuantity ="";

$(document).ready(function(){
    $("#add-unit-button").click(function(){
        var unitQuantity = document.getElementById('units').value;
        var units = [];
        addUnit(unitQuantity);
        $("#units").val("");

       });

    $("#uniqueQuantity").click(function(){
        popUniqueQuantity(removeQuantity);
    });


});



function addUnit(unitQuantity) {
    units.push(unitQuantity);
    console.log(units);
    for(var i = 0;i<units.length;i++){
        //console.log(units.length);
        var button = document.createElement("button");
        //set attributes for button
        setAttributes(button,{
            'id':'uniqueQuantity',
            'class':'btn btn-default',
            'style':'margin-left:5px;'}
         );

        var value = document.createTextNode(unitQuantity);

        button.append(value);
        document.getElementsByClassName('units-list')[i].append(button);

        return false;
    }
}

function setAttributes(el, attrs) {
    Object.keys(attrs).forEach(key => el.setAttribute(key, attrs[key]));
}

function popUniqueQuantity(){
    console.log("button clicked");
    units.pop(removeQuantity);
    $("#uniqueQuantity").hide();
    console.log(units);
}

/*function selectedUniqueQuantity(ev, index){
    var trigger = (ev.target == $("#uniqueQuantity")[index])? true : false;
    return trigger;
}*/


