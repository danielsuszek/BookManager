<!doctype>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    

    <title>myMvc3</title>
    <link rel="stylesheet" type="text/css" 
          href= "<?php echo APPLICATION_PATH;?>/public/black.css">
    <script type="text/javascript" 
        src="<?php echo APPLICATION_PATH;?>/public/javascript/jquery-1.11.1.min.js"></script>
   
    <?php 
    // add all js scripts from /views/$controller/js
    if (isset($this->js) && isset($this->controller)) {
        $this->includeJS($this->controller, $this->js);
    }
    ?>
</head>
<body>
    <div id="header">Nagłówek</div>
    <div id="menu">
        <a class="menu" href="<?php echo APPLICATION_PATH;?>index/index">Index</a>
        <?php if(Session::get('loggedIn') == false): ?>
            <a class="menu" href="<?php echo APPLICATION_PATH;?>login/index">Login</a>
        <?php else : ?>
            <a class="menu" href="<?php echo APPLICATION_PATH;?>dashboard/logout">Logout</a>
        <?php endif; ?>
    </div>
    <div id="content">       
