//GALERIJAAAAAA
document.getElementById("bikes2").onclick = function(event) {
  event = event || window.event;
  var target = event.target || event.srcElement,
    link = target.src ? target.parentNode : target,
    options = { index: link, event: event },
    links = this.getElementsByTagName("a");
  blueimp.Gallery(links, options);
};

blueimp.Gallery(document.getElementById("bikes2").getElementsByTagName("a"), {
  container: "#blueimp-gallery-carousel",
  carousel: true
});
