<?php
    ob_start();
    require 'config.php';
    require 'form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deneme</title>
    <style type="text/css">
    * {
        padding: 0;
        margin: 0;
        font-family: Arial;
        font-size: 14px;
        }
    form {
            padding: 20px;
            }
    form label {
        display: block;
        padding: 7px;
        border: 1px solid #eee;
        margin-bottom: 10px;
            }
    form label p {
        margin-bottom: 7px;
    }
    h4{
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <form action="" method="post">
        <?php foreach ($config as $conf){ ?>
        <?php if(isset($conf['name'])) {?>
        <label>
            <p><?php echo $conf['text']; ?></p>
            <?php if(!isset($conf['type'])){ ?>
                <input style="<?php echo isset($conf['style']) ? $conf['style'] : null; ?>" type="text" name="<?php echo $conf['name']; ?>" value="<?php echo isset($template[$conf['name']]) ? $template[$conf['name']] : ''; ?>" />
            <?php } elseif( $conf['type'] === 'textarea') {?>
                <textarea name="<?php echo $conf['name']; ?> " style="<?php echo isset($conf['style']) ? $conf['style'] : null; ?>" ><?php echo isset($template[$conf['name']]) ? stripslashes($template[$conf['name']]) : ''; ?></textarea>
                <?php } ?>
        </label>
        <?php } else {?>
        <h4><?php echo $conf[0]; ?></h4>
        <?php } ?>
        <?php } ?>
        <button type="submit" name="submit">Ayarları Kaydet</button>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $template = '<?php'.PHP_EOL;

            foreach( $config as $conf){
                $value = htmlspecialchars($_POST[$conf['name']], ENT_QUOTES);
                $template .= '$template[\''.$conf['name'].'\'] = \''.$value.'\';'.PHP_EOL;
            }

            file_put_contents('form.php', $template);

            header('Location:index.php'); 
    
        }

    ?>
</body>
</html>