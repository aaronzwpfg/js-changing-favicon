<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>js changing favicon</title>
  </head>
  <body>
    <script>
    
      function changeFavIcon(src) {
        var lnk = document.createElement('link'), oldLnk = document.getElementById('dynamic-favicon');
        
        link.id = 'dynamic-favicon';
        link.rel = 'shortcut icon';
        link.href = src;
        
        if(oldLnk) {
          document.head.removeChild(oldLnk);
        }
        
        document.head.appendChild(link);
      }
    
    </script>
  </body>
</html>
