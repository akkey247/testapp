<html>
<head><title>PHP TEST 2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type="text/javascript">
<!--
$( function() {
  $('#ajax-button').onclick(function(){
    $.ajax( {
      url: 'jquery-sample-ajax-php.php',
      data: {
        year: '2011',
        month: '11',
        day: '24'
      },
      success: function( data ) {
        $('#result-box').html(data);
        $('#connection-status').text('読み込み成功');
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
  <p>
    <button id="ajax-button">クリック</button>
    <span id="connection-status"></span>
  </p>
  <div id="result-box"></div>
</body>
</html>