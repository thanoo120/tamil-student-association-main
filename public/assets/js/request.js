function request(url, method, data, callback,loader=true){
    var result = {};
    setTimeout(() => {
        try{
            $.ajax({
                type: method,
                dataType: 'json',
                url: url,
                timeout: 50000,
                data: data,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Accept': "application/json",
                    // 'Authorization': 'Bearer ' + getSessionToken()
                },
                success: function(response, textStatus ){
                    result.data = response;
                    result.is_success = true;
                    result.msg = "Request was successful";
                    callback(result);
                    hidePageloader()
                },
                fail: function(xhr, textStatus, errorThrown){
                    result.is_success = false;
                    result.msg = "Sorry something went wrong. Please check your Internet connection.";
                    result.exception = errorThrown;
                    callback(result);
                    hidePageloader();
                },
                error: function(xhr, textStatus) {
                    result.is_success = false;
                    result.msg = "Sorry something went wrong. Please check your Internet connection.";

                    if(xhr.responseJSON){
                        if(xhr.responseJSON.message){
                            result.msg =  xhr.responseJSON.message;
                       }
                    }

                    callback(result);
                    hidePageloader();
                }
            });
        }
        catch(err){
            result.is_success = false;
            result.msg = "Sorry something went wrong. Please check your Internet connection.";
            result.exception = err;
            callback(result);
            hidePageloader();
        }
    }, 200);
}

function hidePageloader(){
    $("#page-loader").hide();
    $(".main-cont").show();
}
