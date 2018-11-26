window.onload  = function()
{


    var formulario = document.querySelector("#form")
    var email = document.getElementById("userEmail")
    var password = document.getElementById("inputPassword6")
    var errorPassword = document.getElementById("errorPassword")
    var errorEmail = document.getElementById("errorEmail")


formulario.onsubmit = function(e)
{
    if (!validaciones()){
     e.preventDefault()
   }
   else{
      formulario.submit
   }
   
}
function validaciones() {

    if(email.value === "" || email.value === null)
    {


       errorEmail.innerHTML = "Debe ingresar un email"
       errorEmail.setAttribute("class","invalid-feedback" )
       email.setAttribute("class", "form-control is-invalid")
       email.addEventListener("change", changeEmail)

       return false
    }
    if(email.value === "" || email.value === null || emailRegex.test(email.value)!==true)
      {
         errorEmail.innerHTML = "El  email ingresado no es valido"
         errorEmail.setAttribute("class","invalid-feedback" )
         email.setAttribute("class", "form-control is-invalid")
         email.addEventListener("change", changeEmail)
         return false
      }

    function changeEmail(){
                errorEmail.innerHTML = ""
                errorEmail.setAttribute("class","" )
                email.setAttribute("class", "form-control")
                     }

                     if(password.value === "" || password.value === null)
                     {    
                        errorPassword.innerHTML = "Debe ingresar un contraseña"
                        errorPass.setAttribute("class","invalid-feedback" )
                        password.setAttribute("class", "form-control is-invalid")
                        password.addEventListener('change', changePassword)
                        return false;
        
                     }
                     function changePassword()
                        {
                        errorPass.innerHTML = ""
                        errorPass.setAttribute("class","" )
                        password.setAttribute("class", "form-control")
                        }

                    }
                
                }