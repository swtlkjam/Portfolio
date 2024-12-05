<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $mycart=array_column($_SESSION['cart'], 'Price');
            if(in_array($_POST['Price'], $mycart))
            {
                echo"<script>
                alert('Product already added to cart');
                window.location.href='cart.php';
                </script>";
            }
            else
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Product_name'=>$_POST['Product_name'], 'Product_type'=>$_POST['Product_type'], 'Price'=>$_POST['Price']);
             echo"<script>
                alert('Product added to cart');
                window.location.href='cart.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Plan_name'=>$_POST['Product_name'], 'Product_type'=>$_POST['Product_type'], 'Price'=>$_POST['Price']);
            $mycart=array_column($_SESSION['cart'], 'Product_name');
            if(in_array($_POST['Product_name'], $mycart))
            {
                echo"<script>
                alert('Product added to cart');
                window.location.href='cart.php';
                </script>";
            }
        }
    }
    if(isset($_POST['Remove']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Product_name']==$_POST['Product_name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                window.location.href='cart.php';
                </script>";
            }
        }
    }
    }
?>