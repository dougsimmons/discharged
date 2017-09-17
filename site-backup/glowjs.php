  <script src="/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="/jquery-glow/src/jquery.color.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="/jquery-glow/src/jquery-glowing.min.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('.white').addGlow({ textColor: 'white', haloColor: '#aaa', radius: 100 });
      $('.blue').addGlow({ textColor: '#00f', haloColor: '#00f', radius: 100 });
      $('.green').addGlow({ textColor: '#0f0', haloColor: '#0f0', radius: 100 });
      $('.red').addGlow({ textColor: '#f00', haloColor: '#f00', radius: 100 });
      $('*').bind('glow:started', console.info);
      $('*').bind('glow:canceled', console.info);
    });
    
  </script>

