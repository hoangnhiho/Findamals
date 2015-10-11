var terrainValue = window.location.pathname;
terrainValue = terrainValue.substr(1);
var animalArray = [];
if (terrainValue == 'terrain1'){
  animalArray.push("koala " + $('#koalaExp').val());
  animalArray.push("wallaby " + $('#wallabyExp').val());
  animalArray.push("wombat " + $('#wombatExp').val());
  animalArray.push("bilby " + $('#bilbyExp').val());
  animalArray.push("kangaroo " + $('#kangarooExp').val());
}else if (terrainValue == 'terrain2'){
  animalArray.push("cockatoo " + $('#cockatooExp').val());
  animalArray.push("platypus " + $('#platypusExp').val());
  animalArray.push("cassowary " + $('#cassowaryExp').val());
  animalArray.push("frog " + $('#frogExp').val());
}else if (terrainValue == 'terrain3'){
  animalArray.push("whale " + $('#whaleExp').val());
  animalArray.push("turtle " + $('#turtleExp').val());
  animalArray.push("shark " + $('#sharkExp').val());
}

var globalURL = window.location.origin +'/';
var counter = 0;
var stepAnimal = 100; //change no. of steps before animal appears
var randnumber = 0;
var tempString = "";
var tempArray = [];
var tempAnimal = "";
var tempExp = "";
var keyboardSpeed = 10;
var refreshIntervalId1;

var Game = function() { 
  this.player = $("#daniel"); 
  this.topPos = 100;
  this.leftPos = $(window).width() / 2 - this.player.width() / 2;
  this.init();
}

Game.constructor = Game;

