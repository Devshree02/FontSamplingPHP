$(document).ready(function(){
  $("#inputtextid").val("");
  $("#outputdivid").val("");

  $("#inputtextid").change(function() {
    $("#outputdivid").text($("#inputtextid").val());
  })

  $("input").click(function() {
    switch ($("input[name='backgroundColor']:checked").val()) {
      case "yellow":
        $("#outputdivid").css({"background-color": "yellow"});
        break;
      case "red":
        $("#outputdivid").css({"background-color": "red"});
        break;
      case "black":
        $("#outputdivid").css({"background-color": "black"});
        break;
      case "green":
        $("#outputdivid").css({"background-color": "green"});
        break;
      default : 
        $("#outputdivid").css({"background-color": "white"});          
    }

    switch ($("input[name='fontColor']:checked").val()) {
      case "yellow":
        $("#outputdivid").css({"color": "yellow"});
        break;
      case "red":
        $("#outputdivid").css({"color": "red"});
        break;
      case "black":
        $("#outputdivid").css({"color": "black"});
        break;
      case "green":
        $("#outputdivid").css({"color": "green"});
        break;
      default : 
        $("#outputdivid").css({"color": "black"});          
    }

    switch ($("input[name='fontStyle']:checked").val()) {
      case "sansSerif":
        $("#outputdivid").css({"font-family": "sans serif"});
        break;
      case "monospace":
        $("#outputdivid").css({"font-family": "monospace"});
        break;
      case "cursive":
        $("#outputdivid").css({"font-family": "cursive"});
        break;
      case "fantasy":
        $("#outputdivid").css({"font-family": "fantasy"});
        break;
      default : 
        $("#outputdivid").css({"font-family": "Times New Roman"});          
    }
    // window.alert($("input[name='inp']:checked").val());
  });

}); 