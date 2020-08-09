<?php 
    require_once('simple_html_dom.php');

    $context = stream_context_create(array(
        'http' => array(
            'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
        ),
    ));

    $url = $_GET['url'];
    $html = file_get_html($url, false, $context);

    echo($html);
    exit();
?>