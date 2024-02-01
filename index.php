<?php
    include __DIR__.'/Models/Category.php';
    include __DIR__.'/Models/Food.php';
    include __DIR__.'/Models/Toy.php';
    include __DIR__.'/Models/Accessory.php';

    require_once __DIR__.'/database/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>New Products</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php
                        foreach($products as $product){
                    ?>
                        <div class="col-12 col-md-4">
                            <div class="card h-100">
                                <img src="<?php echo $product->image; ?>" alt="<?php echo $product->name; ?>" class="card-img-top">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3><?php echo $product->name; ?></h3>
                                    </div>
                                    <div class="card-text">
                                        <p>
                                            <i class="<?php echo $product->category->icon; ?>"></i>
                                            <?php echo $product->category->name; ?>
                                    </div>
                                    <div class="card-text">
                                        <p>
                                            <?php echo $product->getPrice(); ?>
                                        </p>
                                    </div>
                                    <div class="card-text">
                                        <p>
                                            <?php if(get_class($product) == 'Food'){?>
                                                <p>
                                                    Weight: <?php echo $product->weight; ?>
                                                </p>
                                                <p>
                                                    Ingredients: <?php echo implode(', ', $product->ingredients); ?>
                                                </p>
                                            <?php } ?>
                                            <?php if(get_class($product) == 'Toy'){?>
                                                <p>
                                                    Features: <?php echo $product->features; ?>
                                                </p>
                                                <p>
                                                    Size: <?php echo $product->size; ?>
                                                </p>
                                            <?php } ?>
                                            <?php if(get_class($product) == 'Accessory'){?>
                                                <p>
                                                    Material: <?php echo $product->material; ?>
                                                </p>
                                                <p>
                                                    Size: <?php echo $product->size; ?>
                                                </p>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>