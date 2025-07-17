<?php

include "views/_header.php";

?>

 <!-- Main Content -->
 <div class="main-content">
      <h1>Ürün Yönetimi</h1>

      <!-- Ürünler Tablosu -->
      <div class="card">
        <div class="card-baslik">
        <h3>Mevcut Ürünler</h3>
        <button type="button" class="btn-danger">Ürün Ekle</button>

        </div>
        

        <table class="table">
          <thead>
            <tr>
              <th>Ürün Adı</th>
              <th>Kategori</th>
              <th>Fiyat</th>
              <th>Stok Durumu</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>T-Shirt</td>
              <td>Üst Giyim</td>
              <td>₺49.99</td>
              <td>50 Adet</td>
              <td><button class="btn">Düzenle</button></td>
            </tr>
            <tr>
              <td>Kot Pantolon</td>
              <td>Alt Giyim</td>
              <td>₺89.99</td>
              <td>30 Adet</td>
              <td><button class="btn">Düzenle</button></td>
            </tr>
            <tr>
              <td>Kaban</td>
              <td>Dış Giyim</td>
              <td>₺149.99</td>
              <td>20 Adet</td>
              <td><button class="btn">Düzenle</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php

include "views/_footer.php";

?>