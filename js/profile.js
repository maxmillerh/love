

// появление почты

var mailBtn = document.getElementById('mail_btn');
var contentMailAdd = document.getElementById('content_mailAdd');

mailBtn.onclick = function() {
	mailBtn.classList.add('d-none');
	contentMailAdd.classList.remove('d-none');
}


// Сохранение почты
var btnMailSave = document.getElementById('btnMailSave');
btnMailSave.onclick = function() {
	mailBtn.classList.remove('d-none');
	contentMailAdd.classList.add('d-none');
}

// Отмена почты
var btnMailOtmena = document.getElementById('btnMailOtmena');
btnMailOtmena.onclick = function() {
	mailBtn.classList.remove('d-none');
	contentMailAdd.classList.add('d-none');
}

