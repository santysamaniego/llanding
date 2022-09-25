
const $canvas=document.querySelector("#canvas"),
    $btnDescargar=document.querySelector("#btnDescargar"),
    $btnLimpiar=document.querySelector("#btnLimpiar"),
    $btnGenerarDocumento=document.querySelector("#btnGenerarDcocumento");
const contexto=$canvas.getContext("2d");
const COLOR_PINCEL="black";
const COLOR_FONDO="white";
const GROSOR=2;
let xAnterior=0, yAnterior = 0, xActual=0,yActual=0;
const obtenerXReal=(clientX)=> clientX-$canvas.getBoundingClientRect().left;
const obtenerYReal=(clientY)=> clientY-$canvas.getBoundingClientRect().top;
let haComenzadoDibujo=false;   //   bandera que indica si el usuario esta preionandop el boton del mouse sin soltarlo


const limpiarCanvas=()=>{
    //colocar color blanco de fondo en canvas
    contexto.fillStyle=COLOR_FONDO;
    contexto.fillRect(0,0,$canvas.width, $canvas.height);

};

limpiarCanvas();
$btnLimpiar.onclick=limpiarCanvas;

//escuchar clic del boton para descargar el canvas

$btnDescargar.onclick=()=>{
    const enlace=document.createElement('a');

    //el titulo
    enlace.download="Firma.png";

    //convertir la imagen a Base64 y ponerlo en el enlace
    enlace.href=$canvas.toDataUrl();

    //al hacer clic en él 
    enlace.click();
};

window.obtenerImagen=()=>{
    return $canvas.toDataUrl();
};

$btnGenerarDocumento.onclick=()=>{
    const ventana=window.open("../php/index.php");
};

//lo demas tiene que ver con pintar sobre el canvas en los eventos del mouse
$canvas.addEventListener("mousedown",evento=>{
    //en este evento solo se ha iniciado el clic, asi que dibujamos un punto 
    xAnterior=xActual
    yAnterior=yActual
    xActual=obtenerXReal(evento.clientX);
    yActual=obtenerYReal(evento.clientY);
    contexto.beginPath();
    contexto.fillStyle=COLOR_PINCEL;
    contexto.fillRect(xActual, yActual, GROSOR, GROSOR);
    contexto.closePath();

    //y establecemos la bandera
    haComenzadoDibujo=true;
});

$canvas.addEventListener("mousedown", (evento)=>{
    if(!haComenzadoDibujo){
        return;
    }

    //el mouse se esta moviendo y el usuario esta preionando el boton, asi que dibujamos todo 

    xAnterior=xActual
    yAnterior=yActual
    xActual=obtenerXReal(evento.clientX);
    yActual=obtenerYReal(evento.clientY);
    contexto.beginPath();
    contexto.moveTo(xAnterior,yAnterior);
    contexto.lineTo(xActual,yActual);
    contexto.strokeStyle=COLOR_PINCEL;
    contexto.lineWidth=GROSOR;
    contexto.stroke();
    contexto.closePath();
});

["mouseup", "mouseout"].forEach(nombreDeEvento=>{
    $canvas.addEventListener(nombreDeEvento, ()=>{
        haComenzadoDibujo=false;
    })
})

