//SELECT * FROM courses AS U WHERE NOT 
//EXISTS(SELECT * FROM offering AS T WHERE T.course_code = U.course_code);

$(document).ready(function(){


  $("#delete-a-student").on("click",function(e){
    e.preventDefault();
    var $name=$(this).data("value");
    var $course=$(this).data("course");
     var data='name='+$name+"&course="+$course;
     $.ajax({
      type:"post",
      data:data,
      url:"student_delete_process.php",
      success:function(result){
        //console.log(result);
        $("#storage-result").text(result);
      }
     });
    //console.log("Hello,world"+$name);
  })

//setTimeout($("#pack").modal('show'), 2000);

 $("#student-form").on("submit",function(e){
     e.preventDefault();
     var $url=$(this).attr("action");
     //console.log($url);
      $.ajax({
              type:"post",
              url:$url,
              data:$(this).serialize(),
              success:function(result){
                if(result==="true"){
                  $("#what-student").text("Student successfully added");
                      $("#Result").modal('show');
                  //console.log(result);
                }

                else
                {
                    $("#what-student").text("Error Occured ,Student Info Not Inserted");
                      $("#Result").modal('show');
                  //console.log(result);
                }
               
              }

            })
  })




 $("#lecturer-form").on("submit",function(e){
     e.preventDefault();
     //console.log("Am Clicked");
     var $url=$(this).attr("action");
     //console.log($url);
      $.ajax({
              type:"post",
              url:$url,
              data:$(this).serialize(),
              success:function(result){
                if(result==="true"){
                  $("#what").text("successfully Added Data");
                     $("#Result").modal('show');
                }
                else
                {
                   $("#what").text("Cannot Insert Data.Please Check");
                   $("#Result").modal('show');
                }
               
              }

            })
  })



  $("#admin_login").on("submit",function(e){
     e.preventDefault();
     var $url=$(this).attr("action");
      $.ajax({
              type:"post",
              url:$url,
              data:$(this).serialize(),
              success:function(result){
                if(result==="true"){
                     window.location.href="php/adminDash.php";
                }
                else
                {
                   $("#result").text("Your User Name or Password is Wrong!");
                }
               
              }
            })
  })



 $("#pack").modal('show');
  
$(".s").on("click",function(){
  $(".modal1").modal('show');
})

 $("dl").find("dd").hide();
 $("dl dt").on("click",function(){
  $(this).next().show().siblings("dd").hide();
 })

$("#rn").on("click",function(){
  $("#Register_now").modal('show');
})

  $(".deleteForm").on("click",function(e){
     e.preventDefault();
     var $url=$(this).attr("action");
      $.ajax({
              type:"get",
              url:$url,
              data:$(this).serialize(),
              success:function(result){
                $("#output2").text(result);
                     $("#del").modal('show');
                     window.location.reload();
              }
            })
  })

$(".stopForm").on("click",function(e){
            e.preventDefault();
            console.log("Clicked");
            var $url=$(this).attr("action");
           var haha= $.ajax({
              type:"get",
              url:$url,
              data:$(this).serialize(),
              success:function(result){
                $("#output").text(result);
                     $("#goodAdd").modal('show');
                      //window.location.reload();
                      //location=".mybox_sl";
                      // window.location.reload();
                      // $(".mybox_sl").
              } 
            })  ;
            // haha.always(function(){
            //    window.location.reload();
            // });       
  })

  // $(".stopForm2").on("click",function(e){
  //           e.preventDefault();
  //           console.log("Clicked");
  //           var $url=$(this).attr("action");
  //           $.ajax({
  //             type:"get",
  //             url:$url,
  //             data:$(this).serialize(),
  //             success:function(result){
  //               $("#output").text(result);
  //                    $("#goodAdd").modal('show');
  //             }
  //           });
  // })
	
      
      
   $(".showMeTitle").tooltip({
    placement:'top',
   });
   
    $("button").on("click",function(){
          $(this).popover({
          	placement : 'top'
          });
    });
});