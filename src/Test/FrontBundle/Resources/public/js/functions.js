/**
 * Created by MAGID on 07/04/2016.
 */
function guid()
{
    var currentDateMilliseconds = new Date().getTime();
    var currentDateSeconds = parseInt(currentDateMilliseconds/1000);
    var currentDateMilli = currentDateMilliseconds - (currentDateSeconds*1000);
    return ''+currentDateSeconds+'-'+currentDateMilli+'-pxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (currentChar) {
        var randomChar = (currentDateMilliseconds + Math.random() * 16) % 16 | 0;
        currentDateMilliseconds = Math.floor(currentDateMilliseconds / 16);
        return (currentChar === 'x' ? randomChar : (randomChar & 0x7 | 0x8)).toString(16);
    });
}


function validerRequisTexte(champ){  if(trim(document.getElementById(champ).value).length == "0" ){ return false; } else { return true; } }
function validerVideZero(champ){ if(trim(document.getElementById(champ).value) == "0" ){ return false; } else { return true; } }

function validerFormatEmail(champ) {
    var element =document.getElementById(champ).value;
    if (element!=0) {
        var expresion =/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        if (!expresion.test(element)) {return false;} else {return true;}
    }else {return true;}
}

/*	$("#txt_notes").keyup(function (){ deleteApostrohe($(this));});	*/
function deleteApostrohe(param){
    var id = param.attr('id');
    var element =document.getElementById(id).value;
    var txt = element.replace(new RegExp('(\"|\')','g'),'’');
    document.getElementById(id).value=txt;
}

function deleteLettres(id){
    var element =document.getElementById(id).value;
    var txt = element.replace(/\D/g,'');
    return txt;
}

/*$("#annonce_prix").keyup( function() { validerNumerique($(this)); });*/
function validerNumerique(param){
    var id = param.attr('id');
    var res = deleteLettres(id);
    document.getElementById(id).value=res;
}

function trim (myString){return myString.replace(/^\s+/g,'').replace(/\s+$/g,'');}

function limpiarInputfile(id) {
    $fileupload = $('#'+id);
    $fileupload.replaceWith($fileupload.clone(true));
}
