<?php
                if (isset($_POST['submit'])) {
                    if ($avg >= 90 && $avg < 100) {
                        echo "Distinction";
                    } elseif ($avg >= 80 && $avg < 90) {
                        echo "First";
                    } elseif ($avg >= 70 && $avg < 80) {
                        echo "Second";
                    } elseif ($avg >= 60 && $avg < 70) {
                        echo "Third";
                    } elseif ($avg >= 50 && $avg < 60) {
                        echo "Fourth";
                    } else {
                        echo "Non-Graded";
                    }
                }
                ?>