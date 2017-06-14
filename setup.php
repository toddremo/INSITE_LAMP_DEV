<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>

      <?php // Example 26-3: setup.php
  require_once 'functions.php';

  createTable('SOCKET',
              'SOCKET_UUID VARCHAR(36) NOT NULL,
               CYCLE_COUNT INTEGER DEFAULT 0 NOT NULL CHECK (CYCLE_COUNT >= 0),
               TEMP_L20C INTEGER DEFAULT 0 NOT NULL CHECK (TEMP_L20C >= 0),
               TEMP_G85C INTEGER DEFAULT 0 NOT NULL CHECK (TEMP_G85C >= 0),
               PRIMARY KEY (SOCKET_UUID)');

  createTable('members',
              'user VARCHAR(16),
              pass VARCHAR(16),
              INDEX(user(6))');
      ?>

    <br>...done.
  </body>
</html>
