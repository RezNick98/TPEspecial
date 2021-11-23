"use strict"

const form_comentarios = document.getElementById("form-comentarios");

let prueba = form_comentarios.getAttribute('data-id_usuario');
console.log(prueba);
form_comentarios.addEventListener("submit", noEnvia);

function noEnvia(){
    event.preventDefault();
    console.log("no envia");
}

async function getComentarios(){
    try{
        let idLibro = form_comentarios.getAttribute('data-id_libros');
            console.log(idLibro);
        let res = await fetch(`http://localhost/Tpe%202%20web/TPEspecial/api/comentarios/${idLibro}`);
        if(res.status == 200){
            console.log(res);
            let tablaComentario = await res.json();
            let section = document.getElementById("comentarios-section");
                section.innerHTML = " ";

            for (const comentario of tablaComentario) {
                let usuario = comentario.Nombreusuario;
                let comentarioString = comentario.Comentario;
                let puntaje = comentario.Puntaje;
                let id = comentario.Id_librofk;
                section.innerHTML += 
                `
                <thead>
                    <th>Usuario: ${usuario}</th>
                </thead>
                <tbody>
                    <tr>
                        <td>${comentarioString}</td>
                        <td>Puntaje: ${puntaje}</td>
                        <td>N°Libro: ${id}</td>
                    </tr>
                </tbody>
                `
                console.log(comentario);
            }
        }
    }catch(error){
        console.log(error);
    }
}

getComentarios();

document.getElementById("btn-comentario").addEventListener("click", addComent);

async function addComent(){
    let idUsuario = form_comentarios.getAttribute('data-id_usuario');
    let comentario = document.getElementById("comentario").value;
    let puntaje = document.getElementById("puntaje").value;
    let idLibro = form_comentarios.getAttribute('data-id_libros');

    let coment = {
        "Id_usuariofk": idUsuario,
        "Comentario": comentario,
        "Puntaje": puntaje,
        "Id_librofk": idLibro
    }

    try{
        let res = await fetch(`http://localhost/Tpe%202%20web/TPEspecial/api/comentarios`, {
            "method": "POST",
            "headers": {"Content-type": "application/json"},
            "body": JSON.stringify(coment)
        });
        
            if(res.status === 201){
                getComentarios();
                
            }
    }catch(error){
        console.log(error);
    }

}