<?php

include "views/_header.php";

?>

 <!-- Main Content -->
 <div class="main-content">
      <h1>Sipariş Yönetimi</h1>

      <!-- Siparişler Tablosu -->
      <div class="card">
        <h3>Mevcut Siparişler</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Sipariş No</th>
              <th>Müşteri Adı</th>
              <th>Sipariş Tarihi</th>
              <th>Toplam Tutar</th>
              <th>Sipariş Durumu</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>#00123</td>
              <td>Ahmet Yılmaz</td>
              <td>2024-09-10</td>
              <td>₺249.99</td>
              <td>Onaylandı</td>
              <td><button class="btn">Görüntüle</button></td>
            </tr>
            <tr>
              <td>#00124</td>
              <td>Elif Kaya</td>
              <td>2024-09-11</td>
              <td>₺399.99</td>
              <td>Kargoya Verildi</td>
              <td><button class="btn">Görüntüle</button></td>
            </tr>
            <tr>
              <td>#00125</td>
              <td>Mert Demir</td>
              <td>2024-09-12</td>
              <td>₺179.99</td>
              <td>İptal Edildi</td>
              <td><button class="btn">Görüntüle</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php

include "views/_footer.php";

?>