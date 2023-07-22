<?php
  $catmodel=new CategoryModel;
  $cats=$catmodel->getAll(['trash'=>0,'status'=>1]);
?>
<div class="card my-2">
    <div class="card-header  bg-black">
        <nav class="navbar navbar-expand-lg navbar-warning">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" style="color:#ffc107;font-weight:bold;font-size:20px;">
                                Các loại Sản Phẩm
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <?php foreach($cats as $cat){?>
                                <li><a class="dropdown-item"
                                        href="<?php echo BASE_URL?>product/productByCat/<?php echo $cat['alias'].'/'.LIMIT.'/0'?>"><?php echo $cat['catName']?></a>
                                </li>
                                <?php }?>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>