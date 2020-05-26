<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Example payment usage - Swedbank - Pangalink-net</title>
</head>
<div>
    <div align="left"><a href="https://pangalingid.tak17lehtsi.itmajakas.ee/">Mine esilehele</a></div>
</div>
<body>
<?php
$eesnimi = filter_input(INPUT_POST, 'Eesnimi', FILTER_SANITIZE_STRING);
$perekonnanimi = filter_input(INPUT_POST, 'Perekonnanimi', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
$telefon = filter_input(INPUT_POST, 'Telefon', FILTER_SANITIZE_STRING);
$total = filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);

// THIS IS AUTO GENERATED SCRIPT
// (c) 2011-2020 Kreata OÜ www.pangalink.net

// File encoding: UTF-8
// Check that your editor is set to use UTF-8 before using any non-ascii characters

// STEP 1. Setup private key
// =========================

$private_key = openssl_pkey_get_private(
    "-----BEGIN RSA PRIVATE KEY-----
MIIEowIBAAKCAQEA6DMBjW6PxuDesY8DgKtoDaMOS+2g0rCP0uAfWGKcRcnE4acB
7qwof0nwya/zbgzdXh+smBNR0zGl7JUv8Ot82erVIzay8CrNUPiRwaTG0LCKqa7T
hhNsgxTaF6QgljkdZnXwr23KSN4IySBoMWvjaRGJU6173CwCxwDtFniegrYVYzps
hX0rvhrWHwpEFZx1PsvEomHDg6TW8oe0Q25I4/ckZMf9CzKKAAK9Lrqhzhv63dql
k0Z2MhlXEWqsg5CVmgmA99C+RzgZC2z+bA0pEpZbLg67/r8hItZFVIXcDSJzVSQK
tFEj+4haCXizhw/pSeb74lMOEnwi9HzidVt/EQIDAQABAoIBAQCKbt5eE6xkRWx/
L2RHMem3N58uZV2cPueAMV5+s0u3z7MxVQAx6zG5sbt8gwn+cm0H0Jp1kA8YemER
y1/ponus7/RiKhpEVUBTJd7ANBzUDmyc/T3ekXYAME5WCePjq+l7TJVSAYK4LqfO
QSPdUxUhbvMQkD1n5lVBj6vJ2d+mzQTzcYBXzYNETuK3yflTg9NFMruU+8tXUOGw
S/vUaRSUXU6OHOoI0UCbI4RZK5KhMAKWPi27v0XB7jI/tameCm6gHeY7TMgXV7CL
nZahceLbBd5+zjbp693sX18MA9cA8vdzAYjDraMbO3XGtDzwLsL1yYPYIguuPcbx
m3HBjraBAoGBAPeiJ5J7+OXKyy3dHEdnYOuSD5ObRNZ2L7FRNMhoeCYWaEaEkbJW
svzhRIcnUycCxLSUQfV9Q3G/izGo2Mx+XNs3OG3JNJF1uypg6Qu+zZJUe+UmO4A/
0a1WbN18yD10WnkmacLFxqzogsUwhzK+RN9leg1bd5oUyHzkSCy0Gq8vAoGBAPAL
W3m9hwf7lCviB6nhMxtVDl/xJ53iSqGItCBEz0oG441KOh4CUIZUY9lhCUNb/e7R
CNUG1Kv2F/kUBffK/mPva1igH5zAgbPwPbIbRCxbtrQPf9q5CepPQor94XPLPrJw
MFmCasLqJYxyWhoFGYmMSOlGPfhkYBBDI37XryW/AoGAHs10zqvNEghfrZzLX7Zk
P+kzNtEhhuu8kvne7u7Pwy0WW28yEFTofrwmogkqNrgJb8zhR4AFW6jPz6WJEibF
th7wTfexKkbSuTrEwklBmOoZXy+aRyGpGz6c3BAheEN43YkBrtCbHfbuDUk0CAPS
3VbqD69I+UmMhrx+ndDpYNECgYB+9DLEFzXkRe0erGOLODyUVw7MNTnTqcv41NkX
O+055JzSrBBCsMyvztAkNsr0YiHR/aIjMIKoE/an2Cwz2ptidUybycwOVk4CwauP
mBYdM8BUSOJA5p5U2uiBpDZpzHNzYhxgKraWMcn8FrqKimnwMk6ZeXnq9gNMdoW+
XwoV9wKBgELiBe6roM8b0ebKTd4hP1uU/n46FmPwq6F4CDjkWYCP2O8yRM6N+B2J
rQlsijk09dc0XxTIpE3ie7QkxGeYix+3tWdPWL5AaLRvDp16owjGgQJNaaVsqS/c
+gtFa9Hpe63GKgE5NZPiJlZFXymRweuKDKCdE+WH/HhnP7XeH3n4
-----END RSA PRIVATE KEY-----");

// STEP 2. Define payment information
// ==================================

$fields = array(
    "VK_SERVICE"     => "1011",
    "VK_VERSION"     => "008",
    "VK_SND_ID"      => "uid100010",
    "VK_STAMP"       => "12345",
    "VK_AMOUNT"      => $total,
    "VK_CURR"        => "EUR",
    "VK_ACC"         => "EE182200221041094456",
    "VK_NAME"        => $eesnimi . $perekonnanimi,
    "VK_REF"         => "1234561",
    "VK_LANG"        => "EST",
    "VK_MSG"         => "Torso Tiger",
    "VK_RETURN"      => "http://pangalingid.tak17lehtsi.itmajakas.ee/from-bank.php?action=success",
    "VK_CANCEL"      => "http://pangalingid.tak17lehtsi.itmajakas.ee/from-bank.php?action=cancel",
    "VK_DATETIME"    => date(DATE_ISO8601),
    "VK_ENCODING"    => "utf-8",
);

// STEP 3. Generate data to be signed
// ==================================

// Data to be signed is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Swedbank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
    str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
    str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100010 */
    str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
    str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
    str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
    str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE182200221041094456 */
    str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* Henry Lehtsi */
    str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
    str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
    str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:8080/project/C587L3v6Qh1fZyzy?payment_action=success */
    str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /* http://localhost:8080/project/C587L3v6Qh1fZyzy?payment_action=cancel */
    str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2020-05-26T18:59:50+0300 */

/* $data = "0041011003008009uid10001000512345003150003EUR020EE182200221041094456012Henry Lehtsi0071234561011Torso Tiger069http://localhost:8080/project/C587L3v6Qh1fZyzy?payment_action=success068http://localhost:8080/project/C587L3v6Qh1fZyzy?payment_action=cancel0242020-05-26T18:59:50+0300"; */

// STEP 4. Sign the data with RSA-SHA1 to generate MAC code
// ========================================================

openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

/* OWEBLqXT6glVTpJswmsx7LnPIUZsub+KzvsQjspJeO7YcJr/qs4B9o8siGLsCDavsUBDHedjCnlaWh5uKq+DtQk2nV4dLvi7ZnJyDATo/tSgCXl8b6Qge96tXnH5z9icdjXiWI+IDpDlAcOlZje393ynvcYH89lcVsOZFq+Q0hzQJX0g9oN/BaFWBO2dQGfcfUR7ohwqGQGL2L9RScbqPKF7fIitEZvrt6NGFJiE4hCv+19WNWMo+WABvTMKD0TJT9gMPaZ3CfKm9atB/dheANY8eg0JABa1PrbZXnlS+n3nPt7aodtNFU9Ou0SmGaTcIESeTd0IqpxkMEFaDh1snQ== */
$fields["VK_MAC"] = base64_encode($signature);

// STEP 5. Generate POST form with payment data that will be sent to the bank
// ==========================================================================
?>

<h1><a href="http://localhost:8080/">Pangalink-net</a></h1>
<p>Makse teostamise näidisrakendus <strong>"Henry Lehtsi"</strong></p>

<form method="post" action="http://localhost:8080/banklink/swedbank-common">
    <!-- include all values as hidden form fields -->
    <?php foreach($fields as $key => $val):?>
        <input type="hidden" name="<?php echo $key; ?>" value="<?php echo htmlspecialchars($val); ?>" />
    <?php endforeach; ?>

    <!-- draw table output for demo -->
    <table>
        <?php foreach($fields as $key => $val):?>
            <tr>
                <td><strong><code><?php echo $key; ?></code></strong></td>
                <td><code><?php echo htmlspecialchars($val); ?></code></td>
            </tr>
        <?php endforeach; ?>

        <!-- when the user clicks "Edasi panga lehele" form data is sent to the bank -->
        <tr><td colspan="2"><input type="submit" value="Edasi panga lehele" /></td></tr>
    </table>
</form>

</body>
</html>
