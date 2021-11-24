"use strict"

console.log("hola");

const url = `http://localhost/Tpe%202%20web/TPEspecial/api/comentarios`;
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
        let idUsuario = form_comentarios.getAttribute('data-id_usuario');
            console.log(idLibro);
        let res = await fetch(`${url}/${idLibro}`);
        if(res.status == 200){
            console.log(res);
            let tablaComentario = await res.json();
            let section = document.getElementById("comentarios-section");
                section.innerHTML = " ";

            for (const comentario of tablaComentario) {
                let idComentario = comentario.Id_comentario;
                let usuario = comentario.Nombreusuario;
                let comentarioString = comentario.Comentario;
                let puntaje = comentario.Puntaje;
                let id = comentario.Id_librofk;
                if(idUsuario > 0){
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
                }else{
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
                        <tr>
                            <td><button id="${idComentario}">Eliminar</button></td>
                        </tr>
                    </tbody>
                    `
                    
                    console.log(idComentario);
                    setTimeout(function(){
                        crearEventoEliminar(`${idComentario}`);
                    }, 1)
                }
                
            }
        }
    }catch(error){
        console.log(error);
    }
}

function crearEventoEliminar(id) {
    if(id != null){
    document.getElementById(`${id}`).addEventListener("click", function(){
        deleteComent(id);
    });
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
    console.log(coment);

    try{
        let res = await fetch(`${url}`, {
            "method": "POST",
            "headers": {"Content-type": "application/json"},
            "body": JSON.stringify(coment)
        });
        console.log(res);
            if(res.status === 201){
                console.log("Se posteo con exito");
                getComentarios();
                document.getElementById("comentario").value = "";
                document.getElementById("puntaje").value = "";
            }
    }catch(error){
        console.log(error);
    }

}

async function deleteComent(id) {
    try{
        let res = await fetch(`${url}/${id}`, {
            "method": "DELETE"
        });

            if(res.status == 200){
                console.log("Eliminado con exito");
                getComentarios();
            }
    }catch(error){
        console.log(error);
    }
}


// document.getElementById("descendente").addEventListener("click", ordenar);

// function ordenar() {
    
// }