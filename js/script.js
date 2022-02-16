$("document").ready(function(){
    $('#submit').click(function(){
        
        var sexe = $("#sexe").val();
        var nom = $("#nom").val();

        if(nom != "")
        {
            $.ajax(
                {
                    url     : 'addSexe.php',
                    type    : 'POST',
                    data    : {sexe: sexe, nom: nom},
                    success : function(reponse)
                    {
                        // alert(reponse)
                        if(reponse == 1)
                        {
                            // $("#sexe").val("");
                            setTimeout(function()
                            {
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            alert(reponse);
                            // alert("Utilisateur non Ajouté");
                        }
                    },
            
                    // error: function(reponse)
                    //         {
                    //             alert(reponse);
                    //         }   
                });
        }
        else
        {
            $("#sexe").addClass("is-invalid");
        }
    }); 

    $('#submit').click(function(){
        
        var sexe = $("#sexe").val();
        var nom = $("#nom").val();

        if(nom != "")
        {
            $.ajax(
                {
                    url     : 'addSexeDWH.php',
                    type    : 'POST',
                    data    : {sexe: sexe, nom: nom},
                    success : function(reponse)
                    {
                        // alert(reponse)
                        if(reponse == 1)
                        {
                            // $("#sexe").val("");
                            setTimeout(function()
                            {
                                window.location.reload();
                            }, 2000);
                        }
                        else
                        {
                            alert(reponse);
                            // alert("Utilisateur non Ajouté");
                        }
                    },
            
                    // error: function(reponse)
                    //         {
                    //             alert(reponse);
                    //         }   
                });
        }
        else
        {
            $("#sexe").addClass("is-invalid");
        }
    }); 
});