function showError(field, message){
    if (message && message[field] && message[field].length > 0) {
        $('#' + field)
            .removeClass("alert border-green-500 text-green-500 border-gray-300")
            .addClass("border-red-500 text-red-500")
            .siblings(".invalid_feedback")
            .text("");
            console.log(field + ':' + Boolean(message && message[field]), message[field].length);
     }else {
        $('#' + field)
            .removeClass("border-red-500 text-red-500")
            .addClass("border-green-500 text-green-500")
            .siblings(".invalid_feedback")
            .text(message);
    }
}

function removeValidationClasses(forms){
    $(forms).each(function(){
    $(forms).find(':input').removeClass('is_valid, is_invalid');
    });
}
function showMessage(type, message){
    return `<div class="flex bg-${type == 'success' ? 'green' : 'red' }-100 rounded-lg p-4 mb-4"><svg class="w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg><p class="ml-3 text-sm text-blue-700"><span class="font-medium">${message}</span> </p></div>`;
}

function logout(buttonclicked, formID) {
    $('#'+buttonclicked).click(function(e){
        e.prenvetDefault();
        formID.submit();
    })
    
}