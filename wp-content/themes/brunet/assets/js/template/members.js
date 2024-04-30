(function( root, $, undefined ) {
	"use strict";

	$(function () {
        
        alert('It Works!');

        let title = document.querySelectorAll('.dashicons');
        let contein = document.querySelectorAll('.members .group');
        
        title.forEach( (ele, key) => {
            ele.addEventListener('click', () => {
                ele.classList.toggle('hide');
                contein[key].classList.toggle('hide');
                //alert('click');
            });
        });

	});

} ( this, jQuery ));