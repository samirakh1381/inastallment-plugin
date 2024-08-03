
<?php
/*
Plugin Name: پلاگین اقساطی
Plugin URI: http://wordpress.org/plugins/installment/
Description:پلاگین خرید اقساطی
Author: samirakhajavi
Version: 7.4
Author URI: http://github.com
*/

add_action('admin_menu',function(){
    add_menu_page(
    'پلاگین اقساطی',
    'اقساطی' ,
    'manage_options',
    'instalment',
    function(){
        echo '<h1>سلام به پنل خوش آمدید</h1>';
    }
    );
    add_submenu_page( 
         'instalment',
        "افزودن", 
        "افزودن",
        'manage_options',
        'add_installment',
    function(){
        echo ' <form action=""method="post">
        <input type="text"name="serch">
        <input type="submit"name="sub">
    </form>';

    }
);
add_shortcode('content_form','show_form');

function show_form ()
{
?>
  <form action="" method="post">
      <label for="f_name">نام:</label><input type="text" id="f_name" name="f_name" required>;
      <lable for="L_name">فامیلی:</lable><input type="text" id="L_name" name="l_name" required>;
      <button name="send">ارسال</button>

  </form>

}

});

