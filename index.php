<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>two-digit decimal combination</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/style.css" />
</head>

<body>
    <main>
        <section class="glass">
            <div class="container">
                <div class="row d-flex justify-content p-1">
                    <?php
                    echo "<h5>two-digit decimal combination</h5>";
                    ?>
                </div>
            <?php
            $num=0;
                while($num<100){
                    if($num<10){
                        echo "0$num, ";
                        $num++;                       
                    }else{
                        if($num==99){
                            echo "$num";
                            break;
                        }
                        else{
                            echo "$num, ";
                            $num++;
                        }
                    }
                }
            ?>
            </div>
        </section>
    </main>
</body>
</html>