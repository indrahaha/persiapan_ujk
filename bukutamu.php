
<?php
        if (isset($_POST['submit'])) {
            echo '<div class="alert alert-primary" role="alert">Data anda berhasil tersimpan</div>';
        }
        ?>

<form method="POST" action="">
    <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama"  placeholder="Masukkan nama anda" >
    <br>
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <br>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="masukkan email anda">
    <br>
    </div>
    <div class="form-group">
    
    <textarea name="pesan" id="pesan" name="pesan" cols="80" rows="10" placeholder="masukan pesan anda" placeholder="masukkan pesan anda"></textarea>
    </div>


<button type="submit" class="btn btn-primary alert" name="submit">Submit</button>
</form>

