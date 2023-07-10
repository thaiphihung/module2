<?php
    namespace Controller;
    class Controller{
        function redirect($url){
            ?> 
           
                <script>
                     window.location = "<?= $url?>"
                </script>
            <?php
        }
    }
?>