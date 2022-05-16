
; /* Start:"a:4:{s:4:"full";s:55:"/local/templates/techart/scripts/click.js?1650814244940";s:6:"source";s:41:"/local/templates/techart/scripts/click.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
let lang = document.querySelector('.lang');
let click1 = document.querySelector('.click1');
let click2 = document.querySelector('.click2');
let links = document.querySelectorAll('.a');
let angleDown1 = document.getElementById('angle1');
let angleDown2 = document.getElementById('angle2');

click1.addEventListener('click', function(){
	lang.classList.toggle('dBlock');
	for (let lnk of links) {
		if (lnk.style.color=='grey') {
			lnk.style.color='#fff'
		} else {
			lnk.style.color='grey'
		};
	}
	AngleDown(angleDown1);
})

let allSites = document.querySelector('.allSites');

allSites.addEventListener('click', function(){
	AngleDown(angleDown2);
	click2.classList.toggle('dBlock1');
	if (click2.style.display=='block') {
		click2.style.display='none';
	} else {
		click2.style.display='block';
	};
})

function AngleDown(angle) {
	angle.classList.toggle('rot');
	angle.classList.toggle('norot');
}


/* End */
;; /* /local/templates/techart/scripts/click.js?1650814244940*/
