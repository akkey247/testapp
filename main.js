var express = require('express') //expressモジュール呼び出し
var subfunc = require('test-module') //自分で作ったテストモジュールの呼び出し
var test = require('./testClass.js') //自分で作ったテストクラスの呼び出し
var calc = require('./calcClass.js') //自分で作った計算クラスの呼び出し
var bodyParser = require('body-parser'); //JSON受け取り用にbody-parserモジュール呼び出し

var app = express()

app.use(bodyParser.urlencoded({
    extended: true
}));
app.use(bodyParser.json());

// `/hello` にアクセスした際に「Hello World」と表示
app.get('/hello', function (req, res) {
  res.send('Hello World')
})

// `/test` にアクセスした際に「test」と表示
app.get('/test', function (req, res) {
  res.send(subfunc())
})

// `/test-class` にアクセスした際にクラスを初期化した際の文字を表示
app.get('/test-class', function (req, res) {
  test.init('kimoto akihiko');
  res.send(test.getName())
})

// `/calc-add/:a/:b` にアクセスした際にa+bの値を表示
app.get('/calc-add/:a/:b', function (req, res) {
  calc.init(req.params.a, req.params.b);
  res.send(calc.calcAdd())
})
// `/calc-sub/:a/:b` にアクセスした際にa-bの値を表示
app.get('/calc-sub/:a/:b', function (req, res) {
  calc.init(req.params.a, req.params.b);
  res.send(calc.calcSub())
})
// `/calc-div/:a/:b` にアクセスした際にa*bの値を表示
app.get('/calc-div/:a/:b', function (req, res) {
  calc.init(req.params.a, req.params.b);
  res.send(calc.calcDiv())
})
// `/calc-mul/:a/:b` にアクセスした際にa/bの値を表示
app.get('/calc-mul/:a/:b', function (req, res) {
  calc.init(req.params.a, req.params.b);
  res.send(calc.calcMul())
})

// `/post-json` にPOSTリクエストを送ると内容を表示
// 例: `curl -X POST http://localhost:8080/post-json -H "Accept: application/json" -H "Content-type: application/json" -d '{ "name" : "kimoto" }'`
app.post('/post-json', function (req, res) {
    // リクエストボディを出力
    console.log(req.body);
    // パラメータ名、nameを出力
    console.log(req.body.name);

    res.send('POST request to the homepage');
})

// `/create-meiban` に生年月日時、生まれた場所を送ると名盤データを返却(まだできない⇒代わりに名前と生年月日時を表示)
// 例: `curl -X POST http://localhost:8080/create-meiban -H "Accept: application/json" -H "Content-type: application/json" -d '{ "name" : "kimoto" }'`
app.post('/create-meiban', function (req, res) {
    var birthName   = req.body.name;
    var birthYear   = req.body.year;
    var birthMonth  = req.body.month;
    var birthDay    = req.body.day;
    var birthHour   = req.body.hour;
    var birthMinuts = req.body.minuts;
    // リクエストボディを出力
    console.log(req.body);
    // パラメータ名、nameを出力
    console.log(birthName);
    // パラメータ名、nameを出力
    console.log(birthYear + '年' + birthMonth + '月' + birthDay + '日' + birthHour + '時' + birthMinuts + '分');

    res.send('POST request received.');
})

app.listen(process.env.PORT || 8080)
