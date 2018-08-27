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
    

