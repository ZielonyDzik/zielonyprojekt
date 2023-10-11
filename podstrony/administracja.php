<div class="swiper-slide">
        <table>
            <td>
                <img src="img/fiveways2.jpg" class="photo">
            </td>
            <td>
        <section class="text">
        <p class="text_title" style="margin-top:0; margin-bottom: 5px;">💠 FiveWays - Administracja 💠</p>
    <table class="admin_table">
    
    <tr>
    <?php
$a = new mysqli("localhost","root","","zielonyprojekt");
$a->query("SET NAMES 'utf8'");
$d = 0;
if ($b=$a->query("SELECT id, nick, ranga, discord_id, data_dolaczenia, avatar, klasa FROM administracja;"))
{
    while($c=$b->fetch_assoc())
    {
        // echo "".$c["nick"]."test";
        echo "<td><div class='kafelek'><img src='/img/avatary/".$c["avatar"]."' class='kafelek_photo'><br><span class='".$c["klasa"]."'>".$c["nick"]."<br>".$c["ranga"]."</span></div></td>";
        $d = $d + 1;
        if(($d % 3) == 0 && ($d < 9)){
            echo("</tr><tr>");
        }
    }
    $b->close();
}
$a->close();

    ?>
    </tr>
    </table>
        </section>
            </td>
    </table>
</div>
