<?php
    require_once '../../conn.php';

    $id_pembayaran = $_GET['id_pembayaran'];
    $sql = "SELECT * FROM pembayaran JOIN user JOIN ticket ON pembayaran.id_user = user.id_user WHERE
    pembayaran.id_ticket = ticket.id_ticket AND pembayaran.id_pembayaran = '$id_pembayaran'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<?php 
?>
<style>
    div.b128 {
        border-left: 1px black solid;
        height: 30px;
    }
</style>
<?php
global $char128asc,$char128charWidth;
$char128asc=' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~'; 
$char128wid = array(
 '212222','222122','222221','121223','121322','131222','122213','122312','132212','221213', // 0-9 
 '221312','231212','112232','122132','122231','113222','123122','123221','223211','221132', // 10-19 
 '221231','213212','223112','312131','311222','321122','321221','312212','322112','322211', // 20-29 
 '212123','212321','232121','111323','131123','131321','112313','132113','132311','211313', // 30-39 
 '231113','231311','112133','112331','132131','113123','113321','133121','313121','211331', // 40-49 
 '231131','213113','213311','213131','311123','311321','331121','312113','312311','332111', // 50-59 
 '314111','221411','431111','111224','111422','121124','121421','141122','141221','112214', // 60-69 
 '112412','122114','122411','142112','142211','241211','221114','413111','241112','134111', // 70-79 
 '111242','121142','121241','114212','124112','124211','411212','421112','421211','212141', // 80-89 
 '214121','412121','111143','111341','131141','114113','114311','411113','411311','113141', // 90-99
 '114131','311141','411131','211412','211214','211232','23311120' ); // 100-106

////Define Function
function bar128($text) { // Part 1, make list of widths
 global $char128asc,$char128wid; 
 $w = $char128wid[$sum = 104]; // START symbol
 $onChar=1;
 for($x=0;$x<strlen($text);$x++) // GO THRU TEXT GET LETTERS
 if (!( ($pos = strpos($char128asc,$text[$x])) === false )){ // SKIP NOT FOUND CHARS
 $w.= $char128wid[$pos];
 $sum += $onChar++ * $pos;
 } 
 $w.= $char128wid[ $sum % 103 ].$char128wid[106]; //Check Code, then END
 //Part 2, Write rows
 $html="<table cellpadding=0 cellspacing=0 style='margin: auto;'><tr>"; 
 for($x=0;$x<strlen($w);$x+=2) // code 128 widths: black border, then white space
 $html .= "<td><div class=\"b128\" style=\"border-left-width:{$w[$x]};width:{$w[$x+1]}\"></div></td>"; 
 return "$html<tr><td colspan=".strlen($w)." align=left><font family=arial size=2>$text</td></tr></table>"; 
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="invoice2.css" />
    <title>Invoice <?= $id_pembayaran ?></title>
    <table class="body-wrap">
        <input type="hidden" id="role" value="<?= $_SESSION['role'] ?>">
        <tbody>
            <tr>
                <td></td>
                <td class="container" width="600">
                    <div class="content">
                        <table class="main" width="100%" cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td class="content-wrap aligncenter">
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <td class="content-block">
                                                        <h2>Terima Kasih Sudah Menggunakan Aplikasi Kami</h2>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-block">
                                                        <table class="invoice">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Kenpark<br>Invoice
                                                                        #<?= $id_pembayaran ?><br>
                                                                        <?= $data['Tanggal_pembelian'] ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table class="invoice-items" cellpadding="0"
                                                                            cellspacing="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Nama Ticket</td>
                                                                                    <td>Nominal</td>
                                                                                    <td>Harga</td>
                                                                                    <td></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td><?= $data['jenis_wisata'] ?>
                                                                                    </td>
                                                                                    <td><?= $data['total_pembayaran']/$data['harga'] ?>
                                                                                    </td>
                                                                                    <td> <?= $data['harga'] ?>
                                                                                    </td>
                                                                                    <td class="alignright">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr class="total">
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td class="alignright">Total</td>
                                                                                    <td class="alignright">Rp.
                                                                                        <?= number_format($data['total_pembayaran']) ?>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="content-block"">
                                                        Barcode<br>
                                                        <?=bar128($id_pembayaran);?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class=" content-block">
                                                        Kenpark<br>
                                                        <b><small>Dapat dipake untuk tiket masuk</small></b>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>

</html>

<script>
    window.print();
    var a = document.getElementById("role").value;
    console.log(a);
    window.onafterprint = function () {
        if (a == 1) {
            document.location.href = "../index_admin.php";
        } else {
            document.location.href = "../index.php";
        }
    }
</script>