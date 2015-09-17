var houses = [ 
	{
		name: 'About House',
		id: '#aboutHouse',
		width: 1500,
		height: 130,
		top: 868,
		left: 1,
		right: null,
		door: {
			width: 36,
			height: 39,
			left: 41,
			top: 100
		}
	},
	{
		name: 'Services House',
		id: '#servicesHouse',
		width: 0,
		height: 0,
		top: 1,
		left: 1,
		right: null,
		door: {
			width: 16,
			height: 32,
			left: 101,
			top: 133
		}		
	},
	{
		name: 'Portfolio House',
		id: '#portfolioHouse',
		width: 128,
		height: 240,
		top: 350,
		left: 300,
		right: null,
		door: {
			width: 32,
			height: 33,
			left: 105,
			top: 119
		}		
	}
];

var roads = [
	{
		name: 'About Road',
		id: '#aboutRoad',
		height: 200,
		top: 900,
		direction: 'left'
	},
	{
		name: 'Services Road',
		id: '#servicesRoad',
		height: 200,
		top: 900,
		direction: 'right'
	},
	{
		name: 'Portfolio Road',
		id: '#portfolioRoad',
		height: 200,
		top: 1000,
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