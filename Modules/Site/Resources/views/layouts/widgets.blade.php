    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=94703418001&text=&source=&data=" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!----------------------------------------------------------------------->

    <div class="fb-livechat">
        <div class="ctrlq fb-overlay"></div>
        <div class="fb-widget">
            <div class="ctrlq fb-close"></div>
            <div class="fb-page" data-href="https://www.facebook.com/PsychologySriLanka/" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false">

            </div>
            <div id="fb-root"></div>
        </div>
        <a href="https://www.facebook.com/PsychologySriLanka/" title="Send us a message on Facebook" class="ctrlq fb-button"></a>
    </div>

    <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var t = {
                delay: 125,
                overlay: $(".fb-overlay"),
                widget: $(".fb-widget"),
                button: $(".fb-button")
            };
            setTimeout(function() {
                $("div.fb-livechat").fadeIn()
            }, 8 * t.delay), $(".ctrlq").on("click", function(e) {
                e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({
                    bottom: 0,
                    opacity: 0
                }, 2 * t.delay, function() {
                    $(this).hide("slow"), t.button.show()
                })) : t.button.fadeOut("medium", function() {
                    t.widget.stop().show().animate({
                        bottom: "30px",
                        opacity: 1
                    }, 2 * t.delay), t.overlay.fadeIn(t.delay)
                })
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            // MODAL
            $('.modal').modal();
            // DROPDOWNS
            $(".dropdown-button").dropdown({
                belowOrigin: true
            });
            // TABS
            $('ul.tabs').tabs();
            // SCROLLSPY
            $('.scrollspy').scrollSpy();
        });
    </script>