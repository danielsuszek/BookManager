$(document).ready(function() {    
    $("#byTitle").hide();
    $("#byGenre").hide();
    $( "#findMethod" ).change(function() {        
        var val = $("#findMethod").val();
        
        if (val === 'author') {                        
            $("#byAuthor").show();
            
            $("#byTitle").hide();            
            $("#byGenre").hide();            
        }
        if (val === 'title') {                        
            $("#byTitle").show();
            
            $("#byAuthor").hide();            
            $("#byGenre").hide();            
        }
        if (val === 'genre') {                                    
            $("#byGenre").show();
            
            $("#byAuthor").hide();            
            $("#byTitle").hide();            
        }
    });
    /*
    $(".delete").click(function(){
        var r = confirm("Usunąć wybraną książkę?");
        if (r == true) {
                        
        } else {
            return false;
        }        
    });
    */
});