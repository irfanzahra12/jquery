<!DOCTY html>
<html>
    <head>
        <title>praktikum 24 | Halaman web tanpa Reload</title>
        <script type="text/javascript"scr="asset/js/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet"  type="text/css" href="asset/css/style3.css">
</head>
  <body>
      <div class="content">
          <header>
              <h1 class="judul">Praktikum 24 </h1>
              <h3 class="deskripsi">Membuat Halaman website Tanpa Reaload dengan jquery</h3>
</header>
<div class="menu">
    <ul>
    <li><a class="Klik_menu" id="home">HOME</a></li>
    <li><a class="Klik_menu" id="home">TENTANG</a></li>
    <li><a class="Klik_menu" id="home">TOTURIAl</a></li>
    <li><a class="Klik_menu" id="sosmed">SOSIAL MEDIA</a></li>
</ul>
</div>

<div class="badan">
 
</div>
</body>
   <script type="text/javascript">
        $(document).ready(function() {
          $('.klik menu').click(function() {
            var menu=$(this).attr('id');
            if(menu == "home") {
                $('.badan').load('.home.php');
            }
            }else{   if(menu == "tentang") {
                $('.badan').load('.tentang.php');
            }
            }else{   if(menu == "toturial") {
                $('.badan').load('.toturial.php');
            
            
            }  
            
            }else{   if(menu == "sosmed") {
                $('.badan').load('.sosmed.php');
            
            }
          });
              //halaman yang di load pertama kali
              $('.badan').load('.home.php');

          });
        });

      
    </script>
     
</html>
