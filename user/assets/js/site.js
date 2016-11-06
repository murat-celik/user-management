/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function startLoading(message) {
    $('#loading-message').text(message);
    $('#loading-layout').show();
}
function stopLoading() {
    $('#loading-message').text('');
    $('#loading-layout').hide();
}

function displayMessage(message){
    $("#display-message").modal();
}

var ajaxStatus = true; //  Discard Client Request When Previous Request Still Not Response
function ajax(url, data, callBack, loading, isHtml) {
    if (ajaxStatus = true) {
        
        ajaxStatus = false;

        if (loading != 'undefined' && loading != undefined){
            if(loading == true)         startLoading();
            else if(loading.length > 0) startLoading(loading);
        }

        $.ajax({
            method: "POST",
            url: url,
            data: $.isPlainObject(data) ? $.extend({ 'ajax': 1 }, data) : data +"&ajax=1",
            dataType: (isHtml != 'undefined' && isHtml == true)  ? 'HTML' : 'JSON',
            complete: function () { ajaxStatus = true; stopLoading();},
            success: function (response) {

                if (isHtml != 'undefined' && isHtml == true) {
                    callBack(response);
                } else if (response.status == 1) {
                    callBack(response.data);
                } else {
                    if (response.message !='undefined' && response.message != "") {
                        displayMessage(response.message);
                    } else {
                        displayMessage('İşlem Gerçekleştirilemedi!');
                    }
                }

            },
            error: function (xhr) { ajaxStatus = true; stopLoading();}
        });
    }
}
