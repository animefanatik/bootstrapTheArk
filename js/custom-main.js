var waypoint = new Waypoint({
    element: document.getElementById('hero'),
    handler: function(direction) {
        $(this.element).addClass('animated fadeIn');
    },
    offset: '100%',
})


var continuousElements = document.getElementsByClassName('expItem')
for (var i = 0; i < continuousElements.length; i++) {
  new Waypoint({
    element: continuousElements[i],
    handler: function(direction) {
        $(this.element).addClass('animated fadeIn');
    },
    offset: '90%',
  })
}
  

var waypoint = new Waypoint({
    element: document.getElementById('expRes'),
    handler: function(direction) {
        $(this.element).addClass('animated fadeInUp');
    },
    offset: '100%',
})


var waypoint = new Waypoint({
    element: document.getElementsByClassName('mainBar'),
    handler: function(direction) {
        if (direction === 'down') {
            $(this.element).addClass('sticky');
            $(".navbar-brand img").animate({width: "100px", height: "auto"}, 300);
        } else {
            $(this.element).removeClass('sticky');
        }
    },
    offset: 5
})