Game.prototype = {
  init: function() {
    // Center the player relative to the window width
    this.player.css('left', this.leftPos + 'px');

    // Add an event handler
    this.eventsHandler(); 
    $('nav a:first').addClass('current');

  },
  eventsHandler: function() {
    var me = this;
    var player = this.player;
    
    $(window).resize(function(){
      player.css('left', $(window).width() / 2 - player.width() / 2 + 'px');
    });       
    var refreshIntervalId;
    var speed = 40;

    //=== Start of Arrow Controls ===//
    $('#arrowLeft').bind('touchstart, mousedown', function(event){
      if (!me.checkDist()){
        refreshIntervalId = setInterval(function(){
              me.moveX(me.leftPos - keyboardSpeed, 'left');
          },speed);
        event.preventDefault();
      }
    }).bind( "touchend mouseup", function(){
      clearInterval(refreshIntervalId);
      if(player.attr('class') != '')
        player.removeAttr('class').destroy();
    });
    $('#arrowRight').bind('touchstart, mousedown',function(event){
      if (!me.checkDist()){
        refreshIntervalId = setInterval(function(){
          me.moveX(me.leftPos + keyboardSpeed, 'right');
        },speed);
        event.preventDefault();
      }
    }).bind( "touchend mouseup", function(){
      clearInterval(refreshIntervalId);
      if(player.attr('class') != '')
        player.removeAttr('class').destroy();
    }); 
    $('#arrowUp').bind('touchstart, mousedown', function(event){
      if (!me.checkDist()){
        refreshIntervalId = setInterval(function(){
          me.moveY(me.topPos - keyboardSpeed, 'up');
        },speed);
        event.preventDefault();
      }
    }).bind( "touchend mouseup", function(){
      clearInterval(refreshIntervalId);
      if(player.attr('class') != '')
        player.removeAttr('class').destroy();
    }); 
    $('#arrowDown').bind('touchstart, mousedown',function(event){
      if (!me.checkDist()){
        refreshIntervalId = setInterval(function(){
          me.moveY(me.topPos + keyboardSpeed, 'down');
        },speed);
        event.preventDefault();
      }
    }).bind( "touchend mouseup", function(){
      clearInterval(refreshIntervalId);
      if(player.attr('class') != '')
        player.removeAttr('class').destroy();
    }); 
    //=== End of Arrow Controls ===//

    $('.road, .terrainChange, .phazeObject').unbind('click').bind('click', function(e){
      var x = e.pageX - player.width() / 2;
      var y = e.pageY;
      var canMove = me.canImove(x, y, true);
      if(canMove === true) {        
        me.teleport(x, y); //uncomment this to re-enable teleport
        me.revealMenu(y);
      }
      else {
        me.showNotificationsBar(notifications[0]);
      }
    });
    
    $('.sea').unbind('click').bind('click', function(e){      
      me.showNotificationsBar(notifications[3]);
    });
    

    $('nav a').click(function(e){
      e.preventDefault();
      var target = $(this).attr('href');
      if(target == '#boat') {       
        $('nav a').removeClass('current');
        $(this).addClass('current');
        me.shipSail();
        return;
      }
      else if(target == '#startCave') {
        $('nav a').removeClass('current');
        $(this).addClass('current');
        $('html, body').animate({scrollTop: 0}, 'slow');
        me.teleport($(window).width() / 2 - me.player.width() / 2, 100);
        return;
      }
      window.location = $(this).attr('href');//nhi added code
    });

    $(window).on('keydown', function(event) {
      switch (event.keyCode) {
        case 37: // Left
            if (!$('.modal').hasClass('in')){
                //refreshIntervalId1 = setInterval(function(){
                    me.moveX(me.leftPos - keyboardSpeed, 'left');
                //},speed);
                event.preventDefault();
            }
            break;

        case 39: // Right
          if (!$('.modal').hasClass('in')){
            me.moveX(me.leftPos + keyboardSpeed, 'right');
            event.preventDefault();
          }
        break;

        case 38: // Up
          if (!$('.modal').hasClass('in')){
            me.moveY(me.topPos - keyboardSpeed, 'up');
            event.preventDefault();
          }
        break;

        case 40: // Down
          if (!$('.modal').hasClass('in')){
            me.moveY(me.topPos + keyboardSpeed, 'down');
            event.preventDefault();
          }
        break;
        
        case 13: 
          if(me.topPos > $('#wrapper').height() - $('#endSea').height() - player.height()) {
            $('nav a').removeClass('current');
            $('nav a[href="#boat"]').addClass('current');
            me.shipSail();
          }
        break;
        
        case 27:          
          me.hideNotificationBar();
        break;
      }
      me.revealMenu(me.topPos);
    }).on('keyup',function(){
        //clearInterval(refreshIntervalId1);
      if(player.attr('class') != '')
        player.removeAttr('class').destroy();

    }); 

    $("#boat").unbind('click').bind('click', function(){
      $('nav a').removeClass('current');
      $('nav a[href="#boat"]').addClass('current');
      me.shipSail();
    });

    $("#notifications").find('.close').on('click', function(){
      me.hideNotificationBar();
    });
    
  },

  showNotificationsBar: function(notification) {
    var me = this;    
    $("#notifications").css('bottom', 0);
    if(!$("#notifications").find('.inner').attr('id') || $("#notifications").find('.inner').text() != notification.text){
      $("#notifications").find('.inner').attr('id', notification.type).fadeOut('fast', function(){
        $(this).html('<img src="' + notification.img + '" />' + notification.text).fadeIn('fast');
      });
    }
  },

  hideNotificationBar: function() {
    $("#notifications").css('bottom', '-60px');
  },

  revealMenu: function(y) {
    if(y >= 200) {
      $('nav').addClass('show');
      if(y >= 350 && y < 355) {
        this.showNotificationsBar(notifications[1]);
      }
      else if(y > 580 && $("#notifications").find('.inner').text() == notifications[1].text) {
        this.hideNotificationBar();
      }
    }
    else {
      $('nav').removeClass('show'); 
    }
  },

  teleport: function(x, y) {    
    this.topPos = y;
    this.leftPos = x;
    var player = this.player;
    player.css({
      opacity: 0,
      top: y,
      left: x
    }).show().stop(true, true).animate({opacity: 1});
    if(this.topPos >= 200) {
      $('html, body').animate({scrollTop: y - 200}, 'slow');
    }
    this.shipBack();
  },

  moveDirectToHouse: function(target) {
    var house;
    for(i = 0; i < houses.length; i++) {
      if(houses[i].id == target) {
        house = houses[i];
        break;
      }
    }
    var y = house.top + house.height - 70;
    var x;
    if(house.left && house.left != null) {
      x = house.left + house.door.left;
    }
    else {
      x = $(window).width() - house.width - house.right + house.door.left;
    }
    var canMove = this.canImove(x, y, true);
    if(canMove) {
      this.topPos = y;
      this.leftPos = x;
      this.teleport(x, y);
    }
  },
  
  moveX: function(x, dir) {
    var player = this.player;
    var canMove = this.canImove(x, null); 
    if(canMove){
      this.leftPos = x;
      player.animate({'left': x + 'px'}, 20);
    }
    if(dir == 'left') {
      this.startMoving('left', 2);
      counter++;
    }
    else {
      this.startMoving('right', 3);
      counter++;
    }
    
  },
  
  moveY: function(y, dir) {
    var player = this.player;
    var canMove = this.canImove(null, y); 
    if(canMove) {
      if(this.topPos >= 200) {
        if(dir == 'up') {
          $('html, body').animate({scrollTop: $(document).scrollTop() - keyboardSpeed}, 10);
        }
        else {
          $('html, body').animate({scrollTop: $(document).scrollTop() + keyboardSpeed}, 10);
        }
      }
      this.topPos = y;
      player.animate({'top': y + 'px'}, 20);
    }
    if(dir == 'up') {
      this.startMoving('up', 4);
      counter++;
    }
    else {
      this.startMoving('down', 1);
      counter++;
    }
  },
  checkDist: function() {               
    if (counter > stepAnimal ){
      counter = 0;
      this.activteModals();
      return true;
    }else{return false;}
  },
  startMoving: function(dir, state) {               
    var player = this.player;
    if(!player.hasClass(dir)) {
      if (counter > stepAnimal){
        this.activteModals();
        counter = 0;
      }
      player.addClass(dir);
      player.sprite({fps: 9, no_of_frames: 3}).spState(state);            
    }       
  },
  activteModals: function() { 
    randnumber = this.getRandomInt(animalArray.length);
    //console.log(animalArray[randnumber]);
    tempString = animalArray[randnumber];
    tempArray = tempString.split(" ");
    tempAnimal = "#" + tempArray[0] + "Quest" + tempArray[1];
    //animalArray[randnumber] = tempArray[0] + ' ' + (parseInt(tempArray[1])+1).toString();
    var tempURL = globalURL + 'images/animals/' + tempArray[0] + ".png";
    $('#animalImg').attr('src', tempURL);
    $('#acceptBtn').attr('href', tempAnimal);
    $('#acceptModal').modal('show');
  },
  getRandomInt: function(max) {
      return Math.floor(Math.random() * (max));
  },
  

  isRoad: function(elmLeft, elmTop) {
    var player = this.player;
    var mainRoad = $("#mainRoad");
    var isOnRoad = true;

    // Check if the player is out of boundries
    if(elmLeft < 0 || elmLeft >= parseFloat(player.parent().width()) - parseFloat(player.width()) || elmTop < 0 || elmTop > parseFloat(player.parent().height()) - parseFloat(player.height())) {
      isOnRoad = false;
    }
    else if(elmLeft < ($(window).width() / 2 - mainRoad.width() / 2) || elmLeft > ($(window).width() / 2 + mainRoad.width() / 2) - player.width()) {
      for(i = 0; i < roads.length; i++) {
        if(elmTop > roads[i].top && elmTop < roads[i].top + roads[i].height - player.height()) {
          if(roads[i].direction == 'left') {
            if(elmLeft < ($(window).width() / 2 + mainRoad.width() / 2) - player.width()) {
              isOnRoad = true;
            }
            else {
              isOnRoad = false; 
            }
          }
          else if(roads[i].direction == 'right') {
            if(elmLeft >= ($(window).width() / 2 + mainRoad.width() / 2) - player.width()) {
              isOnRoad = true;
            }
            else {
              isOnRoad = false;
            }
          }
          else {
            isOnRoad = false;
          }
          break;
        }
        else {
          isOnRoad = false;
        }
      }   
    }   

    return isOnRoad;
  },
  isCollision: function(elmLeft, elmTop){
    var player = this.player;
    var isInHouse = [];
    var object;
    for(i = 0; i < colObjects.length; i++) {
        object = colObjects[i];
        if (object.left == null){//walking down, hitting collision on right side.
            if (($(window).width() - object.right - object.width - 27) <= elmLeft && elmLeft <= ($(window).width() - object.right-9)){
                if (object.top-32 <= elmTop && elmTop <= object.bottom){
                    //console.log('blocked');
                    return false;
                }
            }
        }
        if(object.right == null){ 
            if ((object.left - 27) <= elmLeft && elmLeft <= (object.left + object.width - 9)){
                if ((object.top-32) <= elmTop && elmTop <= object.bottom){
                    //console.log('blocked');
                    return false;
                }
            }
        }
    }
  },
  isSecret: function(elmLeft, elmTop){
    var player = this.player;
    var isInHouse = [];
    var object;
    nearSecret = 0;
    for(i = 0; i < secretObjects.length; i++) {
        object = secretObjects[i];
        if (object.left == null){//walking down, hitting collision on right side.
            if (($(window).width() - object.right - object.width - 57) <= elmLeft && elmLeft <= ($(window).width() - object.right+21)){
                if (object.top-62 <= elmTop && elmTop <= object.bottom+30){
                  //10 = distance of shake
                  $( "#"+object.id ).effect( "shake", {times:2}, 10 );
                  nearSecret = 1;
                }
            }
        }
        if(object.right == null){
            if ((object.left - 57) <= elmLeft && elmLeft <= (object.left + object.width + 21)){
                if ((object.top-62) <= elmTop && elmTop <= object.bottom+30){
                    $( "#"+object.id ).effect( "shake", {times:2}, 10 );
                    nearSecret = 1;
                }
            }
        }
    }
  },

  isTerrainChange: function(elmLeft, elmTop){
    var player = this.player;
    var isInHouse = [];
    var object;
    nearSecret = 0;
    for(i = 0; i < terrainChangeObjects.length; i++) {
        object = terrainChangeObjects[i];
          if ((object.left - 27) <= elmLeft && elmLeft <= (object.left + object.width - 9)){
              if ((object.top-32) <= elmTop && elmTop <= object.bottom){
                //console.log(globalURL + object.id);
                window.location.href = globalURL + object.id;

              }
          }
        
    }
  },
  canImove: function(moveLeft, moveTop, teleported) {
    var player = this.player;
    var elmLeft = moveLeft || this.leftPos;
    var elmTop = moveTop || this.topPos;
    
    if(player.css('display') == 'none' && !teleported) {
      return false;
    }
    var terrainChange =this.isTerrainChange(elmLeft, elmTop);
    var isSecret = this.isSecret(elmLeft, elmTop); 
    var isColl =this.isCollision(elmLeft, elmTop);
     if(isColl === false) {
      return false;
    }
          
    var isRoad = this.isRoad(elmLeft, elmTop);
    if(isRoad === false) {
      return false;
    }
    
    // Sea Handler
    if(elmTop > $('#wrapper').height() - $('#endSea').height() - player.height()) {
      this.showNotificationsBar(notifications[2]);
      if(elmLeft > $(window).width() / 2 - $('#endBridge').width() / 2 && elmLeft < $(window).width() / 2 + $('#endBridge').width() / 2 - player.width()) {       
        if(elmTop > $('#wrapper').height() - $('#endSea').height() + $("#endBridge").height() - 70 - player.height()) {
          return false;
        }
        return true;
      }
      else {
        return false;
      }
    }

    return true;
  },
  
  shipSail: function() {
    $('html, body').animate({scrollTop: $("#wrapper").height() - $("#endSea").height() + 20});
    var ship = $('#boat');
    this.hideNotificationBar();
    this.player.stop(true, true).fadeOut('fast');
    ship.find('.meSail').delay(500).fadeIn('fast');
    ship.removeAttr('class').addClass('sail');
    $("#contact").addClass('show');
  },
  
  shipBack: function() {
    var ship = $('#boat');
    if(!ship.hasClass('isMoored')) {
      ship.removeClass('sail');
      ship.find('.meSail').hide();
      $("#contact").removeClass('show');
    }
    else {
      return;
    }
  }

}


