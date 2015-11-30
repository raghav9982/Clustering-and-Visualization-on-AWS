<html>
<head>
</head>
<body>

<form enctype="multipart/form-data" action="Upload.php" method="post">
    <input type="hidden" name="upload" value="1"/>
    Submit this file: <input name="userfile" type="file"/><br/>
    <label>Clusters:
        <input type="text" name="clusters"/>
    </label>
    <input type="submit" value="Send File"/>
</form>


<?php
if (isset($_POST['upload'])) {
    $thisfile = $_FILES['userfile']['name'];
    $clusters = $_POST['clusters'];
    /*  exec("java -cp weka.jar weka.core.converters.CSVLoader $thisfile > output.arff", $output);
      print_r($output);

      exec("java -cp weka.jar weka.clusterers.SimpleKMeans -t okar.arff -N 3 > okarop.csv", $output);//this line outputs only cluster info
      exec("java -cp weka.jar weka.filters.unsupervised.attribute.AddCluster -i output.arff -o output.arff -W \"weka.clusterers.SimpleKMeans -N 2\"", $output);//this command appends cluster to input file
      exec("java -cp weka.jar weka.core.converters.CSVSaver -i output.arff -o output.csv", $output); */
    // exec("java -jar Assign4Weka.jar output.csv output.arff ", $output);
    exec("java -jar Assign4Weka.jar $thisfile output.arff $clusters", $output);
    //exec("java -jar Assign4Weka.jar -i output.arff -o output.csv ", $output);
//    print_r($output);
    sleep(20);
    header("Location:Upload.html");

} else {
    echo "error";
}
?>

</body>
</html>















