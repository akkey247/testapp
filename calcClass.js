'use strict';

var calc = exports = module.exports = {};

calc.init = function init(a, b) {
  this.a = parseInt(a);
  this.b = parseInt(b);
};

calc.calcAdd = function calcAdd() {
  return this.convertResult(this.a + this.b);
};

calc.calcSub = function calcSub() {
  return this.convertResult(this.a - this.b);
};

calc.calcDiv = function calcDiv() {
  return this.convertResult(this.a * this.b);
};

calc.calcMul = function calcMul() {
  return this.convertResult(this.a / this.b);
};

calc.convertResult = function convertResult(result) {
  return result.toString();
};