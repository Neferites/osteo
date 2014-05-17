    <footer class="my-footer">
      <div class="container">
          
        <div class="col-md-4">
          <h4 class="page-header-footer"><i class="fa fa-user"></i> Votre ostéopathe</h4>
          <ul class="list-unstyled">
            <li><a href="#votre-osteo">Son pacours</a></li>
            <li><a href="#cabinet">Le cabinet</a></li>
            <li><a href="#tarifs">Les tarifs</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h4 class="page-header-footer"><i class="fa fa-calendar"></i> Les consultations</h4>
          <ul class="list-unstyled">
            <li><a href="#adulte">Adultes</a></li>
            <li><a href="#nourrisson">Nourrissons</a></li>
            <li><a href="#adulte">Femmes enceintes</a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h4 class="page-header-footer"><i class="fa fa-info-circle"></i> Informations</h4>
          <ul class="list-unstyled">
            <li><a href="#plan">Plan d'accès</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Plan du site</a></li>
          </ul>
        </div>
          
      <p class="text-center"><small>© 2011-2014 Marie Fayolle</small></p>
      <p class="text-center"><small>Sité créé par: <a href="http://lalhossri.fr" class="page-header-footer lolo">Laurent Al Hossri</a></small></p>
      </div>
    <script src="//code.jquery.com/jquery.js"></script>

    <script type="text/javascript" src="js/dropdown.js"></script>
    <script type="text/javascript" src="js/anchor.js"></script>
    <script type="text/javascript" src="js/up.js"></script>


    <!-- yea, yea, not a cdn, i know -->
    <script src="//rawgithub.com/ashleydw/lightbox/master/dist/ekko-lightbox.js"></script>
    <script type="text/javascript">
      $(document).ready(function ($) {

        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          return $(this).ekkoLightbox({
            always_show_close: true
          });
        });

      });
    </script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
    </footer>

    <div id="btn_up">
      <i class="fa fa-chevron-circle-up fa-5x"></i>
    </div>

  </body>
</html>