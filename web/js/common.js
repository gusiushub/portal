//menu

var menuBtn = document.querySelector('.adaptive-menu__button');
menuBtn.onclick = function() {
	var list = document.querySelector('.adaptive-menu__navigation');
	list.classList.toggle('adaptive-menu__navigation--active');
}

//menu-gear


//popup's

var popups = document.querySelectorAll('.slider-advertising__slide');
for(var i = 0; i < popups.length; i++) {
	popups[i].addEventListener('click', function() {
		var attr = this.getAttribute('data-number');
		var modals = document.querySelectorAll('.slider-advertising__modal');
		var slideCount = 0;
		for(var j = 0; j < modals.length; j++) {
			var attrModal = modals[j].getAttribute('data-number');
			if (attr == attrModal && slideCount == 0) {
				console.log(attrModal+' '+attr);
				slideCount += 1;
				modals[j].style.display = 'block';
			}
		}
	})
}