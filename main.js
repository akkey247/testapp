var express = require('express') //expressモジュール呼び出し
var subfunc = require('test-module') //自分で作ったテストモジュールの呼び出し

var app = express()

// `/hello` にアクセスした際に「Hello World」と表示
app.get('/hello', function (req, res) {
  res.send('Hello World')
})

// `/test` にアクセスした際に「test」と表示
app.get('/test', function (req, res) {
  res.send(subfunc())
})

app.listen(process.env.PORT || 8080)
