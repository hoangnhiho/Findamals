function getDistVal(element, type) {
	if (type == 'width'){
		return element.width;
	}
    //return p1 * p2;              // The function returns the product of p1 and p2
}

var houses = [ 
	{//treeRight1
		name: ' ',
		id: '#',
		width: 315,
		height: 136,
		top: 100,//css = 794
		left: null,
		right: 1,
		door: {
			width: 1,
			height: 1,
			left: 1,
			top: 1
		}		
	},
	{//treeleft1
		name: ' ',
		id: '#',
		width: 310,
		height: 95,
		top: 270,
		left: 67,
		right: null,
		door: {
			width: 1,
			height: 1,
			left: 1,
			top: 1
		}		
	},
	{//treeRight2
		name: ' ',
		id: '#',
		width: 565,
		height: 275,
		top: 450,//css = 794
		left: null,
		right: 1,
		door: {
			width: 1,
			height: 1,
			left: 1,
			top: 1
		}		
	},
	{//treeLeft2
		name: ' ',
		id: '#',
		width: 187,
		height: 136,
		top: 760,//css = 794
		left: 64,
		right: null,
		door: {
			width: 1,
			height: 1,
			left: 1,
			top: 1
		}		
	},
	{ //top + 30, height css + 25, footer tree
		name: ' ',
		id: '#',
		width: 1500,
		height: 95,
		top: 900,
		left: 1,
		right: null,
		door: {
			width: 1,
			height: 1,
			left: 1,
			top: 1
		}
	}
];

var roads = [
	{
		name: 'About Road',
		id: '#aboutRoad',
		height: 1,
		top: 1500,
		direction: 'left'
	}
];

var notifications = [
	{
		id: 1,
		type: 'error',
		text: 'You can\'t teleport me here...',
		img: 'images/error.png'
	},
	{
		id: 2,
		type: 'info',
		text: 'If you\'re too lazy to walk, you can teleport me =]',
		img: 'images/information.png'
	},
	{
		id: 3,
		type: 'info',
		text: 'Press "Return" on your keyboard or click with your mouse on the ship to sail and contact us!',
		img: 'images/information.png'
	},
	{
		id: 4,
		type: 'error',
		text: 'Stop trying to drown me down!!!',
		img: 'images/error.png'
	},
]