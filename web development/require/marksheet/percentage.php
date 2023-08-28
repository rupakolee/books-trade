<?php
                if (isset($_POST['submit'])) {
                    
                    $avg = ($_POST['pas'] + $_POST['dsa'] + $_POST['java'] + $_POST['sad'] + $_POST['web']) / 5;
                    $avg=$avg/60*100;
                    echo $avg . '%';
                }
                ?>