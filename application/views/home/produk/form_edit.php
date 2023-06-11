<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Edit Produk</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">   
                    <form name="sentMessage"  method="post" action="<?php echo site_url('produk/edit');?>" enctype="multipart/form-data">
                    <div class="text-danger">
                    </div>
                        <input type="hidden" name="idToko" class="form-control" id="name" placeholder="Nama Toko"
                            data-validation-required-message="Please enter your name" value="<?= $produk->idToko;?>"/>
                        <input type="hidden" name="idProduk" class="form-control" id="name" placeholder="Nama Toko"
                            data-validation-required-message="Please enter your name" value="<?= $produk->idProduk;?>"/>
                        <input type="hidden" name="idKategori" class="form-control" id="name" placeholder="Nama Toko"
                            data-validation-required-message="Please enter your name" value="<?= $produk->idKat;?>"/>

                        <div class="control-group">
                        <label for="">Nama Produk</label>
                            <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"
                                    data-validation-required-message="Please enter your name" value="<?= $produk->namaProduk;?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control" id="name" placeholder="Gambar Produk"
                                    data-validation-required-message="Please enter your name" value="<?= $produk->foto;?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Harga Produk</label>
                            <input type="text" name="hargaProduk" class="form-control" id="name" placeholder="Harga Produk"
                                    data-validation-required-message="Please enter your name" value="<?= $produk->harga;?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Jumlah Produk</label>
                            <input type="text" name="jumlahProduk" class="form-control" id="name" placeholder="Jumlah Produk"
                                    data-validation-required-message="Please enter your name" value="<?= $produk->stok;?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Berat Produk</label>
                            <input type="text" name="beratProduk" class="form-control" id="name" placeholder="Berat Produk"
                                    data-validation-required-message="Please enter your name" value="<?= $produk->berat;?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Deskripsi Produk</label>
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                    data-validation-required-message="Please enter your message"><?= $produk->deskripsiProduk;?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
