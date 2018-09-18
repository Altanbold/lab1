<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head><title>Hello my lab1</title>
  <body>
    <!-- Статик болон динамик агуулгын ялгаа -->
    <p font-color:"green" >Энэ бол статик агуулга.</p>
    
    <?php echo "PHP скриптээр, програмын кодоор үүсгэсэн динамик агуулга."; ?>
    <p>Вэб серверийн цаг: 
       <span><?php 
              // Системийн цагийг HTTP гаралтад бичих
              echo "Өнөөдөр бол " . date("Y/m/d");
             ?></span>
    <p>
  </body>
</html>