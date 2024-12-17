<!DOCTYPE html>
<html>
<head>
	<title>LokaBaca Struk</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/struk/')?>styles.css">
</head>
<body>

<section>
  <div class="invoice">
   
    <div class="invoice_right">
      <div class="title" style="text-align:center;">
        <h1>Lokabaca</h1>
        <p style="font-size:19px;">Book Store</p>
        
        
      </div>
      <div class="i_table">
        <div class="i_table_head">
        <p style="font-size:13px; text-align:left;">Nama : <?= $orders->email ?></p>
        <p style="font-size:13px; text-align:left;">Tanggal : <?= $orders->tanggal ?></p>
        <br>
          <div class="i_row">
            <div class="i_col w_50">
              <p class="p_title  text_left">DESCRIPTION</p>
            </div>
            <div class="i_col w_15 text_center">
              <p class="p_title">QTY</p>
            </div>
            <div class="i_col w_20 text_center">
              <p class="p_title">PRICE</p>
            </div>
            <div class="i_col w_15 text_right">
              <p class="p_title">TOTAL</p>
            </div>
          </div>
        </div>
        <div class="i_table_body">
        <?php
            $no = 1;
            foreach ($this->cart->contents() as $items) : ?>
          <div class="i_row">
            <div class="i_col w_50">
              <p><?php echo $items['name']?></p> 
            </div>
            <div class="i_col w_15 text_center">
              <p><?php echo $items['qty']?> pcs</p>
            </div>
            <div class="i_col w_20 text_center">
              <p>Rp<?= number_format($items['price'],0,',','.')?></p>
            </div>
            <div class="i_col w_15 text_right">
              <p>Rp<?= number_format($orders->total,0,',','.')?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="i_table_foot">
          <div class="i_row">
            <div class="i_col w_50">
              <p>Sub Total</p>
            
            </div>
            <div class="i_col w_55 text_right">
              <p>Rp. <?php echo number_format($this->cart->total(),0,',','.')?></p>
             
            </div>
          </div>
          <div class="i_row grand_total_wrap">
            <div class="i_col w_50">
              <p>GRAND TOTAL:</p>
            </div>
            <div class="i_col w_55 text_right">
              <p>Rp. <?php echo number_format($this->cart->total(),0,',','.')?></p>
            </div>
          </div>
        </div>
        
      </div>
      <div class="terms" >
        <p style="text-align:center;">Terimakasih telah berbelanja di LokaBaca</p>
      </div>
    </div>
  </div>
</section>
<script>
    window.print();
</script>
</body>
</html>