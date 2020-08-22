function EnviarMensaje(){
    name=$("#name").val();
    email=$("#email").val();
    subject=$("#subject").val();
    message=$("#message").val();
    var datos =[];
    datos.push(name,email,subject,message);
    datos=JSON.stringify(datos);
    console.log(datos);
    $.post("./Enviar.php",{valorBusqueda:datos})
    .then(()=>{
        alert("Mensaje enviado con éxito!");
    })
}