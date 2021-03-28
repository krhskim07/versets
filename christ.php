<?php include_once('inc/head.inc.php') ?>
<?php include_once('inc/header.inc.php') ?>

<?php include('data/christ_data.php') ?>
    <div class="container-fluid">
        <h2>À propos du Christ</h2>
      <div class="row">
        <div class="col">
        <?php foreach( $cversets as $cverset ) : ?>
          <div class="card">
            <div class="card-body">
              <p class="card-text"><?php echo $cverset['verset'] ?></p>
              <p><?php echo $cverset['livre'] ?></p>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>
  <script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
</body>
</html>