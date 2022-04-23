$(Document).ready(function(){
  $('.owl-carousel').owlCarousel({
    items : 1,
    margin : 5,
    loop : true,
    dots:false,
    nav:true,
    autoplay : true,
    autoplayTimeout : 6000,
    navText:['<i class="fas fa-chevron-left ic"></i>','<i class="fas fa-chevron-right ic"></i>']
  });
  $(".qtyminus").on("click",function(){
    var now = $(".qty").val();
    if ($.isNumeric(now)){
        if (parseInt(now) -1> 0)
        { now--;}
        $(".qty").val(now);
    }
})
$(".qtyplus").on("click",function(){
    var now = $(".qty").val();
    if ($.isNumeric(now)){
        $(".qty").val(parseInt(now)+1);
    }
});
})