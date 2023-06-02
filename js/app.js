
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

/* показ нахождения на странице */

function ready(fn) {
  document.addEventListener('DOMContentLoaded', fn, false)
}

ready(() => {
  
  const TableOfContents = {
    container: document.querySelector('.js-toc'),
    links: null,
    headings: null,
    intersectionOptions: {
      rootMargin: '0px',
      threshold: 1
    },
    previousSection: null,
    observer: null,

    init() {
      this.handleObserver = this.handleObserver.bind(this)

      this.setUpObserver()
      this.findLinksAndHeadings()
      this.observeSections()

    },

    handleObserver(entries, observer) {

      entries.forEach(entry => {
        let href = `#${entry.target.getAttribute('id')}`,
          link = this.links.find(l => l.getAttribute('href') === href)


        if (entry.isIntersecting && entry.intersectionRatio >= 1) {
          link.classList.add('is-visible')
          this.previousSection = entry.target.getAttribute('id')
        } else {
          link.classList.remove('is-visible')
        }

        this.highlightFirstActive()
      })
    },

    highlightFirstActive() {
      let firstVisibleLink = this.container.querySelector('.is-visible')

      this.links.forEach(link => {
        link.classList.remove('is-active')
      })

      if (firstVisibleLink) {
        firstVisibleLink.classList.add('is-active')
      }

/*       if (!firstVisibleLink && this.previousSection) {
        this.container.querySelector(
          `a[href="#${this.previousSection}"]`
        ).classList.add('is-active')
      } */
    },

    observeSections() {
      this.headings.forEach(heading => {
        this.observer.observe(heading)
      })
    },

    setUpObserver() {
      this.observer = new IntersectionObserver(
        this.handleObserver,
        this.intersectionOptions
      )
    },

    findLinksAndHeadings() {
      this.links = [...this.container.querySelectorAll('a')]
      this.headings = this.links.map(link => {
        let id = link.getAttribute('href')
        return document.querySelector(id)
      })
    }
  }

  TableOfContents.init();
  
});


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