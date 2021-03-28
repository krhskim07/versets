<?php include_once('inc/head.inc.php') ?>
<?php include('data/bible_data.php') ?>
<?php include_once('inc/header.inc.php') ?>

    <div class="container-fluid">
        <h2>À propos de la Bible</h2>
      <div class="row">
        <div class="col">
        <?php foreach( $bibles as $bible ) : ?>
          <div class="card">
            <div class="card-body">
              <p class="card-text"><?php echo $bible['verset'] ?></p>
              <p><?php echo $bible['livre'] ?></p>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
  </div>

<?php include_once('inc/footer.inc.php') ?>
  <script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
</body>
</html>