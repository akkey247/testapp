<html>
<head><title>PHP TEST 2</title></head>
<script
  src="http://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<script>
<!--
jQuery( function() {
    jQuery( '#jquery-sample-button' ) . toggle(
        function() {
            jQuery . ajax( {
                url: 'jquery-sample-ajax-php.php',
                data: {
                    year: '2011',
                    month: '11',
                    day: '24'
                },
                success: function( data ) {
                    jQuery( '#jquery-sample-ajax' ) . html( data );
                    jQuery( '#jquery-sample-textStatus' ) . text( '読み込み成功' );
                },
                error: function( data ) {
                    jQuery( '#jquery-sample-textStatus' ) . text( '読み込み失敗' );
                }
            } );
        },
        function() {
            jQuery( '#jquery-sample-ajax' ) . html( '' );
            jQuery( '#jquery-sample-textStatus' ) . text( '' );
        }
    );
} );
// -->
</script>
<style type="text/css">
<!--
#jquery-sample {
    margin: 10px;
    width: 200px;
}
#jquery-sample-ajax {
    margin: 10px;
    padding: 10px;
    height: 100px;
    background-color: yellow;
    border: 1px solid gray;
    border-radius: 10px;
}
-->
</style>
<body>
<div id="jquery-sample">
    <p>
        <button id="jquery-sample-button">toggle</button>
        <span id="jquery-sample-textStatus"></span>
    </p>
    <div id="jquery-sample-ajax"></div>
</div>
</body>
</html>