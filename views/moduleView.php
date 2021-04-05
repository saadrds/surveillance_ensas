<br>
<div class="container">
<h1 class="mr-4">Gestion de Module de <div id="idModule" hidden><?php  echo $_GET["idModule"];?></div></h1><br>
			<div class="inner">
<form action="DSController.php" method="post" id="form1">
					<h3>Ajouter Un DS</h3>
                    <br>
                    <label>type de DS :</label>
					<select class="form-select" aria-label="Default select example" name="selection" id="selection">
                        
                        <option value="DS1">DS1</option>
                        <option value="DS2">DS2</option>
                        <option value="Rattrappage">Rattrappage</option>
                    </select>
                    <br>
                    <br><br>
					<div class="form-holder">
                    <label>Local:</label>
						<input type="text" placeholder="Local de DS" id="local" name="local" class="form-control" style="font-size: 15px;">
					</div>
                    <br>
                    <br>
                    <div class="form-holder">
                        <label>date du DS :</label>
						<input type="date" placeholder="date de ds" name="date_ds" class="form-control" style="font-size: 15px;" id="date">
					</div>
                    <br>
                    <div class="form-holder">
                        <label>Heure de debut :</label>
						<input type="time"  name="heure_debut" class="form-control" style="font-size: 15px;" id="heure_debut">
                        <label>Heure de fin:</label>
                        <input type="time"  name="heure_fin" class="form-control" style="font-size: 15px;" id="heure_fin">
					</div>
                    <br>
                    <div class="form-holder">
                    <label>ajouter un Surveillance :</label>
						<input type="text" placeholder="Surveillant" name="surv" class="form-control" id="surv" style="font-size: 15px;">
					</div>
                    <br>
                    <div id="listAjax"></div>
                    <br>
                    <ul id="survList">
                        
                        </ul>
                        <br><br>
					<div class="form-login">
						<button type="submit" form="form1" value="Submit" class="btn btn-primary my-2" id="submitDS">Ajouter Un DS</button>
						
					</div>
                   <div id="content"></div>
                    
				</form>
</div>
</div>