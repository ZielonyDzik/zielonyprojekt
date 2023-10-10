<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Zielony Projekt</title>
</head>
<body>

<?php
$page = $_GET['page'] ?? 'dzik';
?>

    <table class="structure_table">
        <tr>
         <td>
            <section class="bg_section">

        <?php
        if($page == 'dzik'){
            $photo = "dzik1.jpg";
            $title = "ZIELONY DZIK";
            $line = "width: 39rem;";
        } elseif($page == 'fiveways') {
            $photo = "fiveways.png";
            $title = "FIVEWAYS RP";
            $line = "width: 40rem;";
        } elseif($page == 'tworcy') {
            $photo = "tworcy3.jpg";
            $title = "TWÓRCY STRONY";
            $line = "width: 36rem;";
        };
        ?>

        <img src='img/<?php echo $photo;?>' class='bg_section'>

        </section>
            <section class="default_section">
          
            <fieldset style="border: 2px solid rgb(158, 158, 158); margin: 1em auto;">
                <legend style="width: 90%; padding: 0;">
                    <div style="display: inline-block; line-height: 1;">
                        <div style="float: left; padding: 0 20px; font-size: 32pt;"><a href=""><?php echo $title;?></a></div>
                        <div style="float: left; height: 2px; background-color: rgb(158, 158, 158); <?php echo $line;?>  margin-top: 1.4rem;"></div>
                        <div style="float: left; padding: 0 5px; margin-top: 9px; font-size: 16pt;"><a href="/?&page=dzik">Zielony Dzik</a></div>
                        <div style="float: left; height: 2px; background-color: rgb(158, 158, 158); width: 4rem;  margin-top: 1.4rem;"></div>
                        <div style="float: left; padding: 0 5px; margin-top: 9px; font-size: 16pt"><a href="/?&page=fiveways">FiveWays RP</a></div>					
                        <div style="float: left; height: 2px; background-color: rgb(158, 158, 158); width: 4rem;  margin-top: 1.4rem;"></div>
                        <div style="float: left; padding: 0 5px; margin-top: 9px; font-size: 16pt"><a href="/?&page=tworcy">O twórcach</a></div>
                    </div>
                </legend>	


                    <div class="swiper-container">



    <div class="swiper-wrapper">
        <?php 

    if($page == 'dzik'){
        require_once("podstrony/sociale.php");
        require_once("podstrony/discord.php");
        require_once("podstrony/donatorzy.php");
    } elseif($page == 'fiveways') {
        require_once("podstrony/reklama.php");
        require_once("podstrony/administracja.php");
        require_once("podstrony/podania.php");
    } elseif($page == 'tworcy'){
        require_once("podstrony/tworcy.php");
    };
    
        ?>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
var body = document.body;
var slider = new Swiper ('.swiper-container', {
    pagination: '.swiper-pagination',
    direction: 'vertical',
    slidesPerView: 1,
    paginationClickable: true,
    spaceBetween: 300,
    mousewheelControl: true,
});
</script>
                    
            </fieldset>	
            </section>
         </td>
        </tr>
       </table>
</body>
</html>