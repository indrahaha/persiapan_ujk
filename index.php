<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    else{
        $page = 'home.php';
      
    }
?>

<?php
    include 'header.html';
?>

    

    <div class="container">
                    <?php 
                        include "$page";
                    ?>
                <!-- <h4 align="center" class="text-warning">our activity</h4>
                <img src="asset/1.jpg" alt="">
                <h5 align="center">3M</h5>
                <hr>
                <br>
                <h5>3M Company adalah sebuah konglomerat multinasional asal Amerika yang berbisnis di bidang industri, keselamatan pekerja, perawatan kesehatan, dan barang konsumen.[4] Perusahaan ini memproduksi lebih dari 60.000 produk, antara lain[5] lem, ampelas, laminasi, perlindungan api pasif, alat pelindung diri, film jendela, film perlindungan cat, produk ortodontik dan dental, bahan insulasi dan penghubung listrik dan elektronik, produk medis, produk perawatan mobil,[6] sirkuit elektronik, perangkat lunak perawatan kesehatan, dan film optis.[7] Perusahaan ini berkantor pusat di Maplewood, suburban Saint Paul, Minnesota.[8].</h5>
                <br>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempore accusantium, enim a, doloribus ratione eos velit, quo mollitia corporis hic animi voluptates. Necessitatibus quia delectus provident neque! Illum, perspiciatis!</h5>
                </div>     -->
                <!-- <div class="card">
                <h4 align="center" class="text-warning">our activity</h4>
                <img src="asset/1.jpg" alt="">
                <h5 align="center">3M</h5>
                <hr>
                <br>
                <h5>3M Company adalah sebuah konglomerat multinasional asal Amerika yang berbisnis di bidang industri, keselamatan pekerja, perawatan kesehatan, dan barang konsumen.[4] Perusahaan ini memproduksi lebih dari 60.000 produk, antara lain[5] lem, ampelas, laminasi, perlindungan api pasif, alat pelindung diri, film jendela, film perlindungan cat, produk ortodontik dan dental, bahan insulasi dan penghubung listrik dan elektronik, produk medis, produk perawatan mobil,[6] sirkuit elektronik, perangkat lunak perawatan kesehatan, dan film optis.[7] Perusahaan ini berkantor pusat di Maplewood, suburban Saint Paul, Minnesota.[8].</h5>
                <br>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem tempore accusantium, enim a, doloribus ratione eos velit, quo mollitia corporis hic animi voluptates. Necessitatibus quia delectus provident neque! Illum, perspiciatis!</h5>
                </div>     -->
                
        
    </div>



<?php
    include 'footer.html';
?>
    



