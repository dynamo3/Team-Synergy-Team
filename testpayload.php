<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

include 'db.php';
include 'payload.php';

$db = new DB;
$search = $_GET['search'];
print_r($search);

if ($search===''){
    $sql = "SELECT * FROM Companies";
} else {
    $sql = "SELECT * FROM Companies WHERE Name LIKE '%$search%'";

}

$results = $db->execute($sql);

Payload::$values = [];

while($row = $results->fetch_assoc()){
    $a = [];
    $a['Name'] = $row['Name'];
    $a['Industry'] = $row['Industry'];
    $a['Website'] = $row['Website'];
    $a['Logo'] = $row['Logo'];
    array_push(Payload::$values, $a);
 }   
    $payload = json_encode(Payload::$values);
    print_r(Payload::$values);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Company List</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
    <script> var payload = <?php echo "$payload";?></script>
    <script src="render.js"></script>
</head>
<body>
     <form action="testpayload.php" method="GET">
        <input type="text" name="search" placeholder="Find a company rating" size="75"><br>
        <button type="submit">Submit</button>
    </form>
    <ul class="listing">
        
    </ul>


    <script id="company-media-object" type="text/x-handlebars-template">
        {{#each this}}
            <li id="{{@key}}">
              <div class="outer">
                <img src="{{logo}}">
                <div class="content">
                  <h4>{{Name}}</h4>
                  <p>{{Industry}}</p>
                  <a href="{{Website}}">Company Website</a>
                </div>
              </div>
            </li>
        {{/each}}
    </script>
</body>
</html>