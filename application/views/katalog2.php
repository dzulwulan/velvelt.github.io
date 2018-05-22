<!DOCTYPE html>
<!-- saved from url=(0053)file:///D:/INFORMATIKA%20SMT4/webpro/TUBES/slide.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Velvet.com </title>
  <link rel="shortcut icon"  href="./Welcome to Otong.com_files/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Welcome to Otong.com_files/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="./Welcome to Otong.com_files/jquery.min.js.download"></script>
  <script src="./Welcome to Otong.com_files/bootstrap.min.js.download"></script>
  <script>
      $(document).ready(function(){
        $("#man1").mouseenter(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 7(1).jpg")
        });
        $("#man1").mouseleave(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 7.jpg")
        });
        $("#man2").mouseenter(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 8(1).jpg")
        });
        $("#man2").mouseleave(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 8.jpg")
        });
        $("#man3").mouseenter(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 9(1).jpg")
        });
        $("#man3").mouseleave(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 9.jpg")
        });
        $("#man4").mouseenter(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 10(1).jpg")
        });
        $("#man4").mouseleave(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 10.jpg")
        });
        $("#man5").mouseenter(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 11(1).jpg")
        });
        $("#man5").mouseleave(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 11.jpg")
        });
        $("#man6").mouseenter(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 12(1).jpg")
        });
        $("#man6").mouseleave(function(){
          $(this).attr("src","./Welcome to Otong.com_files/katalog 12.jpg")
        });
      })
    </script>
  <style>
      .contain{
          position:relative;
          height: 50%;
          width: 50%;

      }
      .catalog{
          height:80%;
          width: 90%;
      }
      .brand{
          font-weight: bold;
          font-size: 15px;
          color: black;
          
      }
      .product{
          font-size: 13px;
          color: darkgrey;
        
      }
      .price{
          font-size: 15px;
          color:navy;
          float:right;
          margin-right: 30px;
      }
    .catalog-categori{
        color: black;
        text-align: center;
        font-size: 20px;

    }
    .categori{
        margin-bottom: 20px;
    }
    .choose{
        background-color:#f1f1f1;
    }
      


  }
  </style>
  </head>
  <body>
   <?php include 'header.php'; ?>
    <div class="col-md-12 categori">
            <ul class="nav navbar-nav text-center">
                    <li><a href="katalog1.html" class="catalog-categori">WOMAN</a></li>
                    <li class="choose"><a href="#" class="catalog-categori">MEN</a></li>
            </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
               <img src="./Welcome to Otong.com_files/katalog 7.jpg"  class="img-thumbnail catalog" id="man1">
               <div>
                   <p class="brand">BRANDED</p>
                   <p class="product">Slim Fit Micro-Feeder Stripe Jersey Polo Shirt</p><br>
                   <p class="price">IDR 149.000 </p>
               </div>
            </div>
            <div class="col-sm-4">
                <img src="./Welcome to Otong.com_files/katalog 8.jpg" class="img-thumbnail catalog" id="man2">
                <div>
                        <p class="brand">BRANDED</p>
                        <p class="product">Indigo-Dyed Cotton Chambray Sport Shirt</p><br>
                        <p class="price">IDR 230.000 </p>
                </div>
            </div>
            <div class="col-sm-4">
              <img src="./Welcome to Otong.com_files/katalog 9.jpg" class="img-thumbnail catalog" id="man3">
              <div>
                    <p class="brand">BRANDED</p>
                    <p class="product">Cashmere Crewneck Sweater</p><br>
                    <p class="price">IDR 487.000 </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-sm-4">
                   <img src="./Welcome to Otong.com_files/katalog 10.jpg"  class="img-thumbnail catalog" id="man4">
                   <div>
                       <p class="brand">BRANDED</p>
                       <p class="product">Garment-Dyed Stretch Chinos</p><br>
                       <p class="price">IDR 299.000 </p>
                   </div>
                </div>
                <div class="col-sm-4">
                    <img src="./Welcome to Otong.com_files/katalog 11.jpg" class="img-thumbnail catalog" id="man5">
                    <div>
                            <p class="brand">BRANDED</p>
                            <p class="product">116 Slim Stretch Jeans in Indigo Denim</p><br>
                            <p class="price">IDR 310.000 </p>
                    </div>
                </div>
                <div class="col-sm-4">
                  <img src="./Welcome to Otong.com_files/katalog 12.jpg" class="img-thumbnail catalog" id="man6">
                  <div>
                        <p class="brand">BRANDED</p>
                        <p class="product">Suede Sneakers</p><br>
                        <p class="price">IDR 260.000 </p>
                  </div>
                </div>
              </div>
            </div>
        </div>

      <?php include 'footer.php'; ?>
</body>
</html>