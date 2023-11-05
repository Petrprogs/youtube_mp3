<html>
<body>
<style>
table, th, td {
  border:1px solid black;
}
</style>
    <table>
        <tr>
        <?php 
    $url = "https://me0xn4hy3i.execute-api.us-east-1.amazonaws.com/staging/api/resolve/resolveYoutubeSearch?search=".urlencode($_GET["q"]);
    $search_raw = file_get_contents($url);
    $search_json = json_decode($search_raw, true);
    foreach ($search_json["data"] as $item) {
        echo "<th>".$item["title"]."<br><a href=download.php?id=".$item["videoId"].">Download MP3</a></th>";
    }
    ?>  </tr>
        </table>
        <p><a href=index.php>Back to Home</a></p>
</body>
</html>