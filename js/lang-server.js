//РАБОТАЕТ С ПОДКЛЮЧЕНИЕМ СЕРВЕРА
const select = document.querySelector('select');
const allLang = ['ru', 'kz', 'en'];

select.addEventListener('change', changeURLLanguage);

function changeURLLanguage() {
	let lang = select.value;
	location.href = window.location.pathname + '#' + lang;
	location.reload();
}

function changeLanguage(){
	let hash = window.location.hash;
	hash = hash.substr(1);
	console.log(hash);
	if(!allLang.includes(hash)){
		location.href = window.location.pathname + '#ru';
		location.reload();
	}
	select.value = hash;
	for(let key in langArr){
		let elem = document.querySelector('.lng-' + key);
		if(elem){
			elem.innerHTML = langArr[key][hash];
		}
	}
}

changeLanguage();