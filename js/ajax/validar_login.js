$(document).ready(function () {
     $('#form').submit(function (e) { 
         
         const login  = {
            user:$('#user').val(),
            contrasena:$('#contrasena').val(),

         }
         console.log(login); 
         
         $('#form').trigger('reset');
         
         e.preventDefault();
     }); 
 
}); 

