
/* тень для шапки */

$(window).scroll(function () {
	$('header').toggleClass('scroll', $(this).scrollTop() > 100);
/* 	 $('is-active').toggleClass('opac-1.style["opacity"] = 1', $(this).scrollTop() > 100); 
 */});



/* анимация появления элемента */
function onEntry(entry) {
	entry.forEach(change => {
		if (change.isIntersecting) {
			change.target.classList.add('element-show');
		}
	});
}
let options = { threshold: [0.2] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.element-animation');
for (let elm of elements) {
	observer.observe(elm);
}



/* смена блоков */

var narash = document.getElementById('narash');
var shugar = document.getElementById('shugar');
var permonen = document.getElementById('permonen');

var narashivanie_usluga = document.getElementById('narashivanie_usluga');
var shugaring_uslua = document.getElementById('shugaring_uslua');
var permonentnyi_usluga = document.getElementById('permonentnyi_usluga');

var recBlock1 = document.getElementById('recBlock1');
var recBlock2 = document.getElementById('recBlock2');
var recBlock3 = document.getElementById('recBlock3');

var uslBlock1 = document.getElementById('uslBlock1');
var uslBlock2 = document.getElementById('uslBlock2');
var uslBlock3 = document.getElementById('uslBlock3');


narash.onclick = function () {
	recBlock1.classList.remove('d-none');
	recBlock2.classList.add('d-none');
	recBlock3.classList.add('d-none');

	narash.classList.add('activete');
	shugar.classList.remove('activete');
	permonen.classList.remove('activete');

}

shugar.onclick = function () {
	recBlock1.classList.add('d-none');
	recBlock2.classList.remove('d-none');
	recBlock3.classList.add('d-none');

	narash.classList.remove('activete');
	shugar.classList.add('activete');
	permonen.classList.remove('activete');
}

permonen.onclick = function () {
	recBlock1.classList.add('d-none');
	recBlock2.classList.add('d-none');
	recBlock3.classList.remove('d-none');

	narash.classList.remove('activete');
	shugar.classList.remove('activete');
	permonen.classList.add('activete');

}

// второе


narashivanie_usluga.onclick = function () {
	uslBlock1.classList.remove('d-none');
	uslBlock2.classList.add('d-none');
	uslBlock3.classList.add('d-none');

	narashivanie_usluga.classList.add('activete');
	shugaring_uslua.classList.remove('activete');
	permonentnyi_usluga.classList.remove('activete');

}

shugaring_uslua.onclick = function () {
	uslBlock1.classList.add('d-none');
	uslBlock2.classList.remove('d-none');
	uslBlock3.classList.add('d-none');

	narashivanie_usluga.classList.remove('activete');
	shugaring_uslua.classList.add('activete');
	permonentnyi_usluga.classList.remove('activete');
}

permonentnyi_usluga.onclick = function () {
	uslBlock1.classList.add('d-none');
	uslBlock2.classList.add('d-none');
	uslBlock3.classList.remove('d-none');

	narashivanie_usluga.classList.remove('activete');
	shugaring_uslua.classList.remove('activete');
	permonentnyi_usluga.classList.add('activete');

}



var btnclass = document.getElementById('btnUslNarClass');
btnclass.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 1; }
	if (procedure3) { procedure3.selectedIndex = 1; }
}

var btn2D = document.getElementById('btnUslNar2D');
btn2D.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 2; }
	if (procedure3) { procedure3.selectedIndex = 2; }
};

var btn3D = document.getElementById('btnUslNar3D');
btn3D.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 3; }
	if (procedure3) { procedure3.selectedIndex = 3; }
}

var btn4D = document.getElementById('btnUslNar4D');
btn4D.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 4; }
	if (procedure3) { procedure3.selectedIndex = 4; }
}

var btnY = document.getElementById('btnUslNarY');
btnY.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 5; }
	if (procedure3) { procedure3.selectedIndex = 5; }
}

var btnSnyat = document.getElementById('btnUslNarSnyat');
btnSnyat.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 6; }
	if (procedure3) { procedure3.selectedIndex = 6; }
}

var btnUs = document.getElementById('btnUslShugUs');
btnUs.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 7; }
	if (procedure3) { procedure3.selectedIndex = 7; }
}

var btnPodm = document.getElementById('btnUslShugPodm');
btnPodm.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 8; }
	if (procedure3) { procedure3.selectedIndex = 8; }
}

var btnRukDo = document.getElementById('btnUslShugRukDo');
btnRukDo.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 9; }
	if (procedure3) { procedure3.selectedIndex = 9; }
}

