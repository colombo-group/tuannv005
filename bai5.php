<html>
    <body style="text-align: center;">
        <?php
        echo '<form action="" method="post">'
            .'<h1>Bài 4: Vẽ tam giác theo quy luật</h1>'
            .'<input type="text" name="number"/>'
            .'<input type="submit" name="submit" value="Ve tam giac"/>'
            .'</form>';
        
        if(isset($_POST['submit'])) {
            $number = $_POST['number'];
            if(is_numeric($number) && (int)$number == floatval($number) && $number >0) {
                for ($i=1; $i<=$number; $i++) {
                    for($j = $i; $j > $i/2; $j--){
        		    	$x = $j % 10;
        		        echo $x . '  ';
        		    }
        		    for($k = ceil($i/2) + 1; $k <= $i; $k++ ){
        		    	$y = $k % 10;
        		      	echo $y . '  ';
        		    }
        		  	echo "<br>";
                    }
            }
            else {
                echo "Bạn đã nhập sai! Vui lòng nhập lại!";
            }
        }
        ?>
    </body>
</html>

