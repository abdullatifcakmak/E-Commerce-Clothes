<?php

include "views/_header.php";

?>

   <!-- Main Content -->
   <div class="main-content">
      <h1>Kategori Yönetimi</h1>

      <!-- Kategoriler Tablosu -->
      <div class="card">
        <h3>Mevcut Kategoriler</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Kategori Adı</th>
              <th>Açıklama</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Üst Giyim</td>
              <td>Tişörtler, kazaklar, ceketler</td>
              <td>
                <button class="btn">Düzenle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
            <tr>
              <td>Alt Giyim</td>
              <td>Pantolonlar, etekler</td>
              <td>
                <button class="btn">Düzenle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
            <tr>
              <td>Dış Giyim</td>
              <td>Kabanlar, montlar</td>
              <td>
                <button class="btn">Düzenle</button>
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