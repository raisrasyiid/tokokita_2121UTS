<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Tambah Produk</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">   
                    <form name="sentMessage"  method="post" action="<?php echo site_url('produk/save');?>" enctype="multipart/form-data">
                    <input type="hidden" name="idToko" value="<?php echo $idToko;?>">
                        <div class="control-group">
                            <select class="form-control" name="kategori">
                                <?php foreach ($kategori as $val){?>
                                    <option value="<?php echo $val->idkat; ?>"><?php echo $val->namaKat;?></option>
                                <?php } ?>
                            </select>
                            <p class="help-block text-danger"></p>
                            </div>
                        <div>
                            <label for="">Nama Produk</label>
                            <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"
                                data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control" id="emfail" placeholder="Gambar Produk"
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Harga Produk</label>
                            <input type="text" name="hargaProduk" class="form-control" id="emfail" placeholder="Harga Produk "
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Jumlah Produk</label>
                            <input type="text" name="jumlahProduk" class="form-control" id="emfail" placeholder="Jumlah Produk"
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Berat Produk</label>
                            <input type="text" name="beratProduk" class="form-control" id="emfail" placeholder="Berat Produk"
                                data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label for="">Deskripsi Produk</label>
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
