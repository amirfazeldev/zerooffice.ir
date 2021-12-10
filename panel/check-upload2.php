<html>
<head>
<meta charset="utf-8">
</head>
<?php 
mysql_connect("localhost:3306","shotec_zero","zero@office");
mysql_select_db("shotec_zero");
$name=$_FILES["file"]["name"];
$type=$_FILES["file"]["type"];
$size=$_FILES["file"]["size"];
$tmp=$_FILES["file"]["tmp_name"];
if(isset($_POST["btn"]))
{
	if($_FILES["file"]["error"]>0)
	{
		echo "Error1";
	}
	else
	{
		if(is_uploaded_file($tmp))//آیا اچ تی تی پی ساپورت میکند
		{
			$ext=array("image/jpeg","image/jpg","image/png","image/gif");
			if(in_array($type,$ext))
			{
				$filename=md5($name.microtime()).substr($name,-5,5);
				$move=move_uploaded_file($tmp,"./picture/".$filename);
				if($move)
				{
					$loc="/picture/".$filename;
					$a="INSERT INTO `pic2` VALUES (NULL, 'pic', '".$loc."');";
					mysql_query($a);
					echo "Your file was uploaded sucsessfully!";
					
					echo "فایل شما با موفقیت آپلود شد";
				}
				else
				{
					echo "فایل مورد نظر آپلود نشد";
				}
			}
			else
			{
				echo "پسوند فایل شما مجاز نمیباشد";
			}
		}
		else
		{
			echo "http cant upload";
		}
	}
}
?>

</html>