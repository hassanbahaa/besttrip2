var $;

$(document).ready(function () {
	
	'use strict';
	$(".img_1").on("click",function(){
        
        $(".popup-con").css("display","flex");
        $(".serv_1").siblings().css("display","none");
        $(".serv_1").css("display","block");
        $("body").css("overflow-y", "hidden");

        
        

    });

    $(".img_2").on("click",function(){
        
        $(".popup-con").css("display","flex");
        $(".serv_2").siblings().css("display","none");
        $(".serv_2").css("display","block");
        $("body").css("overflow-y", "hidden");

    });

    $(".img_3").on("click",function(){
        
        $(".popup-con").css("display","flex");
        $(".serv_3").siblings().css("display","none");
        $(".serv_3").css("display","block");
        $("body").css("overflow-y", "hidden");

    });
    

    $(".img_4").on("click",function(){
        
        $(".popup-con").css("display","flex");
        $(".serv_4").siblings().css("display","none");
        $(".serv_4").css("display","block");
        $("body").css("overflow-y", "hidden");


    });
    

    $(".img_5").on("click",function(){
        
        $(".popup-con").css("display","flex");
        $(".serv_5").siblings().css("display","none");
        $(".serv_5").css("display","block");
        $("body").css("overflow-y", "hidden");

    });
    

    $(".img_6").on("click",function(){
      
        $(".popup-con").css("display","flex");
        $(".serv_6").siblings().css("display","none");
        $(".serv_6").css("display","block");
        $("body").css("overflow-y", "hidden");

    });
    
    // closing

   

});



$(document).click(function(event) {
    //if you click on anything except the modal itself or the "open modal" link, close the modal
    if (!$(event.target).closest(".popup,.serv_img,.content").length) {
      $("body").find(".popup-con").css("display","none");
      $("body").css("overflow-y", "scroll");
    }
  });


  $(document).ready(function () {
  $(".closing").on("click",function(){
      
    $(".popup-con").css("display","none");
    // $(".serv_6").siblings().css("display","none");
    $(".popup").css("display","none");
    $("body").css("overflow-y", "scroll");

});

});


