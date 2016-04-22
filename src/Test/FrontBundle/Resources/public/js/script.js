/**
 * Created by MAGID on 01/03/2016.
 */
$(document).ready(function(){
    /*VARIABLEL LOCAUX*/


    /*EVENEMENT*/
    //header
    $('#btn-menu-mobile').click(collapse);
    $(window).resize(resize);
    //newVehicule
    $('#annonce_Region').change(changeRegion);
    $('#annonce_Provincia').change(changeProvince);
    $('#annonce_Ciudad').change(changeVille);
    $('#villes').change(changeVilles2);
    $('#annonce_Distrito').change(changeArrondissement);
    $('#annonce_Barrio').change(changeQuartier);

    $('#precision-loca').click(getDetalleVille);
    $("#annonce_ValiderVVoiture").click(clickValiderVoiture);

    $("#annonce_prix").keyup( function() { validerNumerique($(this)); });
    $("#annonce_titre").keyup(function (){ deleteApostrohe($(this));});
    $("#annonce_description").keyup(function (){ deleteApostrohe($(this));});

    $(".options").change(typeVehicule);

    $('#accordion .panel-heading > h4 > a').click(expanderZone);

    $('form[name=annonce]').submit(validation);
    $('#annonce_photo1').change(validerImg);
    $('#annonce_photo2').change(validerImg);
    $('#annonce_photo3').change(validerImg);

    $('#voiture_idMarca').change(changeMarque);

    $('#divdFabrication').datetimepicker({format: 'YYYY-MM-DD'});
    $('#divdMatriculation').datetimepicker({format: 'YYYY-MM-DD'});

    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });

    $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
            var input = $(this).parents('.input-group').find(':text'),
                log = numFiles > 1 ? numFiles + ' files selected' : label;
            if( input.length ) {  input.val(log); } else { if( log ) alert(log); }
        });
    });

    /*
    $('.navbar li a').click(function(e) {
        $('.navbar li a').removeClass('active');
        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        if( $this.attr('role') == "menuitem" ){
            var x = $this.parent().parent().parent().children('a').addClass('active');
        }
        e.preventDefault();
    });

    $('#div-grp-btn-cat a').click(function(e) {
        $('#div-grp-btn-cat a').removeClass('active');
        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        e.preventDefault();
    });
    */

});


function validerImg(e){
    var idPhoto  = $(this).attr('id');
    var errorImg = $("#"+idPhoto+"e");
    errorImg.css('display','none');
    errorImg.html('');

    var imgs     = e.target.files;
    var imagen   = imgs[0];
    if(imagen.type.match('image.*')){
        var type           = imagen.type.match('image.*');
        var extention      = trim(type.toString().substring(6,12));
        var validImageType = ['jpg','jpeg','gif','png','bmp'];
        if(jQuery.inArray(extention,validImageType)){}
        else{
            errorImg.html("Les formats photo autorisés sont : jpeg, jpg, png, gif ou bmp.");
            errorImg.css('display','block');
            limpiarInputfile(idPhoto);
            $("#images").css("border-left","4px solid #a94442");
        }
    }
    else{
        var file = $(this).val();
        fileName = file.split("\\");
        errorImg.css('display','block');
        errorImg.html(fileName[fileName.length-1]+", n'est pas une image.<br>Les formats autorisés sont : jpeg, jpg, png, gif ou bmp.");
        limpiarInputfile(idPhoto);
        $("#images").css("border-left","4px solid #a94442");
    }
}

function validation(evt){
    $("#text-validation").html("");
    var ok       = true;
    var message  = "";
    var ville    = $('#villes').val();

    if( ville != "9999" ){
        if( trim(ville) != "Sélectionner une Ville ..." ){obtenerLocalisation(ville);}
        else{ ok = false; message += "+ Ville obligatoire.<br>"; $("#location").css("border-left","4px solid #a94442"); }
    }else{
        if(!validerRequisTexte('annonce_idCiudad')){ ok = false; message += "+ Ville obligatoire.<br>"; $("#location").css("border-left","4px solid #a94442");}
    }

    if (!validerRequisTexte("annonce_titre")){ ok = false; message += "+ Titre obligatoire.<br>"; $("#description").css("border-left","4px solid #a94442")}
    if (!validerRequisTexte("annonce_description")){ ok = false; message += "+ Description obligatoire.<br>"; $("#description").css("border-left","4px solid #a94442")}
    if(!ok ){evt.preventDefault(); $('#bloq').css('display','none'); $('#validation').css('display','block');  $("#text-validation").append(message)}else{ }
}

