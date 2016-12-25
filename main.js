var express = require('express')
var app = express()

app.get('/hello', function (req, res) {
  res.send('Hello World')
})

app.get('/test', function (req, res) {
  res.send('Test')
})

app.listen(process.env.PORT || 8080)