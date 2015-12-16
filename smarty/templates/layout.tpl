{config_load file='config.conf'}
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />    
  
  <title>{block name=title}Default Page Title{/block}</title>
  
  
   <link rel="stylesheet" type="text/css" 
          href= "{#APPLICATION_PATH#}public/css/main.css">
</head>
<body>
    <div id="container">
        <h1>KSIĘGOZBIÓR</h1>
        {block name=body}{/block}
    </div>
</body>
</html>