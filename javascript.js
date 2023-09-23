// elemento del rasca uno por rasca
var rasca_1 = document.getElementById("rasca_1"),
  rascaCanvas_1 = rasca_1.getContext("2d"),
  brushRadius = (rasca_1.width / 100) * 5,
  img_1 = new Image();
var toques_1 = 0;
/* parametros de la imagen que carga para tapar el rasca */
img_1.loc = "https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/";
img_1.filename = "calgary-bridge-2013.jpg";
if (window.devicePixelRatio >= 2) {
  var nameParts = img_1.filename.split(".");
  img_1.src = img_1.loc + nameParts[0] + "-2x" + "." + nameParts[1];
} else {
  img_1.src = img_1.loc + img_1.filename;
}

if (brushRadius < 50) {
  brushRadius = 50;
}

//detecta si el boton izquierdo del mouse hace algo

function detectLeftButton(event) {
  if ("buttons" in event) {
    return event.buttons === 1;
  } else if ("which" in event) {
    return event.which === 1;
  } else {
    return event.button === 1;
  }
}

//la imagen del rasca, hay 3 objetos uno por rasca aqui detecta que la carga
img_1.onload = function () {
  rascaCanvas_1.drawImage(img_1, 0, 0, rasca_1.width, rasca_1.height);
};

// x e y de posicion del raton dentro de cada rasca para colocar cursor
function getBrushPos(xRef, yRef) {
  var rascaRect_1 = rasca_1.getBoundingClientRect();
  return {
    x: Math.floor(
      ((xRef - rascaRect_1.left) / (rascaRect_1.right - rascaRect_1.left)) *
        rasca_1.width
    ),
    y: Math.floor(
      ((yRef - rascaRect_1.top) / (rascaRect_1.bottom - rascaRect_1.top)) *
        rasca_1.height
    ),
  };
}
// x e y de cada canvas uno por rasca
function drawDot(mouseX, mouseY) {
  rascaCanvas_1.beginPath();
  rascaCanvas_1.arc(mouseX, mouseY, brushRadius, 0, 2 * Math.PI, true);
  rascaCanvas_1.fillStyle = "#000";
  rascaCanvas_1.globalCompositeOperation = "destination-out";
  rascaCanvas_1.fill();
}
//controla si pulsa el mouse una por cada rasca
rasca_1.addEventListener(
  "mousemove",
  function (e) {
    var brushPos = getBrushPos(e.clientX, e.clientY);
    var leftBut = detectLeftButton(e);
    if (leftBut == 1) {
      drawDot(brushPos.x, brushPos.y);
    }
  },
  false
);
//controla si si pulsa el dedo una por cada rasca
rasca_1.addEventListener(
  "touchmove",
  function (e) {
    e.preventDefault();
    var touch = e.targetTouches[0];

    if (touch) {
      var brushPos = getBrushPos(touch.pageX, touch.pageY);
      drawDot(brushPos.x, brushPos.y);
      toques_1++;
    }
    if (toques_1 > 50) {
      console.log("ya tocado los cojones");
    }
  },
  false
);

/*Inicio duplicado de funciones */

//la imagen del rasca, hay 3 objetos uno por rasca aqui detecta que la carga
img_2.onload = function () {
  rascaCanvas_2.drawImage(img_2, 0, 0, rasca_2.width, rasca_2.height);
};

// x e y de posicion del raton dentro de cada rasca para colocar cursor
function getBrushPos_2(xRef, yRef) {
  var rascaRect_2 = rasca_2.getBoundingClientRect();
  return {
    x: Math.floor(
      ((xRef - rascaRect_2.left) / (rascaRect_2.right - rascaRect_2.left)) *
        rasca_2.width
    ),
    y: Math.floor(
      ((yRef - rascaRect_2.top) / (rascaRect_2.bottom - rascaRect_2.top)) *
        rasca_2.height
    ),
  };
}
// x e y de cada canvas uno por rasca
function drawDot_2(mouseX, mouseY) {
  rascaCanvas_2.beginPath();
  rascaCanvas_2.arc(mouseX, mouseY, brushRadius, 0, 2 * Math.PI, true);
  rascaCanvas_2.fillStyle = "#000";
  rascaCanvas_2.globalCompositeOperation = "destination-out";
  rascaCanvas_2.fill();
}
//controla si pulsa el mouse una por cada rasca
rasca_2.addEventListener(
  "mousemove",
  function (e) {
    var brushPos = getBrushPos_2(e.clientX, e.clientY);
    var leftBut = detectLeftButton(e);
    if (leftBut == 1) {
      drawDot_2(brushPos.x, brushPos.y);
      console.log("estoy tocando_2");
    } else {
      console.log("ya no estoy tocando_2");
    }
  },
  false
);
//controla si si pulsa el dedo una por cada rasca
rasca_2.addEventListener(
  "touchmove",
  function (e) {
    e.preventDefault();
    var touch = e.targetTouches[0];

    if (touch) {
      var brushPos = getBrushPos_2(touch.pageX, touch.pageY);
      drawDot_2(brushPos.x, brushPos.y);
      console.log("estoy tocando movil_2");
      toques_2++;
    } else {
      console.log("ya no toco movil_2");
    }
    if (toques_2 > 50) {
      console.log("ya tocado los cojones_2");
    }
  },
  false
);
// example of image charge
const image = new Image();
const imageUrl = "../material/1.jpg";

const loadingImage = new Image();
loadingImage.src = "../material/2.jpg";
document.body.appendChild(loadingImage);

image.onload = () => {
  // La imagen está completamente cargada
  // Puedes mostrar la imagen en tu página aquí
  document.body.appendChild(image);

  // Eliminar la imagen de carga
  document.body.removeChild(loadingImage);
};

image.onerror = () => {
  console.error("Error al cargar la imagen.");
};

image.src = imageUrl;
