<?php

include "views/_header.php";

?>

     <!-- Main Content -->
     <div class="main-content">
      <h1>Müşteriler</h1>

      <!-- Müşteriler Tablosu -->
      <div class="card">
        <h3>Müşteri Listesi</h3>
        <table class="table">
          <thead>
            <tr>
              <th>Ad</th>
              <th>E-posta</th>
              <th>Sipariş Sayısı</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ahmet Yılmaz</td>
              <td>ahmetyilmaz@example.com</td>
              <td>5</td>
              <td>
                <button class="btn">Detay</button>
                <button class="btn">Güncelle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
            <tr>
              <td>Aylin Demir</td>
              <td>aylindemir@example.com</td>
              <td>3</td>
              <td>
                <button class="btn">Detay</button>
                <button class="btn">Güncelle</button>
                <button class="btn">Sil</button>
              </td>
            </tr>
            <tr>
              <td>Mehmet Aksoy</td>
              <td>mehmetaksoy@example.com</td>
              <td>8</td>
              <td>
                <button class="btn">Detay</button>
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