<script>
  const memberNo = <?php echo isset($_SESSION['memberNo']) ? $_SESSION['memberNo'] : null ?>;
</script>
<script defer="defer" src="./view/ui_article.js"></script>
<div style='margin-top: 20px;'>
  <h1 id="title"></h1>
  <table class="borderless">
    <tr>
      <td class='boldtitre'>Auteur.e.s :</td>
      <td id="author"></td>
    </tr>
    <tr>
      <td class='boldtitre'>Éditeur :</td>
      <td id="editor"></td>
    </tr>
    <tr>
      <td class='boldtitre'>Édition :</td>
      <td id="edition"></td>
    </tr>
    <tr>
      <td class='boldtitre'>Année de parution :</td>
      <td id="publication"></td>
    </tr>
    <tr>
      <td class='boldtitre'>Code EAN13 :</td>
      <td id="ean13"></td>
    </tr>
  </table>
  <p id="quantity"></p>
</div>