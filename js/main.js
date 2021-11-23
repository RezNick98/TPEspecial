"use strict"

//let btn_coment = document.getElementById("btn-comentario").addEventListener("submit", addComentarios);

const form_Comentarios = document.getElementById("form-comentarios");
form_Comentarios.addEventListener("submit", noEnviar);

    function noEnviar(){
        event.preventDefault();
    }

    async function getComentarios() {
        try{
            let id_libro = form_Comentarios.getAttribute('data-id_libros');
            let res = await fetch(`http://localhost/Tpe%202%20web/TPEspecial/api/comentarios/${id_libro}`);
            if(res.status == 200){
                console.log(res);
                let comentarios = await res.json()
                let body = document.getElementById("comentarios_section");
                body.innerHTML = " ";
                for (const i of comentarios) {
                    let comentario = i.Comentario;
                    let puntaje = i.puntaje;
                        body.innerHTML += 
                        `
                        <li>Comentario: ${comentario}</li>
                        <li>Puntaje: ${puntaje}</li> 
                        `
                }
            }
        }catch(error){
            console.log(error);
        }
    }

getComentarios();