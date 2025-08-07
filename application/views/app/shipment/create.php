<form action="" method="post">
    <label for="">Nama Barang</label>

    <label for="senderName">Nama Pengirim</label>
    <input type="text" name="senderName" id="senderName"><br>
    <?php echo form_error('senderName', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="senderEmail">Email Pengirim</label>
    <input type="email" name="senderEmail" id="senderEmail"><br>
    <?php echo form_error('senderEmail', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="senderAddress">Alamat Pengirim</label>
    <input type="text" name="senderAddress" id="senderAddress"><br>
    <?php echo form_error('senderAddress', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="senderCountry">Negara Pengirim</label>
    <input type="text" name="senderCountry" id="senderCountry"><br>
    <?php echo form_error('senderCountry', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="senderCity">Kota Pengirim</label>
    <input type="text" name="senderCity" id="senderCity"><br>
    <?php echo form_error('senderCity', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="senderPostalCode">Kode Pos Pengirim</label>
    <input type="text" name="senderPostalCode" id="senderPostalCode"><br>
    <?php echo form_error('senderPostalCode', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="senderPhone">No. HP Pengirim</label>
    <input type="text" name="senderPhone" id="senderPhone"><br>
    <?php echo form_error('senderPhone', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverName">Nama Penerima</label>
    <input type="text" name="receiverName" id="receiverName"><br>
    <?php echo form_error('receiverName', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverEmail">Email Penerima</label>
    <input type="email" name="receiverEmail" id="receiverEmail"><br>
    <?php echo form_error('receiverEmail', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverAddress">Alamat Penerima</label>
    <input type="text" name="receiverAddress" id="receiverAddress"><br>
    <?php echo form_error('receiverAddress', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverCountry">Negara Penerima</label>
    <input type="text" name="receiverCountry" id="receiverCountry"><br>
    <?php echo form_error('receiverCountry', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverCity">Kota Penerima</label>
    <input type="text" name="receiverCity" id="receiverCity"><br>
    <?php echo form_error('receiverCity', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverPostalCode">Kode Pos Penerima</label>
    <input type="text" name="receiverPostalCode" id="receiverPostalCode"><br>
    <?php echo form_error('receiverPostalCode', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="receiverPhone">No. HP Penerima</label>
    <input type="text" name="receiverPhone" id="receiverPhone"><br>
    <?php echo form_error('receiverPhone', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="itemDescription">Deskripsi Barang</label>
    <input type="text" name="itemDescription" id="itemDescription"><br>
    <?php echo form_error('itemDescription', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="itemWeight">Berat Barang (kg)</label>
    <input type="number" name="itemWeight" id="itemWeight"><br>
    <?php echo form_error('itemWeight', '<small class="text-danger pl-3">', '</small>'); ?> <br>


    <label for="itemValue">Lenght</label>
    <input type="number" name="itemLength" id="itemLength"><br>
    <?php echo form_error('itemLength', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="itemWidth">Width</label>
    <input type="number" name="itemWidth" id="itemWidth"><br>
    <?php echo form_error('itemWidth', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="itemHeight">Height</label>
    <input type="number" name="itemHeight" id="itemHeight"><br>
    <?php echo form_error('itemHeight', '<small class="text-danger pl-3">', '</small>'); ?> <br>

    <label for="itemCategory">Kategori Barang</label>
    <select name="itemCategory" id="itemCategory">
        <option value="">Pilih Kategori</option>
        <option value="electronics">Elektronik</option>
        <option value="clothing">Pakaian</option>
        <option value="furniture">Perabotan</option>
        <option value="books">Buku</option>
        <option value="other">Lainnya</option>
        <?php echo form_error('itemCategory', '<small class="text-danger pl-3">', '</small>'); ?> <br>
    </select><br>
    <button type="submit">submit</button>
</form>