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
