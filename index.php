<?php

?>
<body style="background: url('https://static.vecteezy.com/system/resources/previews/002/026/057/non_2x/girl-wearing-virtual-reality-machine-vr-portrait-view-vector.jpg'); background-size:cover; background-repeat: no-repeat; background-color:black;">
 <center>    
 <br><br><br><br><br><br><br><br>  
<form method="POST" enctype="multipart/form-data" action="upload.php">
<h1 style="color: white;">360 VIRTUAL EXPERIENCE OF UPES, Dehradun</h1>
	
    <button style="width:220px; height: 50px; background-color:green; font-size:20px; "><a href="index2.html" style="text-decoration: none;color:white;">Click to view in VR</a></button>
	
	<h2 style="color: white;">or select your video file</h2>
    <input type="file" name="file"> <br><br><br>
    <input type="submit" value="Upload"><br><br><br>

</form>

</center>
</body>

<?php


$files = scandir("uploads");

for($a=2; $a<count($files); $a++)
{
    ?>
    <p>
    <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>" ><?php echo $files[$a] ?></a>
    </p>
    <?php
}

