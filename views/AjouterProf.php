    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 40px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, .btn {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      .btn {
      width: 40%;
      text-align: center;
      }
      .divajouterProf{
          text-align: center;
      }
      .btn:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      background-color:#ECF0F1;

      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      background-color:#ECF0F1;
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
  <div>
        
    </div>
    <div class="container main-block">
      <form action='AddProfInDataBase.php' method='post'>
      <p style="color:green;"><?php if(isset($messagegreen)){ echo $messagegreen ;}?></p>
      <p style="color:red;"><?php if(isset($messagered)){ echo $messagered ;}?></p><br>
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Ajouter Prof</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="nomProf" placeholder="Nom">
          <input type="text" name="prenomProf" placeholder="Prenom">
          <input type="email" name="email" placeholder="Email">
          <input type="text" name="telephone" placeholder="T??l??phone">

        </div>
        <div class="divajouterProf">
        <button type="submit" name="submit" class="btn">Ajouter ce professeur</button>
        </div>
      </form>
    </div>
<?php 
    require_once('../controllers/templates/footer.php');
?>