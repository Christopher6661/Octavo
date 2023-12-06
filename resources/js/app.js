import Dropzone from "dropzone";
Dropzone.autoDiscover = false;
const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: 'Arrastra tu imágen',
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
    init: function(){ //es para cuando subes una imágen y la validación sale mal, y te permita recuperar la información de la imágen
        if (document.querySelector('[name="imagen"').value.trim()){
            const imagenPublicada = {};
            imagenPublicada.size=1234;
            imagenPublicada.name=document.querySelector('[name="imagen"').value;
            this.options.addedfile.call(this,imagenPublicada);
            this.options.thumbnail.call(this,imagenPublicada,`/uploads/${imagenPublicada.name}`);
            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

dropzone.on("sending",function(file, xhr, formData){
    console.log(formData);
});

dropzone.on("success", function (file,response){
    console.log('respuesta',response);
    console.log('respuesta.imagen',response.imagen);
    document.querySelector('[name="imagen"]').value = response.imagen;
});

dropzone.on("error", function(file,message){
    console.log('file',file);
    console.log('Ocurrio un error',message);
});

dropzone.on("removedFile", function (){
    console.log("Archivo removido");
    document.querySelector('[name="imagen"]').value ='';
});