function collapse(){
    $(".collapse").collapse('toggle');
    if($('#espase-menu-mobile').hasClass('clearfix')){
        $('#espase-menu-mobile').removeClass('clearfix');
        $('#nav').css('height','' );
        $('section').css('display','block');
        $('#btn-menu-mobile').css('color','white'); $('#btn-menu-mobile').css('background','#666666');
    }
    else{
        $('#espase-menu-mobile').addClass('clearfix');
        $('#nav').css('height',$(window).height());
        $('section').css('display','none');
        $('#btn-menu-mobile').css('color','#5bc0de'); $('#btn-menu-mobile').css('background','white');
    }
}

function resize(){
    var w = $(window).width();
    if(w > 767 ){
        $('#nav').css('height','' );
        $('section').css('display','block');
        //if($('#div-grp-btn-cat').hasClass('btn-group-vertical')){$('#div-grp-btn-cat').removeClass('btn-group-vertical')}
    }
    else{
        if($('#espase-menu-mobile').hasClass('clearfix')){
            $('#nav').css('height',$(window).height());
            $('section').css('display','none');
        }
        //if(!$('#div-grp-btn-cat').hasClass('btn-group-vertical')){$('#div-grp-btn-cat').addClass('btn-group-vertical')}
    }
}

function changeRegion(){
    controlLocalisation(1);
    var data = {
        idRegion  : $(this).val(),
        textRegion: $(this).children(":selected").text()
    };
    $('#accordion #location .panel-heading > .panel-title > a > span').html('Région : '+data['textRegion']);
    $('#annonce_idRegion').val($(this).val());
    $.ajax({
        dataType: "json",
        type: 'post',
        url: '../provinces/'+data['idRegion'],
        data: data,
        success: function(data) {
            for(prov in data){ $('#annonce_Provincia').append("<option value='"+data[prov].id+"'>"+data[prov].provinciaFr+"</option>"); }
            controlLocalisation(8);
        },
        error: function(){ console.log('ERROR: Province not found');
        }
    })
}

function changeProvince(){
    controlLocalisation(2);
    var data = {
        idProvince: $(this).val(),
        textProvince: $(this).children(":selected").text()
    };
    $('#accordion #location .panel-heading > .panel-title > a > span').html(data['textProvince']);
    $('#annonce_idProvincia').val($(this).val());
    $.ajax({
        dataType: "json",
        type: 'post',
        url: '../villes/'+data['idProvince'],
        data: data,
        success: function(data) {
            for(ville in data){ $('#annonce_Ciudad').append("<option id='"+data[ville].extencion+"' value='"+data[ville].id+"'>"+data[ville].ciudadFr+"</option>"); }
            controlLocalisation(8);
        },
        error: function(){ console.log('ERROR: City not found');
        }
    })
}

function changeVille(){
    controlLocalisation(3);
    var extention = $(this).children(":selected").attr("id");
    var textVille = $(this).children(":selected").text();
    $('#accordion #location .panel-heading > .panel-title > a > span').html(textVille);
    $('#annonce_idCiudad').val($(this).val());
    if(extention == "distrito" || extention == "barrio"){ controlLocalisation(7);}
    else{controlLocalisation(8);}
}

function changeVilles2(){
    controlLocalisation(3);
    var valeur = $(this).children("optgroup").children(":selected").val();
    if( valeur == "9999"){
        controlLocalisation(9);
    }else{
        var extention = $(this).children("optgroup").children(":selected").attr("id");
        var textVille = $(this).children("optgroup").children(":selected").text();
        $('#accordion #location .panel-heading > .panel-title > a > span').html(textVille);
        $('#annonce_idCiudad').val(valeur);
        if(extention == "distrito" || extention == "barrio"){ controlLocalisation(7);}
        else{controlLocalisation(8);}
    }
}

