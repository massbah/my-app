$(document).ready(function(){

 var $progress=$(".progress");



$progress.hide();

var $progressBar=$(".progress-bar");

$(".uploading-file").on("click",function(e){
  e.preventDefault();
})

$(".uploading-file").ajaxForm({
  beforeSend:function(){
    //console.log("before send");
    $progressBar.show();
  },
  uploadProgress:function(e,p,t,percent){
    $progressBar.width(percent+"%");
    $(".progress-status").text(percent+" %");
  },
  success:function(){
   //console.log("success send");
   $progress.hide();
  },
  complete:function(result){ 
    //console.log(result);
    if(result=="Error"){
      $(".myfile").text("Error cannot file");
    }else
   $(".myfile").html("<img src='"+result.responseText+"' width='100px'/>");
    //console.log(result);
  }

})


})

