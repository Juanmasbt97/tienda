<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalles zapatillas | R-Shop</title>
        <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/home/simbolo.png"> 
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/price-range.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/animate.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/main.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">  
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>
        <?php $this->load->view('plantilla/encabezado'); ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categorías</h2>
                            <div class="panel-group category-products"><!--category-productsr-->
                                <?php foreach (get_categorias() as $categoria): ?>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><a href="<?= site_url('Inicio/productos_tienda/' . $categoria->id_categoria); ?>"><?= $categoria->nombre ?></a></h4>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div><!--/category-products-->

                        </div>
                    </div>
                    <?php foreach ($producto as $detalle): ?>
                        <div class="col-sm-9 padding-right">
                            <div class="product-details"><!--product-details-->
                                <div class="col-sm-5">
                                    <div class="view-product">
                                        <img src="<?= base_url() . $detalle->imagen ?>" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-information"><!--/product-information-->
                                        <h2><?= $detalle->nombre ?></h2>
                                        <p>Código: <?= $detalle->codigo ?></p>
                                        <p>Descuento: <?= $detalle->descuento ?>%</p>
                                        <span>
                                            <span><?= $detalle->precio_venta ?> €</span>
                                            <label>Cantidad:</label>
                                            <input type="text" value="1" />
                                            <a href="<?= site_url('Carrito/agregar_producto/' . $detalle->id_producto); ?>" class="btn btn-fefault cart" role="button">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </a>
                                        </span>
                                        <p><b>En stock:</b> <?= $detalle->stock ?></p>
                                    </div><!--/product-information-->
                                </div>
                            </div><!--/product-details-->

                            <div class="category-tab shop-details-tab"><!--category-tab-->
                                <div class="col-sm-12">
                                    <ul class="nav nav-tabs">
                                        <li><a>Descripción del producto</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="reviews" >
                                        <div class="col-sm-12">
                                            <p><?= $detalle->descripcion ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/category-tab-->
                        <?php endforeach; ?>
                            
                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Recomendados</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?=base_url(); ?>assets/img/home/recommend1.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= base_url(); ?>assets/img/home/recommend2.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= base_url(); ?>assets/img/home/recommend3.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= base_url(); ?>assets/img/home/recommend1.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= base_url(); ?>assets/img/home/recommend2.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= base_url(); ?>assets/img/home/recommend3.jpg" alt="" />
                                                        <h2>$56</h2>
                                                        <p>Easy Polo Black Edition</p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>

        <?php $this->load->view('plantilla/pie'); ?>


        <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?= base_url(); ?>assets/js/price-range.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?= base_url(); ?>assets/js/main.js"></script>
    </body>
</html>