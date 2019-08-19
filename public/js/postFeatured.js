function setFeatured(post_id,event){
    $.ajax({
        headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type    : "POST",
        url     : "/posts/"+post_id+"/setfeatured",
        dataType: "json",
        success : function(response){
            if(response["accept"]!=1){
                $.escapeSelector({
                    title:'Sorry',
                    theme: 'bootstrap',
                    content: response["alert"],
                });
                $(event).prop('cheked',false);
            }
        },
        error : function (e) {
			$(this).alert({
				title: 'Sorry, there was an error',
				theme: 'bootstrap',
				content: e.responseJSON.message
			});
			$(event).prop('checked', false);
		}

    }).done(function(){});
}

function unsetFeatured(post_id,event){
    $.ajax({
        headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type    : "POST",
        url     : "/posts/"+post_id+"/unsetfeatured",
        dataType: "json",
        success : function(response){
            if(response["accept"]!=1){
                $.escapeSelector({
                    title:'Sorry',
                    theme: 'bootstrap',
                    content: response["alert"],
                });
                $(event).prop('cheked',false);
            }
        },
        error : function (e) {
			$(this).alert({
				title: 'Sorry, there was an error',
				theme: 'bootstrap',
				content: e.responseJSON.message
			});
			$(event).prop('checked', false);
		}

    }).done(function(){});
}



function featured(post_id, event){
    if($('#switch'+post_id).is(':checked')){
        setFeatured(post_id,event);
    }
    else{
        unsetFeatured(post_id,event);
    }
}