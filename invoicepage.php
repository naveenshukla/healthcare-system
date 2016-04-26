<?php
session_start();
if(isset($_GET['a'])) {
    $_SESSION['appid'] = $_GET['a'];
  }
 {
    include 'dbconn.php';
    $appid = $_SESSION['appid'];
    $sql_insert = "select * from invoice where appid='$appid'";
    $result = mysql_query("$sql_insert");
    $num = mysql_num_rows($result);
    $json = array();
    if(mysql_num_rows($result)){
      while($row=mysql_fetch_row($result)){
        $json = $row;
      }
      $treatment  = $json[1];
    $medicine = $json[2];
    $test = $json[3];
    $payment = $json[4];
    //$comments = $json[5];
    }
    else{
        echo "<strong>Bill not paid.</strong>";
      echo "<script>setTimeout('window.open(\'newapp.php\')', 1000)</script>" ;
      echo "<script>setTimeout('window.close()', 1000)</script>" ;
    }
  }
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                M&A Health Care
                                <!-- <img src="http://nextstepwebs.com/images/logo.png" style="width:100%; max-width:300px;"> -->
                            </td>
                            
                            <td>
                                Invoice #: <?php 
                                    echo $_SESSION['appid'];
                                ?><br>
                                Created: <?php echo date("d/m/Y") ?><br>
                                 Due date:  <?php echo " ".date('d/m/Y', strtotime('+1 months')); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Madison and Aniston Health Care<br>
                                69, IIIT Road, Jhalwa,
                                Allahabad-211012
                            </td>
                            
                            <td>
                                <?php echo $_SESSION['name'] ?><br>
                                <?php echo $_SESSION['email'] ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Total Amount
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    <?php 
                        echo "$payment";
                    ?>
                </td>
                
                <td>
                    <?php 
                        $total=$treatment + $medicine + $test;
                        echo "Rs. $total";
                    ?>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Description
                </td>
                
                <td>
                    Amount
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Treatment
                </td>
                
                <td>
                    <?php 
                        echo "Rs. $treatment";
                    ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Medicines
                </td>
                
                <td>
                    <?php 
                        echo "Rs. $medicine";
                    ?>
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Tests
                </td>
                
                <td>
                    <?php 
                        echo "Rs. $test";
                    ?>
                </td>
            </tr>

            <tr class="item last">
                <td>
                    Tax at 7.5%
                </td>
                
                <td>
                    <?php 
                        $total=$treatment + $medicine + $test;
                        $total=$total*0.075;
                        echo "Rs. $total";
                    ?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: <?php 
                        $total=$treatment + $medicine + $test;
                        $total1=$total+$total*0.075;
                        echo "Rs. $total1";
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>