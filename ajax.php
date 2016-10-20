<html>
<head><title>PHP TEST 2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
<!--
$( function() {
  $('#ajax-button').click(function(){
    $.ajax( {
      url: 'ajax-result.php',
      data: {
        host: $('.host').val(),
        dbname: $('.dbname').val(),
        user: $('.user').val(),
        pass: $('.pass').val()
      },
      success: function( data ) {
        $('#ajax-status').text('読み込み成功');
        $('#connection-status').text(data);
      },
      error: function( data ) {
        $('#connection-status').text('読み込み失敗');
      }
    });
  });
});
// -->
</script>
</head>
<body>
  <input type="text" name="host" class="host" />
  <input type="text" name="dbname" class="dbname" />
  <input type="text" name="user" class="user" />
  <input type="text" name="pass" class="pass" />
  <p>
    <button id="ajax-button">接続</button>
  </p>
  <p id="ajax-status"></p>
  <p id="connection-status"></p>
</body>
</html>