var btnRukAll = document.getElementById('btnUslShugRukAll');
btnRukAll.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 10; }
	if (procedure3) { procedure3.selectedIndex = 10; }
}

var btnFootDo = document.getElementById('btnUslShugFootDo');
btnFootDo.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 11; }
	if (procedure3) { procedure3.selectedIndex = 11; }
}

var btnFootAll = document.getElementById('btnUslShugFootAll');
btnFootAll.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 12; }
	if (procedure3) { procedure3.selectedIndex = 12; }
}

var btnBicClass = document.getElementById('btnUslShugBicClass');
btnBicClass.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 13; }
	if (procedure3) { procedure3.selectedIndex = 13; }
}

var btnBicGlub = document.getElementById('btnUslShugBicGlub');
btnBicGlub.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 14; }
	if (procedure3) { procedure3.selectedIndex = 14; }
}

var btnBicTatu = document.getElementById('btnUslShugTatu');
btnBicTatu.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 15; }
	if (procedure3) { procedure3.selectedIndex = 15; }
}

var btnPermNap = document.getElementById('btnUslPermNap');
btnPermNap.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 16; }
	if (procedure3) { procedure3.selectedIndex = 16; }
}

var btnPermCor = document.getElementById('btnUslPermCor');
btnPermCor.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 17; }
	if (procedure3) { procedure3.selectedIndex = 17; }
}

var btnPermGlasNap = document.getElementById('btnUslPermGlasNap');
btnPermGlasNap.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 18; }
	if (procedure3) { procedure3.selectedIndex = 18; }
}

var btnPermGlasCor = document.getElementById('btnUslPermGlasCor');
btnPermGlasCor.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 19; }
	if (procedure3) { procedure3.selectedIndex = 19; }
}

var btnPermGubNap = document.getElementById('btnUslPermGubNap');
btnPermGubNap.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 20; }
	if (procedure3) { procedure3.selectedIndex = 20; }
}

var btnPermGubCor = document.getElementById('btnUslPermGubCor');
btnPermGubCor.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 21; }
	if (procedure3) { procedure3.selectedIndex = 21; }
}

var btnUslPermMicro = document.getElementById('btnUslPermMicro');
btnUslPermMicro.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 22; }
	if (procedure3) { procedure3.selectedIndex = 22; }
}

var btnUslPermMicroCor = document.getElementById('btnUslPermMicroCor');
btnUslPermMicroCor.onclick = function () {
	var procedure2 = document.getElementById('procedure2');
	var procedure3 = document.getElementById('procedure3');
	if (procedure2) { procedure2.selectedIndex = 23; }
	if (procedure3) { procedure3.selectedIndex = 23; }
}


$(function () {
	$("#tel2").mask("+7(999) 999-99-99", { placeholder: "+7(XXX) XXX-XX-XX" });
	$("#tel").mask("+7(999) 999-99-99", { placeholder: "+7(XXX) XXX-XX-XX" });
	$("#tel1").mask("+7(999) 999-99-99", { placeholder: "+7(XXX) XXX-XX-XX" });
});


function toggleExpand() {
	var expandable = document.querySelector('.expandable');
	expandable.classList.toggle('expanded');
	var expandBtn = document.querySelector('.expand-button');
	if (expandBtn.innerHTML == 'Развернуть') {
		expandBtn.innerHTML = 'Свернуть';
	} else { expandBtn.innerHTML = 'Развернуть'; }
}

function toggleExpand2() {
	var expandable = document.querySelector('.expandable2');
	expandable.classList.toggle('expanded');
	var expandBtn = document.querySelector('.expand-button2');
	if (expandBtn.innerHTML == 'Развернуть') {
		expandBtn.innerHTML = 'Свернуть';
	} else { expandBtn.innerHTML = 'Развернуть'; }
}

function toggleExpand3() {
	var expandable = document.querySelector('.expandable3');
	expandable.classList.toggle('expanded');
	var expandBtn = document.querySelector('.expand-button3');
	if (expandBtn.innerHTML == 'Развернуть') {
		expandBtn.innerHTML = 'Свернуть';
	} else { expandBtn.innerHTML = 'Развернуть'; }
}

function toggleExpand4() {
	var expandable = document.querySelector('.expandable4');
	expandable.classList.toggle('expanded');
	var expandBtn = document.querySelector('.expand-button4');
	if (expandBtn.innerHTML == 'Развернуть') {
		expandBtn.innerHTML = 'Свернуть';
	} else { expandBtn.innerHTML = 'Развернуть'; }
}




