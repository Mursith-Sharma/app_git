<pre>
    <?php

    $_cookie_name = "testhero";                             // ivaruthan developers normal aaha cookies inai website il add pannuvar
    $_cookie_value = $_SERVER["REQUEST_URI"];
    setcookie($_cookie_name, $_cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    echo __LINE__;
    print_r("_SERVER");
    print_r($_SERVER);
    print_r("_GET");
    print_r($_GET);
    print_r("_POST");
    print_r($_POST);
    print_r("_FILES");
    print_r($_FILES);
    print_r("_COOKIE");
    print_r($_COOKIE);


    echo __LINE__;
    ?>
</pre>