function getDetalleVilles2(){
    var idVille     = $('#villes').val();
    var extention   = $('#villes').children("optgroup").children(":selected").attr("id");
    var textDetalle = $('#villes').children("optgroup").children(":selected").text();
    if(extention == "distrito"){getArrondissement(idVille, textDetalle);}
    else if(extention == "barrio"){getQuartier(idVille, textDetalle);}
}

function getDetalleVilles1(){
    var idVille     = $('#annonce_Ciudad').val();
    var extention   = $('#annonce_Ciudad').children(":selected").attr("id");
    var textDetalle = $('#annonce_Ciudad').children(":selected").text();
    if(extention == "distrito"){getArrondissement(idVille, textDetalle);}
    else if(extention == "barrio"){getQuartier(idVille, textDetalle);}
}

function getDetalleVille(){
    if($('#villes').css('display') == 'none'){getDetalleVilles1();}
    else {getDetalleVilles2();}
}

function getArrondissement(idVille, text){
    var data = {
        idVille: idVille,
    };
    $.ajax({
        dataType: "json",
        type: 'post',
        url: '../arrondissements/'+data['idVille'],
        data: data,
        success: function(data) {
            for(arrond in data){ $('#annonce_Distrito').append("<option id='"+data[arrond].extencion+"' value='"+data[arrond].id+"'>"+data[arrond].distritoFr+"</option>"); }
            controlLocalisation(5);
        },
        error: function(){ console.log('ERROR: District not found');
        }
    })
}

function getQuartier(idVille, text){
    requeteArrondissement(idVille, text);
}

function changeArrondissement(){
    controlLocalisation(4);
    var idArrondissement = $(this).val();
    var text  = $(this).children(":selected").text();
    var ville = "";
    if(!$('#annonce_Ciudad').val()){ ville = $('#villes').children("optgroup").children(":selected").text();}
    else{ ville = $('#annonce_Ciudad').children(":selected").text();}

    $('#accordion #location .panel-heading > .panel-title > a > span').html(ville +" > "+ text);
    $('#annonce_idDistrito').val($(this).val());
    requeteArrondissement(idArrondissement);

}
function requeteArrondissement(idArrondissement){
    var data = {
        idArrondissement: idArrondissement
    };
    $.ajax({
        dataType: "json",
        type: 'post',
        url: '../quartiers/'+data['idArrondissement'],
        data: data,
        success: function(data) {
            for(quartie in data){ $('#annonce_Barrio').append("<option value='"+data[quartie].id+"'>"+data[quartie].barrioFr+"</option>"); }
            controlLocalisation(6);
        },
        error: function(){ console.log('ERROR: Neighborhood not found');
        }
    })
}

function changeQuartier(){
    var ville = "";
    if(!$('#annonce_Ciudad').val()){ ville = $('#villes').children("optgroup").children(":selected").text();}
    else{ ville = $('#annonce_Ciudad').children(":selected").text();}
    var arrondissement = $('#annonce_Distrito').children(":selected").text();
    var quartier       = $('#annonce_Barrio').children(":selected").text();
    var title =  "";
    if(arrondissement == " Sélectionner un Arrondissement ..."){ title = ville+" > "+quartier; }
    else{  title = ville+" > "+arrondissement+" > "+quartier; }
    $('#accordion #location .panel-heading > .panel-title > a > span').html(title);
    $('#annonce_idBarrio').val($(this).val());
}


