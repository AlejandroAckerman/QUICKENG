
cargarPreguntas()

function cargarPreguntas(){
    let ID =0;
    let html= "";
    let preguntas = [...BaseDePreguntas]
    preguntas.sort(()=>Math.random()-0.5);
    BaseDePreguntas = preguntas.slice(0,10)
    for (const p of BaseDePreguntas){
        let opciones = [...p.distractores];
        opciones.push(p.respuesta);
        for (let i = 0; i < 4; i++){
            opciones.sort(()=> Math.random() - 0.5);
        }
        html +=` 
            <div id="encabezado-pregunta">
            ${
                p.ayuda
                ?`<div style=" text-align:right;">
                <a class="btn btn-primary" onclick="
                    Swal.fire(
                        'HERE IS A CLUE',
                        '${p.ayuda}',
                        'info'
                    )
                ">
                    help
                </a>
                </div>`
                :""
            }
                <span id="pregunta">
                    ${p.pregunta}
                </span>
            </div>
        <div> 
            <input type="radio" name="opcion-${ID}" id="opcion1-${ID}">
            <label for="opcion1-${ID}" id="label1-${ID}">${opciones[0]} </label>
        </div>
        <div> 
            <input type="radio" name="opcion-${ID}" id="opcion2-${ID}">
            <label for="opcion2-${ID}"  id="label2-${ID}">${opciones[1]}</label>
        </div>
        <div> 
            <input type="radio" name="opcion-${ID}" id="opcion3-${ID}">
            <label for="opcion3-${ID}" id="label3-${ID}">${opciones[2]}</label>
        </div>
        <div> 
            <input type="radio" name="opcion-${ID}" id="opcion4-${ID}">
            <label for="opcion4-${ID}" id="label4-${ID}">${opciones[3]}</label>
        </div>`
        ID++
    }
    document.getElementById("contenedor").innerHTML =html
}


async function hefinalizado(){
    let contadorPuntos = 0 
    let html =``

    for(let i =0; i < BaseDePreguntas.length; i++){
        p = BaseDePreguntas[i]
        for(let j =1; j <= 5; j++){
            if(j==5){
                await Swal.fire({
                        title:"warning",
                        text:"por favor responde todas las preguntas antes de continuar",
                        icon : "warning"
                });
                return
            }

           if(document.getElementById(`opcion${j}-${i}`).checked){
               let txt =  document.getElementById(`label${j}-${i}`).innerHTML
             if(p.respuesta.trim() == txt.trim() ){
                contadorPuntos++
             }else{
                
             }
             break;
           }
        }
    }

    html +=`</ol>`
    puntaje =(100*contadorPuntos)/BaseDePreguntas.length
    html=
        `<h1>SCORE: ${puntaje.toFixed(2)}% </h1>` + html;
        document.getElementById("resumen").innerHTML = html;
        swal.fire({
            title:puntaje<60? "so bad. try again":"very good",
            html,
            icon:puntaje<60? "error":"success"
        })
}