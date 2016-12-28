'use strict';

var test = exports = module.exports = {};

test.init = function init(targetName) {
  this.targetName = targetName;
};

test.getName = function getName() {
  return this.targetName;
};
