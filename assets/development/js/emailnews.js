$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

$(document).ready(function() {
	$("#news_save").submit(function(event) {
		event.preventDefault();

		var fields =  JSON.stringify($(this).serializeObject());
        rd_send(fields);

		$.post($(this).attr("action"), $(this).serialize(), function(data, textStatus, xhr) {
			$("#news_save").empty().html("Obrigado!");
		});
	});

	$("#form_contato").submit(function(event) {
		event.preventDefault();

		var fields =  JSON.stringify($(this).serializeObject());
        rd_send(fields);
        
		$.post($(this).attr("action"), $(this).serialize(), function(data, textStatus, xhr) {
			$("#form_contato").empty().html("Obrigado!");
		});
	});

});


function rd_send(fields) {
    $.ajax({
        beforeSend: function(xhrObj){
            xhrObj.setRequestHeader("Content-Type","application/json");
            xhrObj.setRequestHeader("Accept","application/json");
        },
        type: "POST",
        url: "https://www.rdstation.com.br/api/1.3/conversions",       
        data: fields,               
        contentType: "application/json",
        success: function(json){
           console.log(json);
        }
    });
}