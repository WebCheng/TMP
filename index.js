var check=function(){
    var select_op=$('#select_op').val();
    $.ajax({
        url: "index.php",
        data: "&select_op="+select_op,
        type:"POST",

        success: function(result){
            document.getElementById("message").innerHTML=result;
        },

        error:   function(jqXHR, textStatus, errorThrown){
            document.getElementById("message").innerHTML=errorThrown;
        }
    });

}

// var testCheck=function(){
//     var select_op=$('#select_op').val(); 
//     $.ajax({
//         url: "index.php",
//         data: "&select_op="+select_op,
//         type:"POST",
//         dataType:'json',

//         success: function(result){
            
//             $.each(result, function () {
//                 console.log("name: " + this.name);
//                 console.log("district: " + this.district);
//                 console.log("population: " + this.population);
//                 console.log(" ");
//             });
//             var count_elements = Object.keys(result).length; 
//             // count_elements = Object.keys(data).length; 
//             document.getElementById("message").innerHTML=count_elements;
//         },

//         error:   function(jqXHR, textStatus, errorThrown){
//             document.getElementById("message").innerHTML=errorThrown;
//         }
//     });

// }