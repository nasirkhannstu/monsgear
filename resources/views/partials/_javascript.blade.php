<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=muscleandstrength"
            async="async"></script>

    <script type="text/javascript">

        var icpForm6636_footer = document.getElementById('icpsignup6636_footer');

        function verifyRequired6636_footer() {
            if (icpForm6636_footer["fields_fname"].value == "") {
                icpForm6636_footer["fields_fname"].focus();
                alert("The First Name field is required.");
                return false;
            }
            if (icpForm6636_footer["fields_email"].value == "") {
                icpForm6636_footer["fields_email"].focus();
                alert("The Email field is required.");
                return false;
            }
            jQuery.get('/token.php', function(txt) {
                jQuery('#icpsignup6636_footer').append('<input type="hidden" id="6636_ts" name="ts" value="'+txt+'" />');
                jQuery('#icpsignup6636_footer').attr('action', 'https://news.muscleandstrength.com/subscriptions/subscribe');
                icpForm6636_footer.submit();
            });

            return false;
        }
    </script>

@yield('script')