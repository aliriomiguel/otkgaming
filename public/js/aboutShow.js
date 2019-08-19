function setShowLanding(about_id,event){
    $.ajax({
        headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type    : "POST",
        url     : "/abouts/"+about_id+"/showlanding",
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

function setHideLanding(about_id,event){
    $.ajax({
        headers :{'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type    : "POST",
        url     : "/abouts/"+about_id+"/hidelanding",
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



function show_active(about_id, event){
    if($('#switch-about'+about_id).is(':checked')){
        setShowLanding(about_id,event);
    }
    else{
        setHideLanding(about_id,event);
    }
}