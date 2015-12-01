  // typed.js
$(document).ready(function(){ 
	// this initializes typed.js
	$(".element").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            // stringsElement: $('#typed-strings'),
            strings: ["THE PASSION TO CREATE"],
            typeSpeed: 100,
            backDelay: 100,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    // this initializes wow.js    
 	new WOW().init();
});
