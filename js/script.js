$(document).ready(function(){
	$(".admin").hide();
	$(".users").hide();
	$(".select_users").mouseover(function(){
		$(".admin").fadeIn(500);
	});
	$(".navigation").mouseleave(function(){
		$(".admin").hide();
	});
});



$(document).ready(function(){
	$('.favs li').draggable({
        helper: 'clone',
        drag: function() {
            $('.trash').addClass('trash_hover');
        } // End drag function 
    }); // End draggable

	$('.trash').droppable({
        accept: '.favs li', 
        drop: function(event, ui) {
            $id = $(ui.draggable).attr('id');
            $('.favs #' + $id).remove();
            
            $.ajax({
            url:"ajax/delete-favs.ajax.php",
            type:"POST",
            data:{
                'book_id':$id,
                'user_id':$user_id
            }
        });
        }
         // End drop function
    }); 

});


$(document).ready(function(){
    var timer;
    $('.home span').hide();
    $('.home').hover(function(){
            $(this).find('span').fadeIn(200);
    },function(){
        $(this).find('span').hide();
    });
});


$(document).ready(function(){
    var timer;
    $('.search_books_link span').hide();
    $('.search_books_link').hover(function(){
            $(this).find('span').fadeIn(200);
    },function(){
        $(this).find('span').hide();
    });

});

$(window).scroll(function(){
    $('.category_menu').css('top', $(document).scrollTop());
});

$(document).ready(function(){
     if($(".category_hidden").text()!="111"){
            var s="."+$(".category_hidden").text()
            $(s).css("background-color","#A32824");
            $(s).css("color","white");
    }
});
