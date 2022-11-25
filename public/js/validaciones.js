const validarEliminar = document.querySelectorAll('#action');
const cerrar = document.getElementById('cerrar');
const cancelar = document.getElementById('cancelar');
const modal = document.getElementById('modal');
const link = document.getElementById('linkdelete');

//elemento para actualizar
const update = document.getElementById('update');
//elemntos para cambiar de nombre al modal
const title = document.getElementById('title');
const p = document.getElementById('p');

//elemento para el formulario
const form = document.getElementById('form');
//Funcion agregar link para eliminar una noticia
const validar = (e) => {
    if (e.target.name === 'delete') {
        link.href = `http://localhost/Lab3TW/noticia/eliminar?id=${e.target.id}`;
        modal.classList.toggle('displayR');
    }
    if (e.target.name === 'update') {
        e.preventDefault();
        title.innerText = 'Modificar';
        p.innerText = '¿Esta seguro que quiere modificar?';
        link.innerText = 'Modificar';
        modal.classList.toggle('displayR');
    }
    if (e.target.name === 'add') {
        e.preventDefault();
        title.innerText = 'Agregar';
        p.innerText = '¿Esta seguro que de agregar la noticia?';
        link.innerText = 'Agregar';
        modal.classList.toggle('displayR');
    }

}

//fucnion para auto submit
const submit = (e)=> { 
    form.submit();
}

//Funcion cerrar modal
const funCancelar = () => {
    modal.classList.toggle('displayR');
}

//recorre todos los botones de eliminar y modificar
validarEliminar.forEach(element => {
    element.addEventListener('click', validar);
});

//Enventos para cancelar el modal
cancelar.addEventListener('click', funCancelar);
cerrar.addEventListener('click', funCancelar);

//Enveto para el boton de confirmar actualizacion
link.addEventListener('click', submit);