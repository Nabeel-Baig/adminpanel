<script>
    $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
    });
    AOS.init();
    /*$(document).on('click','.btn-getstarted',function(){
        const getStarted = $(this).data('value');
        alert(getStarted);
    })*/
    const getStarted = (value) => {
        alert(value);
    }

</script>