function controlLocalisation(option){
    $('#bloq').css('display','block');
    if(option == 1 || option == 2 || option == 3 || option == 4 ){
        $('#annonce_Barrio').html('<option> Sélectionner un Quartier ...</option>');
        if(option == 1 || option == 2 ||option == 3) {
            $('#annonce_Distrito').html('<option> Sélectionner un Arrondissement ...</option>');
            $('#annonce_Barrio').html('<option> Sélectionner un Quartier ...</option>');
            $('#annonce_Distrito').css('display','none');
            $('#annonce_Barrio').css('display','none');
            $('#precision-loca').css('display','none');
            if(option == 1 || option == 2){
                $('#annonce_Ciudad').html('<option> Sélectionner une Ville ...</option>');
                if(option == 1){
                    $('#annonce_Provincia').html('<option> Sélectionner une Province/Préfecture ...</option>');
                }
            }
        }
    }
    else if(option == 5 || option == 6){
        $('#annonce_Barrio').css('display','block');
        $('#precision-loca').css('display','none');
        $('#bloq').css('display','none');
        if(option == 5) {
            $('#annonce_Distrito').css('display', 'block');
        }
    }
    else if(option == 7 || option == 8){
        $('#bloq').css('display','none');
        if(option == 7){ $('#precision-loca').css('display','block');}
    }
    else if(option == 9){
        $('#bloq').css('display','none');
        $("#villes").css("display","none");
        $("#annonce_Barrio").css("display","none");
        $("#annonce_Distrito").css("display","none");
        $("#annonce_Region").css("display","block");
        $("#annonce_Provincia").css("display","block");
        $("#annonce_Ciudad").css("display","block");
    }
}

function clickValiderVoiture(){
    $('#bloq').css('display','block');
    dateCreation();
    viderDropsVoitures();
    //valeurDefaultVoiture();
    ajouterGuidVoiture();
    setTimeout("voitureDellates()", 0);
}

function dateCreation(){
    var fecha = new Date();
    var unix = parseInt(fecha.getTime()/1000);
    $('#annonce_unix').val(unix);
    $('#annonce_dCreation_day').val(fecha.getDate());
    $('#annonce_dCreation_month').val(fecha.getMonth());
    $('#annonce_dCreation_year').val(fecha.getFullYear());
    $('#annonce_hCreation_hour').val(fecha.getHours());
    $('#annonce_hCreation_minute').val(fecha.getMinutes());
}

function viderDropsVoitures(){
    $('.panel-body > select').val('');
}

function valeurDefaultVoiture(){
    $('#itemsFormVoiture input').each(function(idx, el) {
        var id = $(el).attr('id');
        if($("#"+id).val() == ""){ $("#"+id).val('0'); }
    });

    var tipo_vehicule = $('input:radio[name=options]:checked').val();
    $("#annonce_tVehicule").val(tipo_vehicule);
}

function ajouterGuidVoiture(){
    var x = guid();
    $('#voiture_idAnnonce').val(x);
    $('#annonce_idAnnonce').val(x);
}

function voitureDellates(){
    $('#voiture_Guardar').trigger('click');
}

function typeVehicule(){
    $('#annonce_tVehicule').val( $(this).val() );
}

function expanderZone(){
    var x =  $(this);
    if(x.attr('aria-expanded') == "true"){
        x.children('i.peq').removeClass('fa-minus-square-o');
        x.children('i.peq').addClass('fa-plus-square-o');
    }
    else{
        x.children('i.peq').removeClass('fa-plus-square-o');
        x.children('i.peq').addClass('fa-minus-square-o');
    }
}

function obtenerLocalisation(idVille){
    var data = {
        idVille  : idVille
    };
    $.ajax({
        dataType: "json",
        type: 'post',
        url: "../../bundles/testfront/source/villes.json",
        data: data,
        success: function(data) {
            for(ville in data.arrayVilles){
                if(data.arrayVilles[ville].ville == idVille){
                    $('#annonce_idProvincia').val(data.arrayVilles[ville].province);
                    $('#annonce_idRegion').val(data.arrayVilles[ville].region);
                }
            }
        },
        error: function(){ console.log('ERROR: JS City not found');
        }
    });
}

function changeMarque(){
    $('#voiture_Modelo').html("Sélectionner un Modèle ...");
    var data = {
        idMarque  : $(this).val(),
    };
    //$('#annonce_idMarque').val($(this).val());
    $.ajax({
        dataType: "json",
        type: 'post',
        url: '../../../vehicule/voitures/'+data['idMarque'],
        data: data,
        success: function(data) {
            console.log(data);
            for(model in data){ $('#voiture_Modelo').append("<option value='"+data[model].id+"'>"+data[model].modele+"</option>"); }
        },
        error: function(){ console.log('ERROR: Car Marks not found');
        }
    })
}

