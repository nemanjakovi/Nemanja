<?php if (isset($_GET["submit"])) {
    $address = $_GET["address"];
    $my_address = "My address";

    // API
    $api_url = "https://api.etherscan.io/api?module=account&action=txlist&address=" . $address . "&startblock=0&endblock=999999&page=1&offset=10&sort=asc&apikey=QK9NKE8T499F8PJIG1C7JNSDKI6QHCMTD6";
    // JSON
    $show = json_decode(file_get_contents($api_url), true);

    if ($show["message"] === "NOTOK") {
        $error = "Error! Invalid address format";
        header("location:index.php?invalid-adres-format");
    }
}
