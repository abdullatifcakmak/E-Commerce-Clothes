<?php

include "views/_header.php";

?>

     <!-- Main Content -->
     <div class="main-content">
      <h1>Raporlar</h1>

      <!-- İstatistikler -->
      <div class="stat-box">
        <div class="stat">
          <h3>₺50,000</h3>
          <p>Toplam Satış</p>
        </div>
        <div class="stat">
          <h3>150</h3>
          <p>Toplam Sipariş</p>
        </div>
        <div class="stat">
          <h3>75</h3>
          <p>Yeni Müşteriler</p>
        </div>
      </div>

      <!-- Satış Grafiği -->
      <div class="card">
        <h3>Aylık Satış Grafiği</h3>
        <div class="chart">
          <img src="sales_chart_placeholder.png" alt="Aylık Satış Grafiği" />
        </div>
      </div>

      <!-- En Çok Satan Ürünler -->
      <div class="card">
        <h3>En Çok Satan Ürünler</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Ürün Adı</th>
              <th>Kategori</th>
              <th>Satış Miktarı</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>T-Shirt</td>
              <td>Üst Giyim</td>
              <td>200 Adet</td>
            </tr>
            <tr>
              <td>Kot Pantolon</td>
              <td>Alt Giyim</td>
              <td>150 Adet</td>
            </tr>
            <tr>
              <td>Elbise</td>
              <td>Üst Giyim</td>
              <td>120 Adet</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php

include "views/_footer.php";

?>