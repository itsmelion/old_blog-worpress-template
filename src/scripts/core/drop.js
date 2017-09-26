(function () {
  var setupExamples = function () {
    return $('.menu-item-has-children').each(function () {
      var item, target, content, drop;
      item = this;
      target = item; //item.querySelector('.drop-target')
      content = item.querySelector('.sub-menu').innerHTML;
      return drop = new Drop({
        target: item,
        content: content,
        classes: '',
        position: 'bottom left',
        constrainToWindow: true,
        constrainToScrollParent: false,
        openOn: 'hover focus',
        tetherOptions: {
          constraints: [{
            to: 'scrollParent',
            attachment: 'none together',
            pin: true
          }],
          optimizations: {
            moveElement: false
          }
        }
      });
    });
  };
  setupExamples();

}).call(this);