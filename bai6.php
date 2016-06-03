    
        <?php
            $value1 = $value2 = $result = 0;
            $comment = "";
            if(isset($_POST['value1'])) {
                $value1 = $_POST['value1'];
            }
            if(isset($_POST['value2'])) {
                $value2 = $_POST['value2'];
            }
            
            if(is_numeric($value1) && is_numeric($value2)) {
                if(isset($_POST['add'])) {
                    $result = $value1 + $value2;
                    
                }
                
                if(isset($_POST['sub'])) {
                    $result = $value1 - $value2;
                }
                
                if(isset($_POST['multi'])) {
                    $result = $value1 * $value2;
                }
                
                if(isset($_POST['divi'])) {
                    if($value2 == 0) {
                        $comment="Khong ton tai phep chia cho 0. Vui long nhap lai Value2!=0"
                    }else {
                        $result = $value1 / $value2;
                    }
                    
                }
                
                if(isset($_POST['pow'])) {
                    $result = pow($value1, $value2);
                }
                        
            }
            else {
                $comment="Ban da nhap sai! Vui long nhap lai!";
            }
        ?>
        
<h1> Bài 6: Máy tính điện tử </h1>
<form action = "" method = "post">
    <input type="text" name="value1" placeholder="Giá trị 1" value="<?php echo $value1; ?>" />
    <input type="submit" value="+" name="add" />
    <input type="submit" value="-" name="sub" />
    <input type="submit" value="x" name="multi" />
    <input type="submit" value="/" name="divi" />
    <input type="submit" value="^" name="pow" />
    <input type="text" name="value2" placeholder="Giá trị 2" value="<?php echo $value2; ?>" />
    = <input type="text" value = "<?php echo $result;?>"  />
    <p><?php echo $comment; ?></p>
</form>        

