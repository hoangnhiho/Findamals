
var nearSecret = 0;
var colObjects=[];
var secretObjects=[];
var terrainChangeObjects=[];
var tempObject; 
var tempRight;
var tempLeft;

var terrainValue = window.location.pathname;
terrainValue = terrainValue.substr(1);
var animalArrayObjects = [];

$( window ).ready(function() {
	$('.colObject').each(function(i, obj) {
	    //console.log($(this).attr('id') + ": " + $(this).position().top);
		if ($(this).hasClass( "leftColObject" )){
			tempRight = null;
			tempLeft = $(this).position().left;
		}else if ($(this).hasClass("rightColObject")){
			tempRight = $(this).css('right');
			tempRight = parseInt(tempRight.substring(0, tempRight.length - 2));
			tempLeft =null;
		}

		tempObject = {
			id: this.id,
			width: $(this).width(),
			height: $(this).height(),
			top: $(this).position().top,
			right: tempRight,
			left: tempLeft,
			bottom: $(this).position().top + $(this).height()
		}
		colObjects.push(tempObject);
		if ($(this).hasClass( "secretObject" )){
			secretObjects.push(tempObject);
		}
	});
	$('.terrainChange').each(function(i, obj) {
		tempObject = {
			id: this.id,
			width: $(this).width(),
			height: $(this).height(),
			top: $(this).position().top,
			left: $(this).position().left - ($(this).width()/2),
			bottom: $(this).position().top + $(this).height()
		}
		terrainChangeObjects.push(tempObject);

	});

	if (terrainValue == 'terrain1'){
		$('.T1AnimalExp').each(function(i, obj) {
			tempObject = {
				name: this.id,
				exp: $(this).val()
			}
			animalArrayObjects.push(tempObject);
		});
	}else if (terrainValue == 'terrain2'){
		$('.T2AnimalExp').each(function(i, obj) {
			tempObject = {
				name: this.id,
				exp: $(this).val()
			}
			animalArrayObjects.push(tempObject);
		});
	}else if (terrainValue == 'terrain3'){
		$('.T3AnimalExp').each(function(i, obj) {
			tempObject = {
				name: this.id,
				exp: $(this).val()
			}
			animalArrayObjects.push(tempObject);
		});
	}
	

});



var roads = [
	{
		name: 'About Road',
		id: '#aboutRoad',
		height: 1,
		top: 1500,
		direction: 'left'
	}
];
