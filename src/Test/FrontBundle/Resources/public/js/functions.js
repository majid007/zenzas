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


(function (factory) {
    if (typeof define === 'function' && define.amd) {
        define(['moment'], factory); // AMD
    } else if (typeof exports === 'object') {
        module.exports = factory(require('../moment')); // Node
    } else {
        factory(window.moment); // Browser global
    }
}(function (moment) {
    return moment.lang('es', {
        months : "enero_febrero_marzo_abril_mayo_junio_julio_agosto_septiembre_octubre_noviembre_diciembre".split("_"),
        monthsShort : "ene._feb._mar._abr._may._jun._jul._ago._sep._oct._nov._dic.".split("_"),
        weekdays : "domingo_lunes_martes_miércoles_jueves_viernes_sábado".split("_"),
        weekdaysShort : "dom._lun._mar._mié._jue._vie._sáb.".split("_"),
        weekdaysMin : "Do_Lu_Ma_Mi_Ju_Vi_Sá".split("_"),
        longDateFormat : {
            LT : "H:mm",
            L : "DD/MM/YYYY",
            LL : "D [de] MMMM [de] YYYY",
            LLL : "D [de] MMMM [de] YYYY LT",
            LLLL : "dddd, D [de] MMMM [de] YYYY LT"
        },
        calendar : {
            sameDay : function () {
                return '[hoy a la' + ((this.hours() !== 1) ? 's' : '') + '] LT';
            },
            nextDay : function () {
                return '[mañana a la' + ((this.hours() !== 1) ? 's' : '') + '] LT';
            },
            nextWeek : function () {
                return 'dddd [a la' + ((this.hours() !== 1) ? 's' : '') + '] LT';
            },
            lastDay : function () {
                return '[ayer a la' + ((this.hours() !== 1) ? 's' : '') + '] LT';
            },
            lastWeek : function () {
                return '[el] dddd [pasado a la' + ((this.hours() !== 1) ? 's' : '') + '] LT';
            },
            sameElse : 'L'
        },
        relativeTime : {
            future : "en %s",
            past : "hace %s",
            s : "unos segundos",
            m : "un minuto",
            mm : "%d minutos",
            h : "una hora",
            hh : "%d horas",
            d : "un día",
            dd : "%d días",
            M : "un mes",
            MM : "%d meses",
            y : "un año",
            yy : "%d años"
        },
        ordinal : '%dº',
        week : {
            dow : 1, // Monday is the first day of the week.
            doy : 4  // The week that contains Jan 4th is the first week of the year.
        }
    });
}));
