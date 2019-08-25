const backend = "http://localhost:17476";

const url_pagina = backend + `/pagina.svc`;
const url_empresa = backend + `/empresa.svc`;
const url_usuario = backend + `/usuario.svc`;
const url_moneda = backend + `/moneda.svc`;
const url_fingerprint = backend + `/fingerPrint.svc`;


let response = {};

function executeAjax(request = ``, url, type = `POST`) {
    response.success = true;
    response.message = "success";

    try {

        $.ajax({
            type: type,
            url: url,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(request),
            async: false
        }).done(function (data) {
            if (!data.success) {
                response.success = data.success;
                response.message = data.message;
            } else {
                response = data;
            }
        }).fail(function (failData) {
            response.success = false;
            response.message = JSON.stringify(failData);
        });

        return response;

    } catch (error) {
        response.success = false;
        response.mmessage = error.mmessage;
        return response;
    }
};

function executeAjaxAsync(request = ``, url, type = `POST`) {
    response.success = true;
    response.message = "success";

    try {

        $.ajax({
            type: type,
            url: url,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(request),
            async: true
        }).done(function (data) {
            if (!data.success) {
                response.success = data.success;
                response.message = data.message;
            } else {
                response = data;
            }
        }).fail(function (failData) {
            response.success = false;
            response.message = JSON.stringify(failData);
        });

        return response;

    } catch (error) {
        response.success = false;
        response.mmessage = error.mmessage;
        return response;
    }
};

function cargaPaginasPorUsuario(data) {
    try {
        resetResponse();

        response = executeAjax(data, url_usuario + `/userpage`);

        if (!response.success) {
            alert(response.message);
            return response;
        }

        creaMenu(response);

        if (response.success) {
            response.USER = data;
        }

        return response;

    } catch (error) {
        alert("Error: " + error.message);
    }
};

function creaMenu(response) {

    try {

        let menuString = "";
        response.list.forEach(element => {
            console.log(element);
            if (element.ENABLE) {
                menuString += `<a class="btn btn-outline-info btn-sm" href="${element.PATH}">${element.NAME}</a>
            `;
            }
        });

        menuString += `<button type="button" class="btn btn-outline-danger align-middle btn-sm" onclick="window.location.href='/logout'">Cerrar sesion
        <i class="material-icons align-middle">lock</i>
        </button>
                    `;
        delete response["list"];
        response.menuButtons = menuString;

        return response;
    } catch (error) {
        response.success = false;
        response.message = error.message;
        return response;
    }
};

function habilitaDropDown() {
    try {
        $(".dropdown-menu li a").click(function () {
            var selText = $(this).text();
            $(this).parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
        });
    } catch (error) {
        alert(error.message);
    }
};
// let conteoHuella;
function iniciaLector() {
    var respFinger = {};
    try {
        conteoHuella = 3;
        respFinger = executeAjax('', url_fingerprint + '/inicia');

        return respFinger;
    
    } catch (error) {
        respFinger.success = false;
        respFinger.message = error.message;
        return respFinger;
    }
}

// function registrarHuella(){
//     var respFinger = {};
//     try {
//         respFinger = executeAjaxAsync('',url_fingerprint + '/registra');
//         return respFinger;

//     } catch (error) {
//         respFinger.success = false;
//         respFinger.message = error.message;
//         return respFinger;
//     }
// }