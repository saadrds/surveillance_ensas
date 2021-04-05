$(document).ready(function(e){
  $("#filiere").click(()=>{
    if($("#filiere").children('option:selected').val() == "CP"){
      $("#niveau").load("../views/niveaux/niveau12.html");
    }else{
      $("#niveau").load("../views/niveaux/niveau123.html");
    }
  });
});
  
  $("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "readRespoModule.php",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
		}
		});
	});
    //$('#parag').append("Hello World!");
    //save les profs surveillants
    $("#submitDS").click(function(e){
      e.preventDefault();
      //alert(document.getElementById("selection").options[sel.selectedIndex].text);
      let $array1 = $(".survItems");
      let mySurvList = [];
      for(let i =0 ; i < $array1.length; i++){
        mySurvList.push($array1[i].innerHTML);
      }
      
      
     $("#content").load("../Controllers/saveProfs.php",{survList : mySurvList, typeDs : $("#selection").children("option:selected").val(),
        date : $("#date").val(), local : $("#local").val(), heure :$("#heure_debut").val() +" - "+ $("#heure_fin").val(),idModule :$("#idModule").html()
    });
      
    });


    //buttons
    $(".btn").click(function(e){
      $(".btn").attr("class","btn btn-secondary my-2");
      var $target = e.target;
      $(e.target).removeClass("btn btn-secondary my-2");
      $(e.target).addClass("btn btn-primary my-2");
      
      if(e.target.innerHTML == "Afficher les Professeurs"){
        alert("do les profs");
        $("#content").load("../Controllers/afficherController.php",{table:'prof'});
      }
      else if(e.target.innerHTML == "Afficher les Modules"){
        alert('do les modules');
        $("#content").load("../Controllers/afficherController.php",{table:'module'});
        
      }
      else if(e.target.innerHTML == "Afficher les Filieres"){
        alert('do les filieres');
        $("#content").load("../Controllers/afficherController.php",{table:'filiere'});
      }

    });
    
      //surveillant
      $('#surv').keyup(function(e) {
        //alert(e.target.value);
        $("#listAjax").load('getAllSurv.php',{surv : e.target.value},function(){
          $("td").hover(function(e){
            $(this).css({
              'background': '#22a2cf',
              'cursor' : "pointer"
            }
            );
          },function(e){
            $(this).css({
              'background': 'white',
              
            }
            );
          }),
          $("td").click(function(e){
            console.log(e.target);
            $("#surv").val(e.target.innerHTML);
            $("#listAjax").html("");
            $("#survList").html($("#survList").html() + '<input type="checkbox" id="scales" name="'+ e.target.innerHTML + '" checked hidden>'+"<li class='text-success survItems'>"+ e.target.innerHTML+"</li><br>");
          });
  
        });
  
        
        
        
      });


    $('#like').keyup(function(e) {
      //alert(e.target.value);
      $("#tab").load('getAll.php',{like : e.target.value},function(){
        $("td").hover(function(e){
          $(this).css({
            'background': 'orange',
            'cursor' : "pointer"
          }
          );
        },function(e){
          $(this).css({
            'background': 'white',
            
          }
          );
        }),
        $("td").click(function(e){
          console.log(e.target);
          $("#like").val(e.target.innerHTML);
        });

      });

      
      
      
    });
    $("#username").hover(function(e){
      $(this).val($(this).load("date.php"));
    });
    $("#submit").click(function(e){

      e.preventDefault();
    $("#parag").load("connexion.php",
    {
      username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
      password : $("#password").val()
  },); });
    $('#username').hover(
        function() {

            $.ajax({
              url : "date.php",
              //type : 'GET',

            success : function(code, statut){
           $("#username").val(code);// On passe code_html à jQuery() qui va nous créer l'arbre DOM !
       },

       error : function(resultat, statut, erreur){
        $("#username").val("matrawalo");// On passe code_html à jQuery() qui va nous créer l'arbre DOM !
       },

       complete : function(resultat, statut){
        
       }

    });
           
  })

 

  $("#submit").click(function(e){
    e.preventDefault();

    $.post(
        'connexion.php', // Un script PHP que l'on va créer juste après
        'text',
        {
            username : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
            password : $("#password").val()
        },

        function(data){

            if(data == 'Success'){
                 // Le membre est connecté. Ajoutons lui un message dans la page HTML.

                 $("#parag").html("<p>Vous avez été connecté avec succès !</p>");
                 console.log("parag");
            }
            else{
                 // Le membre n'a pas été connecté. (data vaut ici "failed")

                 $("#parag").html("<p>Erreur lors de la connexion...</p>");
                 console.log("failed");
            }
     
        }
        
     );
});



// scripts ajax
function selectCountry(val) {
  $("#search-box").val(val);
  $("#suggesstion-box").hide();
  }
function getXMLHTTPRequest() {

  let  xhr = null;
	
  if(window.XMLHttpRequest || window.ActiveXObject){
    if(window.ActiveXObject){
      try{
        xhr = new ActiveXObject("Msxml2.XMLHTTP");
      }catch(e){
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
      }
    }else{
      xhr = new XMLHttpRequest(); 
    }
    return xhr;
  }else{
    alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
    return;
  }
  
  }
  
   
  
  function getServerTime() {
    var myReq = new XMLHttpRequest();
  
   var thePage = 'servertime.php';
  
   myRand = parseInt(Math.random()*999999999999999);
  
   var theURL = thePage +"?rand="+myRand;
  
   myReq.open("GET", theURL, true);
  
   myReq.onreadystatechange = theHTTPResponse;
  
   myReq.send(null);
  
  }
