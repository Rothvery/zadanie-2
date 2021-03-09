
<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

        $interest ="";
        $total_interest ="";
        $total_amount ="";
        $funds_per_month ="";
        $output ="";
            if (isset($_GET['submit'])){
                $amount = $_GET['kwota'];
                $period = $_GET['okres'];
                $rate = $_GET['oprocentowanie'];
                
                $interest = $rate/100*$amount;
                $total_interest = $rate/100*$amount*$period;
                $total_amount = $amount + $total_interest;
                $funds_per_month = $total_amount/$period;
                
                
                
            }
            include 'calc_view.php';
        ?>