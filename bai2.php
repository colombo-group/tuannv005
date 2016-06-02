<?php
    $numb = 0;
    echo '<form action="" method="post">'
        . '<h1>Bài 2: Vẽ đồ thị</h1>'
        .'Nhập số đồ thị muốn vẽ '
        .'<input type="number" name="numb" placeholder="Nhập 1 sô" />'
        .'<input type="submit"  value="Thêm" />'
        .'</form>';
        
    if(isset($_POST['numb'])) {
        $numb = $_POST['numb'];
    }
    
    if($numb > 0) {
        echo '<strong>Nhập các trường</strong><br><br>';
        echo '<form action="" method="post"';
            echo '<table border="1">';
                for($i = 0; $i < $numb; $i++){
                    $name = "name".$i;
                    $value = "value".$i;
         			    echo '<tr><td><input type = "text" name = "name[]" placeholder = "Nhập tên"></td>';
         			    echo '<td><input type = "number" name = "value[]" placeholder = "Nhập giá trị"></td></tr><br>';   
                }
            echo '</table>';
            echo '<br><input type="submit" value="Ve do thi"/>';
        echo '</form>'; 
    }
   
    
   
    // Draw 
    
        if(isset($_POST['name']) && isset($_POST['value'])){
        	$names = $_POST['name'];
        	$values = $_POST['value'];
            
        	echo '<h2>Hiển thị đồ thị</h2>';
        	echo '<table border = "1">';
        	for ($i=0; $i < sizeof($names) ; $i++) {
        		if($values[$i]>0){
        			$row = "";
        			$row .= 		'<tr>'
        				.			'<td>'.$names[$i].'</td>'	
        				.			'<td style = "width:150px">'
        				.				'<div style = "width:100px">'
        				.					'<div style = "border: solid red; width: '.$values[$i].'%; float:left; margin-top:5px; ">'
        				.					'</div>'
        				.				'</div>'
        				.				'<label>'.$values[$i].'%</label>'		
        				.			'</td>'
        				.		'</tr>';
        			echo $row;
        		}else{
        			echo '<label style = "color: red">Bạn đã nhập sai giá trị của tên: <b>'.$names[$i].'</b> ! Vui lòng nhập lại !</label>';
        			break;
        		} 
        		
        	}
        	echo '</table>';
        }
     

?>