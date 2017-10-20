<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="inner clear">
    <div class="left fl">
        <div class="left1">查询你要办理的</div>
        <div class="left2">资质信息</div>
    </div>
    <div class="line fl"><img src="<?php echo IMG_PATH;?>default/li2_03.png"></div>
    <div class="right fl clear">
      <form class="forms"  action="/index.php?m=content&c=index&a=search" method="get">
        <p class="fl">序列</p>
        <?php
        $zizhi_linkage = getcache(3360,'linkage');
        $zizhi_data = $zizhi_linkage[data];
        $zizhi_json=json_encode($zizhi_data);
        ?>
        <select class="select1 fl" id="select1" name="se1">
        <?php $n=1; if(is_array($zizhi_data)) foreach($zizhi_data AS $k => $r) { ?>
        <?php if($r[parentid]==0) { ?>
         <option value="<?php echo $k;?>"><?php echo $r['name'];?></option>
        <?php } ?>
        <?php $n++;}unset($n); ?>
       </select>
        <p class="fl">类型</p>

        <select class="select2 fl" id="select2" name="se2">
           <?php foreach($zizhi_data as $k=>$v) :?>
            <?php if($v[parentid]==3361) { ?>
            <option value="<?php echo $k;?>"><?php echo $v['name'];?></option>
            <?php } ?>
          <?php endforeach;?>
        </select>
        <p class="fl">等级</p>
        <select class="select3 fl" id="select3" name="se3">
          <?php foreach($zizhi_data as $k=>$v) :?>
           <?php if($v[parentid]==3365) { ?>
           <option value="<?php echo $k;?>"><?php echo $v['name'];?></option>
           <?php } ?>
         <?php endforeach;?>

        </select>

        <input type="submit" class="sub fr" value="查询">
      </form>

    </div>
</div>
<script type="text/javascript">
  $(function() {
    var zizhi_json=<?php echo $zizhi_json;?>;
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
</script>
