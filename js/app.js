
/* тень для шапки */

$(window).scroll(function() {
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


narash.onclick = function(){
  recBlock1.classList.remove('d-none');
  recBlock2.classList.add('d-none');
  recBlock3.classList.add('d-none');

  narash.classList.add('activete');
  shugar.classList.remove('activete');
  permonen.classList.remove('activete');

}

shugar.onclick = function(){
  recBlock1.classList.add('d-none');
  recBlock2.classList.remove('d-none');
  recBlock3.classList.add('d-none');

  narash.classList.remove('activete');
  shugar.classList.add('activete');
  permonen.classList.remove('activete');
}

permonen.onclick = function(){
  recBlock1.classList.add('d-none');
  recBlock2.classList.add('d-none');
  recBlock3.classList.remove('d-none');

  narash.classList.remove('activete');
  shugar.classList.remove('activete');
  permonen.classList.add('activete');

}

// второе


narashivanie_usluga.onclick = function(){
  uslBlock1.classList.remove('d-none');
  uslBlock2.classList.add('d-none');
  uslBlock3.classList.add('d-none');

  narashivanie_usluga.classList.add('activete');
  shugaring_uslua.classList.remove('activete');
  permonentnyi_usluga.classList.remove('activete');

}

shugaring_uslua.onclick = function(){
  uslBlock1.classList.add('d-none');
  uslBlock2.classList.remove('d-none');
  uslBlock3.classList.add('d-none');

  narashivanie_usluga.classList.remove('activete');
  shugaring_uslua.classList.add('activete');
  permonentnyi_usluga.classList.remove('activete');
}

permonentnyi_usluga.onclick = function(){
  uslBlock1.classList.add('d-none');
  uslBlock2.classList.add('d-none');
  uslBlock3.classList.remove('d-none');

  narashivanie_usluga.classList.remove('activete');
  shugaring_uslua.classList.remove('activete');
  permonentnyi_usluga.classList.add('activete');

}


  var btnclass = document.getElementById('btnUslNarClass');
  btnclass.onclick = function() {
    document.getElementById("procedure2").value = "Наращивание классика";
  }

	var btn2D = document.getElementById('btnUslNar2D');
  btn2D.onclick = function() {
    document.getElementById("procedure2").value = "Наращивание 2D";
  }

	var btn3D = document.getElementById('btnUslNar3D');
  btn3D.onclick = function() {
    document.getElementById("procedure2").value = "Наращивание 3D";
  }

	var btn4D = document.getElementById('btnUslNar4D');
  btn4D.onclick = function() {
    document.getElementById("procedure2").value = "Наращивание 4D";
  }

	var btnY = document.getElementById('btnUslNarY');
  btnY.onclick = function() {
    document.getElementById("procedure2").value = "Наращивание Y-эффект";
  }

	var btnSnyat = document.getElementById('btnUslNarSnyat');
  btnSnyat.onclick = function() {
    document.getElementById("procedure2").value = "Снятие чужой работы";
  }

	var btnUs = document.getElementById('btnUslShugUs');
  btnUs.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг усики";
  }

	var btnPodm = document.getElementById('btnUslShugPodm');
  btnPodm.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг подмышечные впадины";
  }

	var btnRukDo = document.getElementById('btnUslShugRukDo');
  btnRukDo.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг Руки до локтя";
  }

	var btnRukAll = document.getElementById('btnUslShugRukAll');
  btnRukAll.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг Руки Полностью";
  }

	var btnFootDo = document.getElementById('btnUslShugFootDo');
  btnFootDo.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг Ноги до колена";
  }

	var btnFootAll = document.getElementById('btnUslShugFootAll');
  btnFootAll.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг Ноги полностью";
  }

	var btnBicClass = document.getElementById('btnUslShugBicClass');
  btnBicClass.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг Бикини класика";
  }

	var btnBicGlub = document.getElementById('btnUslShugBicGlub');
  btnBicGlub.onclick = function() {
    document.getElementById("procedure2").value = "Шугаринг Бикини глубокое";
  }

	var btnBicTatu = document.getElementById('btnUslShugTatu');
  btnBicTatu.onclick = function() {
    document.getElementById("procedure2").value = "Блеск-тату";
  }

	var btnPermNap = document.getElementById('btnUslPermNap');
  btnPermNap.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж напыление бровей";
  }

	var btnPermCor = document.getElementById('btnUslPermCor');
  btnPermCor.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж коррекция Бровей";
  }

	var btnPermGlasNap = document.getElementById('btnUslPermGlasNap');
  btnPermGlasNap.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж глаза напыление";
  }

	var btnPermGlasCor = document.getElementById('btnUslPermGlasCor');
  btnPermGlasCor.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж коррекция глаз";
  }

	var btnPermGubNap = document.getElementById('btnUslPermGubNap');
  btnPermGubNap.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж напыление губ";
  }

	var btnPermGubCor = document.getElementById('btnUslPermGubCor');
  btnPermGubCor.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж коррекция губ";
  }

	var btnUslPermMicro = document.getElementById('btnUslPermMicro');
  btnUslPermMicro.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж микроблейдинг";
  }

	var btnUslPermMicroCor = document.getElementById('btnUslPermMicroCor');
  btnUslPermMicroCor.onclick = function() {
    document.getElementById("procedure2").value = "Перманентный макияж микроблейдинг коррекция";
  }



	let arrProc = []