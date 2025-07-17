<?php

include "views/_header.php";

?>

    <!-- Main Content -->
    <div class="main-content">
      <h1>Stok Durumu</h1>

      <!-- Stok Durumu Tablosu -->
      <div class="card">
        <h3>Mevcut Stoklar</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Ürün Adı</th>
              <th>Kategori</th>
              <th>Mevcut Stok</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>T-Shirt</td>
              <td>Üst Giyim</td>
              <td>50 Adet</td>
              <td>
                <button class="btn">Güncelle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
            <tr>
              <td>Kot Pantolon</td>
              <td>Alt Giyim</td>
              <td>30 Adet</td>
              <td>
                <button class="btn">Güncelle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
            <tr>
              <td>Kaban</td>
              <td>Dış Giyim</td>
              <td>20 Adet</td>
              <td>
                <button class="btn">Güncelle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
<?php

include "views/_footer.php";

?>