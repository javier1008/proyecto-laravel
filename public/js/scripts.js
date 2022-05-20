
let perfil = "#perfil";
let vistapdf = "vista-pdf";
let imagenPerfil = "img-perfil";
vistaPDF(perfil, imagenPerfil, vistapdf);


function vistaPDF(p, i, v) {
  document.querySelector(p).addEventListener('change', (e) => {
   let pdfFile = document.querySelector(p).files[0];
   let pdfURL = URL.createObjectURL(pdfFile);
   let pdfSize = e.target.files[0].size.toString();
   let totalSize = parseInt(pdfSize);
   let iframe = document.getElementById(v);
   let vista = document.getElementById(i);

   totalSize <= 2209715 ? document.querySelector(p).value = "" : alert("El archivo es demasiado grande, tamaño máximo 2mb");
   iframe.src = pdfURL;
   iframe.style.width = "100%";
   iframe.style.height = "500px";
   vista.innerHTML = "";
   vista.append(iframe);
   console.log(iframe);

  })
}