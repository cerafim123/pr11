<script src='https://code.jquery.com/jquery-3.6.3.min.js'></script>
  <head>
    <?
    require "include/lab11.json";
    ?>
</head>
<div>
    <input type="button" value="json" onclick="savejson">
    <input type="button" value="txt"/>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js">
    $("document").ready(function(){
      $("[value='json']").on("click",function(){
        $.ajax({
          url:"include/json.php",
          method: "POST",
          data:{
            "body":<?=json_encode($employes);?>
          },
          async: false,
          success: function(data){
            $('#CSV_result').html(JSON.parse(data))
          }
        });
      })
    })
  </script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js">
    $("document").ready(function(){
      $("[value='txt']").on("click",function(){
        $.ajax({
          url:"include/txt.php",
          method: "POST",
          data:{
            "body":<?=json_encode($employes);?>
          },
          async: false,
          success: function(data){
            $('#CSV_result').html(JSON.parse(data))
          }
        });
      })
    })
  </script>

