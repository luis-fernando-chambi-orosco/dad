
<!DOCTYPE html>
<html>

<head>

  <title>Minics</title>

</head>

<body class="sub_page">

  {% extends "barra.html" %}
  {% load static %}
  {% block content %}


<section style="background-color: #f7f7f7; padding-top: 10px;">
  <div >
    <h3 class="text-center">Como te gustaria ponerte en contacto con nosotros</h3>
    <hr>
  </div>
</section>

 <section class="slider_section">

  <div class="container">
		<div class="row">
				<div class="col-md-3">
						<div class="panel panel-danger">
								<div class="panel-heading" style="background-color: #A7E2EC;">
										<h3 class="text-center"><img src="{% static 'images/facebook.png' %}" style="width: 50px; height: 50px;"> Facebook</h3>     
                </div>
								<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">
												<span class="glyphicon glyphicon-calendar"></span> Te atenderemos en nuestra pagina de facebook, donde podras interactuar con el staff de la pagina y reaccionar a las publicaciones.
										</li>
								</ul>
								<div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="#">IR A LA PAGINA</a> </div>
						</div>
				</div>
				<div class="col-md-3">
          <div class="panel panel-danger">
              <div class="panel-heading" style="background-color: #A7ECB7;">
                  <h3 class="text-center"><img src="{% static 'images/whatsapp.png' %}" style="width: 50px; height: 50px;"> Whatsapp</h3>     
              </div>
              <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">
                      <span class="glyphicon glyphicon-calendar"></span>Se te proporcionara el numero de uno de nuestros corresponsales, con el cual podras chatear para saber mas de nuestros productos.
                  </li>
              </ul>
              <div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="#">MAS INFORMACION</a> </div>
          </div>
      </div>
				<div class="col-md-3">
						<div class="panel panel-danger">
								<div class="panel-heading" style="background-color: #ECA7A7;">
										<h3 class="text-center"><img src="{% static 'images/carta.png' %}" style="width: 50px; height: 50px;"> Escribenos</h3>     
                </div>
								<ul class="list-group list-group-flush text-center">
										<li class="list-group-item">
												<span class="glyphicon glyphicon-calendar"></span> Puedes escribirnos a nuestro correo "demo@gmail.com" para resolver cualquiera de tus dudas o para hacer reclamos.
										</li>
								</ul>
								<div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="#">COPIAR CORREO</a> </div>
						</div>
				</div>
				<div class="col-md-3">
          <div class="panel panel-danger">
              <div class="panel-heading" style="background-color: #C4A7EC;">
                  <h3 class="text-center"><img src="{% static 'images/trabajador.png' %}" style="width: 50px; height: 50px;"> Hablanos</h3>     
              </div>
              <ul class="list-group list-group-flush text-center">
                  <li class="list-group-item">
                      <span class="glyphicon glyphicon-calendar"></span> Puedes venir directamente a las oficinas autorizadas disponibles en tu ciudad para hacer tus consultas o comprar nuestros productos.
                  </li>
              </ul>
              <div class="panel-footer"> <a class="btn btn-lg btn-block btn-danger" href="#">ARIR GOOGLE MAPS</a> </div>
          </div>
      </div>
		</div>
</div>

 </section>

</body>
{% endblock %}
</html>
