<form class="prodavnica" id="proizvodi"> 
 <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Balejaz</h3>
      <img src="img/carousel/balejaz.jpg" alt="...">
      <div class="caption">
        <p>Cena:<strong> 2000 dinara</strong></p>
        <label for="jedan"></label><input type="text" id="jedan" size="3" placeholder="0">
        <button class="button"><span>Dodaj u korpu </span></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Kratka muska</h3>
      <img src="img/carousel/shortmale.jpg" alt="...">
      <div class="caption">
        <p>Cena:<strong> 800 dinara</strong></p>
        <label for="dva"></label><input type="text" id="dva" size="3" placeholder="0">
        <button class="button"><span>Dodaj u korpu</span></button>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h3>Viking</h3>
      <img src="img/carousel/viking.jpg" alt="...">
      <div class="caption">
        <p>Cena:<strong>1700 dinara</strong></p>
        <label for="tri"></label><input type="text" id="tri" size="3" placeholder="0">
        <button class="button"><span>Dodaj u korpu </span></button>
      </div>
    </div>
  </div>
</div>

</form>
<style>
.button {
  border-radius: 4px;
  background-color: gray;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 10px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>