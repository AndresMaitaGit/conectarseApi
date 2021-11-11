let params = new URLSearchParams(location.search);
let page = 1;
if(!isNaN(params.get('page')) && params.get('page') != null){
	page = params.get('page');
}

const btnAnterior = document.getElementById('btnAnterior');
const btnSiguiente = document.getElementById('btnSiguiente');

btnSiguiente.addEventListener('click', () => {
	if(page < 100){
		page++;
		window.location=`./?page=${page}`;
	}
});

btnAnterior.addEventListener('click', () => {
	if(page > 1){
		page--;
		window.location=`./?page=${page}`;
	}
}); 