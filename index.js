var check=function(){
    var select_op=$('#select_op').val();
    $.ajax({
        url: "index.php",
        data: "&select_op="+select_op,
        type:"POST",
        dataType:'text',

        success: function(message){
            document.getElementById("message").innerHTML=message;
        },

        error:   function(jqXHR, textStatus, errorThrown){
            document.getElementById("message").innerHTML=errorThrown;
        }
    });

}