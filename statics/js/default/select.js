$(function() {
  var zizhi_json={$zizhi_json};
  $("#select1").change(function(){
    var selectid=$(this).val();

    $("#select2").empty("option");
    $.each(zizhi_json,function(k,v){
      if(v.parentid==selectid){
        var option="<option value="+v.linkageid+">"+v.name+"</option>";
        $("#select2").append(option);
      }
    });
    var first=$("#select2").find("option").eq(0).val();
      $("#select3").empty("option");
      $.each(zizhi_json,function(k,v){
       if(v.parentid==first){
         var option="<option value="+v.linkageid+">"+v.name+"</option>";
         $("#select3").append(option);
       }
    });

  });
  $("#select2").change(function(){
    var selectid=$(this).val();
    $("#select3").empty("option");
    $.each(zizhi_json,function(k,v){
      if(v.parentid==selectid){
        var option="<option value="+v.linkageid+">"+v.name+"</option>";
          $("#select3").append(option);
      }
    });
  });

  $(".forms").submit(function(e){
    $("#titleselect").text();
    $(".bot").html();
    var url=$(this).attr("action");
       $.ajax({
         url:url,
         data:$(this).serialize(),
         type:"GET",
         dataType:"JSON",
         success:function(data)
         {

           $("#titleselect").text(data.title);
           $(".bot").html(data.content);
         }
       });
      e.preventDefault();
  });

});
