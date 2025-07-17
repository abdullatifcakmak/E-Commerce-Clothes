<?php

include "views/_header.php";

?>
     <!-- Main Content -->
     <div class="main-content">
      <h1>Dashboard</h1>

      <!-- İstatistik Kartları -->
      <div class="dashboard-stats">
        <div class="stat-card">
          <h3>₺60,000</h3>
          <p>Toplam Satış</p>
        </div>
        <div class="stat-card">
          <h3>200</h3>
          <p>Toplam Sipariş</p>
        </div>
        <div class="stat-card">
          <h3>120</h3>
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

      <!-- Son Siparişler -->
      <div class="card">
        <h3>Son Siparişler</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Sipariş ID</th>
              <th>Müşteri Adı</th>
              <th>Ürün Adı</th>
              <th>Toplam Fiyat</th>
              <th>Tarih</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#00123</td>
              <td>Ali Yılmaz</td>
              <td>T-Shirt</td>
              <td>₺49.99</td>
              <td>12/09/2024</td>
            </tr>
            <tr>
              <td>#00124</td>
              <td>Ayşe Demir</td>
              <td>Kot Pantolon</td>
              <td>₺89.99</td>
              <td>11/09/2024</td>
            </tr>
            <tr>
              <td>#00125</td>
              <td>Mehmet Kara</td>
              <td>Kaban</td>
              <td>₺149.99</td>
              <td>10/09/2024</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

<?php

include "views/_footer.php";

?>