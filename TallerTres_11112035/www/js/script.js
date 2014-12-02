var tipo = $("#tipoActivo").val();
var marker;

var canvas = document.getElementById("graphCanvas");
var context = canvas.getContext("2d");

context.lineWidth = 0;
context.textAlign="center";
context.font = "16px sans-serif";
context.fillStyle = 'gray';
context.fillText("Arrastrar Aquí",140,100);


function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("Text",ev.target.id);   
}

function drop(ev) {
    ev.preventDefault();
    var offset = ev.dataTransfer.getData("text/plain").split(',');
    var data = ev.dataTransfer.getData("Text");

    if(data == "img1"){
        $("#tipoActivo").val("1");
    }
    if(data == "img2"){
        $("#tipoActivo").val("2");
    }
    if(data == "img3"){
        $("#tipoActivo").val("3");
    }
    if(data == "img4"){
        $("#tipoActivo").val("4");
    }

    tipo = $("#tipoActivo").val();    
    
    if(tipo<=3){
        getLocations("1");
    }else{
        getLocations("2");
    }

    context.fillStyle="#141414";
    context.fillRect(0,0,340,200); 
	context.drawImage(document.getElementById(data), 110, 70);
}

function getLocations(variable){
    jQuery(document).ready(function(){

        //Request AJAX para obtener las ubicaciones del tipo escogido
        if(variable=="1"){        
            $.ajax({            
                type: "POST",
                url: "api/getLocations.php",                
                data: { tipo: tipo }            
            }).done(function(){
                console.log("Solicitud enviada al API");
            }).success(function(result){
                var locations = JSON.parse(result);
                mostrarMarkers(locations); 
            }).error(function(error){
                console.log("Error: "+error);
            })   
        }

        //Request AJAX para obtener todas las ubicaciones
        if(variable=="2"){        
            $.ajax({            
                type: "POST",
                url: "api/getAllLocations.php",                
                data: { tipo: tipo }            
            }).done(function(){
                console.log("Solicitud enviada al API");
            }).success(function(result){
                var locations = JSON.parse(result);
                mostrarMarkers(locations); 
            }).error(function(error){
                console.log("Error: "+error);
            })   
        } 
    });
}

function mostrarMarkers (locations) {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(3.4219502, -76.52954),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });


    var infowindow = new google.maps.InfoWindow();

    var i;

    for (i = 0; i < locations.length; i++) {
        var marcadores = locations[i];
        var icon = "";

        switch (marcadores.tipo) {
            case "1":
                icon = "red";
                break;
            case "2":
                icon = "blue";
                break;
            case "3":
                icon = "yellow";
                break;
            case "4":
                icon = "white";
                break;
        }
        icon = "img/" + icon + ".png";

        marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2]),
          map: map,
          animation: google.maps.Animation.DROP,
          icon: new google.maps.MarkerImage(icon)
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          
          return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);

            marker.setAnimation(google.maps.Animation.BOUNCE);

            setTimeout(function() {
                marker.setAnimation(null)
            }, 750);
          }
          

        })(marker, i));
    }            
}
