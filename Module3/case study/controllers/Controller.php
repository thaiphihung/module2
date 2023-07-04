<?php
    namespace Controller;
    class Controller{
        function redirect($url){
            ?>
                <script>
                    if (confirm('Thêm thành công')) {
                        window.location = "<?= $url?>"
                    }
                </script>
            <?php
        }
    }
?>