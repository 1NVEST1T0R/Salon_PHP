<div class="page-header">
	<h2>Prodavnica</h2>
</div>
<form method="post" action="php/racun.php">
	<div class="row">
   <div class="col-sn-6 col-md-4"> 
    <div class="thumbnail">
     <h3>Balejaz</h3>
     <img src="img/carousel/balejaz.jpg" alt="..." width="400px" height="400px">
     <div class="caption">
      <p>Cena:<strong> 2000 RSD</strong></p>
      <label for="jedan"></label><input type="text" id="jedan" size="10" placeholder="0" name="kolicina1">
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <h3>Muska kratka</h3>
    <img src="img/carousel/shortmale.jpg" alt="..." width="400px" height="400px">
    <div class="caption">
      <p>Cena:<strong> 800 RSD</strong></p>
      <label for="dva"></label><input type="text" id="dva" size="10" placeholder="0" name="kolicina2">
    </div>
  </div>
</div>
<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <h3>Viking</h3>
    <img src="img/carousel/viking.jpg" alt="..." width="400px" height="400px">
    <div class="caption">
      <p>Cena<strong> 1700 RSD</strong></p>
      <label for="tri"></label><input type="text" id="tri" size="10" placeholder="0" name="kolicina3">
    </div>
  </div>
</div>
</div>
<div class="row">
 <div class="col-md-12">
  <tr>
    <td>Datum i vreme termina:</td>
    <td align="center"><input type="text" name="vreme" size=40 maxlenght=40></td>
  </tr>
  <input type="submit" value="Zakazi">
</div>
</div>
</form>