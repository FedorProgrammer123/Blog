<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $connect = mysqli_connect('127.0.0.1','root','root','блог');
       if($connect == True){
           echo "Успешное подключение";
           $result = mysqli_query($connect,"CREATE TABLE статьи(
            id INT PRIMARY KEY AUTO_INCREMENT,
            title VARCHAR(100),
            describ TEXT(300),
            public_data DATE,
            );");
            $states = mysqli_query($connect,"INSERT INTO `статьи`(`id`,`title`,`describ`,`public_data`)VALUES(1,'Как похудеть на 30 кг?','In augue sagittis nec senectus cubilia  nibh, nibh, nam ornare hendrerit sollicitudin conubia litora habitant. Praesent sodales sed condimentum class turpis massa sapien euismod dapibus fermentum. Torquent dolor cursus, vehicula. At. Nibh habitant fringilla nulla. Quis cum bibendum rutrum consectetuer sed inceptos phasellus tincidunt at. Imperdiet faucibus. Enim nonummy libero dapibus aliquet laoreet pede nunc, gravida. Platea gravida. Turpis platea. Est blandit vel dictum habitant, eleifend molestie faucibus porta maecenas nibh sollicitudin Lacus felis. 
            Amet Inceptos in, pellentesque ultricies sed odio. Egestas penatibus velit quam dis.','05.03.2000')");
            $soup = mysqli_query($connect,"INSERT INTO `статьи`(`id`,`title`,`describ`,`public_data`)VALUES(2,'Как приготовить суп?','Vestibulum quis. Hendrerit, interdum leo vehicula maecenas metus curabitur fusce amet, suscipit, convallis lacinia. Orci nulla fringilla vulputate ridiculus penatibus nostra penatibus feugiat enim luctus commodo molestie dictum arcu massa elit consectetuer in tortor sed ultricies, nibh lectus euismod eleifend eget, ut non, erat euismod. Fusce primis ridiculus inceptos. Dictum. Natoque scelerisque risus maecenas purus mollis libero bibendum sociis torquent iaculis rutrum torquent per aliquam quis, eget pulvinar. Pharetra, ut magnis suscipit non montes elit sodales ad Phasellus accumsan blandit taciti suscipit, primis consectetuer nisi integer fermentum hendrerit porta duis turpis. 
            Litora dictum mattis duis aliquam scelerisque nonummy nullam erat.','12.02.2020')");
            $categories = mysqli_query($connect,"CREATE TABLE категории(
                id INT PRIMARY KEY AUTO_INCREMENT,
                title VARCHAR(200)
            );");
            $cat = mysqli_query($connect,"INSERT INTO `категории`(`title`) VALUE ('Спорт')");
            $programming = mysqli_query($connect,"INSERT INTO `категории`(`id`,`title`) VALUES (2,'Программирование')");
            $priroda = mysqli_query($connect,"INSERT INTO `категории`(`id`,`title`) VALUES(3,'Природа')");
            $add_categori = mysqli_query($connect,"ALTER TABLE `статьи` ADD `categories` INT AFTER `public_data`");
            $update = mysqli_query($connect,"UPDATE`статьи` SET categories = 1 WHERE `id` = 1");
       }
       else{
           echo "Провал";
           echo mysqli_connect_error();
       }
    ?>
</body>
</html>