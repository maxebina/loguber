	<?php $thisPage="Tecnologia"; ?>
    <?php $your_meta_description="Descrição aqui"; ?>
	<?php include("header.php"); ?>
		<div class="page">
    		<div class="banner-page banner-loguber">
    			<h1>TECNOLOGIA</h1>
    		</div>
    		<section>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="btn1" value="Click">
                    Collapsible Group Item #1
                  </a>
                </h4>

              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.le VHS.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="btn2" value="Click">
                    Collapsible Group Item #2
                  </a>
                </h4>

              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="btn3" value="Click">
                    Collapsible Group Item #3
                  </a>
                </h4>

              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
              </div>
            </div>
          </div>
            </section>
            <div> <img src="http://www.datanovasoftware.com/images/truck.png" id="img"/> </div>
	    </div>
	<?php include("footer.php"); ?>

  <script>
    $(document).ready(function () {
        $( "#btn1" ).click(function() {
            $("#img").attr("src", "http://www.datanovasoftware.com/images/truck.png");
       });
       $( "#btn2" ).click(function() {
            $("#img").attr("src", "http://icons.iconarchive.com/icons/icons-land/transport/256/Truck-icon.png");
       });
       $( "#btn3" ).click(function() {
            $("#img").attr("src", "https://www.iconexperience.com/_img/v_collection_png/256x256/shadow/truck_blue.png");
       });
    });
  </script>