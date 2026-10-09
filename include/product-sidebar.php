<?php
$page = basename($_SERVER['PHP_SELF']);

function active($filename)
{
    global $page;
    return ($page == $filename) ? 'active' : '';
}
?>

<!-- Post Sidebar-->
<div class="post-sidebar post-sidebar-inset">
    <div class="row row-lg row-60">

        <div class="col-sm-6 col-lg-12">
            <?php
            $delacour = [
                'delacour-astra-series.php' => 'DeLaCour Astra Series',
                'delacour-balsa-cladding.php' => 'DeLaCour Balsa Cladding',
                'delacour-terra-series.php' => 'DeLaCour Terra Series',
                'delacour-wpc-crome.php' => 'DeLaCour WPC Crome',
                'delacour-wpc-luxe.php' => 'DeLaCour WPC Luxe',
                'delacour-wpc-wave.php' => 'DeLaCour WPC Wave',
                'delacour-wpc-antique.php' => 'DeLaCour WPC Antique',
                'delacour-wpc-casanova.php' => 'DeLaCour WPC Casanova',
                'delacour-xyla-series-tube-25x40.php' => 'DeLaCour Xyla Series Tube 25x40',
                'delacour-xyla-series-2.php' => 'DeLaCour Xyla Series 2',
                'delacour-balsa-deck-tiles.php' => 'DeLaCour Balsa Deck Tiles',
                'delacour-balsa-decking.php' => 'DeLaCour Balsa Decking',
                'delacour-lacasa-series-wpc-3d-embossed-decking.php' => 'DeLaCour Lacasa Series WPC 3D Embossed Decking',
                'delacour-wpc-antique-decking.php' => 'DeLaCour WPC Antique Decking',
                'interior-cladding.php' => 'Interior Cladding'
            ];

            $truecour = [
                'truecour-aceer.php' => 'TRUECOUR Aceer',
                'truecour-bostik.php' => 'TRUECOUR Bostik',
                'truecour-bruce.php' => 'TRUECOUR Bruce',
                'truecour-montage.php' => 'TRUECOUR Montage',
                'truecour-portofino.php' => 'TRUECOUR Portofino',
                'truecour-parquet-flooring.php' => 'TRUECOUR Parquet Flooring',
                'truecour-new-flooring-range-catalogue.php' => 'TRUECOUR New Flooring Range Catalogue',
                'truecour-flooring.php' => 'TRUECOUR Flooring',
                'solid-wood-flooring.php' => 'Solid Wood Flooring'
            ];

            $deckwalk = [
                'pine-thermory.php' => 'Pine Thermory',
                'deck-tiles.php' => 'Deck Tiles',
                'ipe.php' => 'IPE',
                'thermo-ash.php' => 'Thermo Ash'
            ];

            $veneers = [
                'premium-textured-veneer.php' => 'Premium Textured Veneer',
                'lume-veneer-catalogue.php' => 'Lume Veneer Catalogue',
                'textured-fluted-veneer.php' => 'Textured & Fluted Veneer'
            ];

            $current_products = [];
            $current_title = 'Our Products';

            if (array_key_exists($page, $delacour)) {
                $current_products = $delacour;
                $current_title = 'DELACOUR WPC DECKING & CLADDING';
            } elseif (array_key_exists($page, $truecour)) {
                $current_products = $truecour;
                $current_title = 'TRUECOUR FLOORS';
            } elseif (array_key_exists($page, $deckwalk)) {
                $current_products = $deckwalk;
                $current_title = 'DECKWALK WOOD';
            } elseif (array_key_exists($page, $veneers)) {
                $current_products = $veneers;
                $current_title = 'TRUECOUR VENEERS';
            }
            ?>

            <div class="post-sidebar-item">
                <h5><?= $current_title; ?></h5>

                <div class="post-sidebar-item-inset inset-right-20">
                    <ul class="list list-categories">

                        <?php foreach ($current_products as $file => $title): ?>
                            <li>
                                <a class="<?= active($file); ?>" href="<?= $file; ?>">
                                    <?= $title; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-12">
            <div class="post-sidebar-item">
                <h5>Get in Touch</h5>
                <div class="post-sidebar-item-inset">
                    <ul class="list-contacts">

                        <li>
                            <div class="unit unit-spacing-xs">
                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                <div class="unit-body">
                                    <a class="link-phone" href="tel:919810884029">+91 98108 84029</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="unit unit-spacing-xs">
                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                <div class="unit-body">
                                    <a class="link-phone" href="tel:919810331333">+91 98103 31333</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="unit unit-spacing-xs">
                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                <div class="unit-body">
                                    <a class="link-email" href="mailto:goodwillinteriors82@gmail.com">goodwillinteriors82@gmail.com</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="unit unit-spacing-xs">
                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span>
                                </div>
                                <div class="unit-body">
                                    <a class="link-location" href="https://maps.app.goo.gl/ABVAWcbCZzAb3R9C8"
                                        target="_blank">
                                        288, Block B, Sector 26A, Gurugram, Haryana 122002
                                    </a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>